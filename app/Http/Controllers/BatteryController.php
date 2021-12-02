<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatteryController extends Controller
{
    public function index()
    {
        return view('battery.index', [
            'title' => 'Battery'
        ]);
    }
}
