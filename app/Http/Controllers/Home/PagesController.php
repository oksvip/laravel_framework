<?php

namespace App\Http\Controllers\Home;

class PagesController extends HomeBaseController
{
    public function about()
    {
        return view('home.pages.about');
    }

    public function contact()
    {
        return view('home.pages.contact');
    }
}
