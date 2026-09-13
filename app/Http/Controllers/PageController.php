<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Versi Bahasa Indonesia (folder pages/id/)
    public function home()
    {
        return view('id.pages.home');
    }

    public function about()
    {
        return view('id.pages.about');
    }

    public function logo()
    {
        return view('id.pages.logo');
    }

    public function practice()
    {
        return view('id.pages.practice');
    }

    // public function cases()
    // {
    //     return view('id.pages.cases');
    // }

    public function gallery()
    {
        return view('id.pages.gallery');
    }

    public function news()
    {
        return view('id.pages.news');
    }

    public function contact()
    {
        return view('id.pages.contact');
    }

    // Versi Bahasa Inggris (folder pages/en/)
    public function homeEn()
    {
        return view('en.pages.home');
    }

    public function aboutEn()
    {
        return view('en.pages.about');
    }

    public function logoEn()
    {
        return view('en.pages.logo');
    }

    public function practiceEn()
    {
        return view('en.pages.practice');
    }

    // public function casesEn()
    // {
    //     return view('en.pages.cases');
    // }

    public function galleryEn()
    {
        return view('en.pages.gallery');
    }

    public function newsEn()
    {
        return view('en.pages.news');
    }

    public function contactEn()
    {
        return view('en.pages.contact');
    }
}
