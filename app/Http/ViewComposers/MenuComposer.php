<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class MenuComposer
{
    protected $menus;

    public function __construct()
    {
        $this->menus = [
            route('home.index') => 'Home',
            route('home.works.index') => 'Works',
            route('home.about') => 'About',
            route('home.contact') => 'Contact',
        ];
    }

    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }
}