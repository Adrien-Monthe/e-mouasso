<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [];
        return view('frontend.pages.home', $data);
    }

    public function contact()
    {
        $data = [];
        return view('frontend.pages.contact', $data);
    }

    public function about()
    {
        $data = [];
        return view('frontend.pages.about', $data);
    }

    public function faqs()
    {
        $data = [];
        return view('frontend.pages.faq', $data);
    }
}
