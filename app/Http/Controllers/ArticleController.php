<?php

namespace App\Http\Controllers;

class ArticleController
{
    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        return view('article.create');
    }

    public function show()
    {
        return view('article.show');
    }
}
