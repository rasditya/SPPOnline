<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard'); // Pastikan Anda memiliki file view 'dashboard.blade.php'
    }
}
