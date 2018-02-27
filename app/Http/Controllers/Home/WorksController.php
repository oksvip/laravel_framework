<?php

namespace App\Http\Controllers\Home;

class WorksController extends HomeBaseController
{
    public function index()
    {
        return view('home.works.index');
    }

    public function show()
    {
        return view('home.works.show');
    }
}
