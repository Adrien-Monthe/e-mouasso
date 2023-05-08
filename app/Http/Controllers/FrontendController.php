<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [];
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->limit(3)->get();
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

    public function blog()
    {
        $data = [];
        $data['blogs'] = Blog::orderBy('id', 'desc')->paginate(6);
        return view('frontend.pages.blog.blogs', $data);
    }

    public function services()
    {
        $data = [];
        return view('frontend.pages.services.services', $data);
    }

    public function consultationjuridiques()
    {
        $data = [];
        return view('frontend.pages.services.consultation-juridiques', $data);
    }

    public function recouvrementetcréances()
    {
        $data = [];
        return view('frontend.pages.services.recouvrement-et-créances', $data);
    }

    public function assistancesjuridiques()
    {
        $data = [];
        return view('frontend.pages.services.assistances-juridiques', $data);
    }


    public function auditjuridique()
    {
        $data = [];
        return view('frontend.pages.services.audit-juridique', $data);
    }

    public function avislégal()
    {
        $data = [];
        return view('frontend.pages.services.avis-légal', $data);
    }

    public function juridictionsciviles()
    {
        $data = [];
        return view('frontend.pages.services.juridictions-civiles', $data);
    }
}
