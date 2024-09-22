<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserCustomerID;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    public function index()
    {
        $UserCustomerID = UserCustomerID::where('user_id', Auth::user()->id)->first();
        $customerID = $UserCustomerID->CustomerID;
        $client = new Client([
            'base_uri' => env('BACKEND_URL'),
            'timeout'  => 2.0,
        ]);
        $response = $client->get('/api/flashnet/v1.0/customer/' . $customerID);
        $customerData = json_decode($response->getBody(), true);

        $unpaidBills = array_filter($customerData['bills'], function($bill) {
            return $bill['status'] === 'UnPaid';
        });

        $totalUnpaid = array_sum(array_column($unpaidBills, 'amount'));
        // dd($totalUnpaid);

        return view('home', ['customer' => $customerData, 'totalUnpaid' => $totalUnpaid]);
    }
}
