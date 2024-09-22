<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCustomerID;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
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

        $paidBills = collect($customerData['bills'])->filter(function ($bill) {
            return $bill['status'] === 'Paid';
        })->sortByDesc('due_date')->toArray();

        return view('tagihan', ['bills' => $paidBills]);
    }

    public function detail()
    {
        $UserCustomerID = UserCustomerID::where('user_id', Auth::user()->id)->first();
        $customerID = $UserCustomerID->CustomerID;
        $client = new Client([
            'base_uri' => env('BACKEND_URL'),
            'timeout'  => 2.0,
        ]);
        $response = $client->get('/api/flashnet/v1.0/customer/' . $customerID);
        $customerData = json_decode($response->getBody(), true);

        // Filter unpaid bills
        $unpaidBills = collect($customerData['bills'])->filter(function ($bill) {
            return $bill['status'] === 'UnPaid';
        })->sortByDesc('due_date');

         // Calculate total amount and period
        $totalAmount = $unpaidBills->sum('amount');
        $startPeriod = $unpaidBills->min('due_date');
        $endPeriod = $unpaidBills->max('due_date');


        return view('pages.transaction.payment-detail', [
            'customer' => $customerData,
            'totalAmount' => $totalAmount,
            'startPeriod' => $startPeriod,
            'endPeriod' => $endPeriod,
            'unpaidBills' => $unpaidBills
        ]);
    }

    public function payment()
    {
        $UserCustomerID = UserCustomerID::where('user_id', Auth::user()->id)->first();
        $customerID = $UserCustomerID->CustomerID;
        $client = new Client([
            'base_uri' => env('BACKEND_URL'),
            'timeout'  => 2.0,
        ]);
        $response = $client->get('/api/flashnet/v1.0/customer/' . $customerID);
        $customerData = json_decode($response->getBody(), true);

        $unpaidBills = collect($customerData['bills'])->filter(function ($bill) {
            return $bill['status'] === 'UnPaid';
        })->sortByDesc('due_date');

        $totalAmount = $unpaidBills->sum('amount');

        return view('pages.transaction.waiting-for-payment', [
            'customer' => $customerData,
            'totalAmount' => $totalAmount
        ]);
    }
}
