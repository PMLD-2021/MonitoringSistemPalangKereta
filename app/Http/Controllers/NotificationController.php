<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        return view('notification.index', [
            "title" => "Notification"
        ]);
    }
}