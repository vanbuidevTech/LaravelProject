<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCategoriesController extends Controller
{
    public function show()
    {
        return view('posts.show');
    }
}
