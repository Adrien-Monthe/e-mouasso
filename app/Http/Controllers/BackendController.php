<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $data = [];
        return view('backend.pages.home', $data);
    }

    public function contact()
    {
        return view('backend.pages.contact');
    }
}
