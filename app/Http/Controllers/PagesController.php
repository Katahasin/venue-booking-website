<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
  
    public function rooms()
    {
        return view('frontend.rooms');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function rooms_classroom()
    {
        return view('frontend.rooms_classroom');
    }

    public function rooms_examhall()
    {
        return view('frontend.rooms_examhall');
    }

    public function rooms_lecture()
    {
        return view('frontend.rooms_lecture');
    }

    public function calendar()
    {
        return view('frontend.calendar');
    }
    public function calendar2()
    {
        return view('frontend.calendar2');
    }
    public function calendar3()
    {
        return view('frontend.calendar3');
    }
    public function calendar4()
    {
        return view('frontend.calendar4');
    }
    public function calendar5()
    {
        return view('frontend.calendar5');
    }
    public function calendar6()
    {
        return view('frontend.calendar6');
    }
 
 
}
