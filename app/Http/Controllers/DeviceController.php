<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('pages.device.index');
    }

    public function detail()
    {
        // Membaca data dari file JSON
        $json = file_get_contents(public_path('data.json'));
        $devices = json_decode($json, true)['devices'];
        
       // Mengirim data ke view
       return view('pages.device.detail', compact('devices'));
    }
}
