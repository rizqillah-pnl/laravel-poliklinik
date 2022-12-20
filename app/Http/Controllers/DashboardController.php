<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class DashboardController extends Controller
{
    public function index()
    {
        $pasien = Pasien::get();
        return view('dashboard')->with(['pasien' => $pasien]);
    }
}
