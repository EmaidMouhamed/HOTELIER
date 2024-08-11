<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function acceuil(){

        return view('front.pages.main');
    }

    public function about(){

        return view('front.pages.about');
    }

    public function services(){

        return view('front.pages.services');
    }

    public function rooms(){

        return view('front.pages.rooms');
    }

    public function booking(){

        return view('front.pages.booking');
    }

    public function team(){

        return view('front.pages.team');
    }

    public function testimonial(){

        return view('front.pages.testimonial');
    }

    public function contact(){

        return view('front.pages.contact');
    }
}
