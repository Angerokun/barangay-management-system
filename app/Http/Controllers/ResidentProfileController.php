<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentProfileController extends Controller
{
    public function index()
    {
        return view('residents.index');
    }
}
