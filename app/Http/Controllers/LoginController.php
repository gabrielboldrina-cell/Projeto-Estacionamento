<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index(Request $request)
    {
        return view('Index');
    }
}
