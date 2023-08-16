<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MainController
{
    public function index(): View
    {
        return view('main.index');
    }
}
