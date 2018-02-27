<?php

namespace App\Http\Controllers\Home;

class IndexController extends HomeBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.pages.index');
    }
}
