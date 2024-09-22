<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\UserCustomerID;
use GuzzleHttp\Client;
use Illuminate\Validation\ValidationException;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'flashnet_id' => ['required', 'string', 'max:255', 'unique:user_customerid,CustomerID'], // Update validation for flashnet_id

        ]);


       // Validate flashnet_id with external API
       $client = new Client([
        'base_uri' => env('BACKEND_URL'),
        'timeout'  => 2.0,
    ]);

       try {
           $response = $client->get('/api/flashnet/v1.0/customer/' . $request->flashnet_id);
           $apiResponse = json_decode($response->getBody(), true);

           if (is_null($apiResponse) || !isset($apiResponse['bills'])) {
               throw new \Exception('Invalid Flashnet ID');
           }
       } catch (\Exception $e) {
           throw ValidationException::withMessages([
               'flashnet_id' => 'The provided Flashnet ID is invalid.',
           ]);
       }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        UserCustomerID::create([
            'user_id' => $user->id,
            'CustomerID' => $request->flashnet_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
