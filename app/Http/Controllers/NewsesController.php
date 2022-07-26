<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsesController extends Controller
{
    public function index()
    {
        $newses = new News();
        return view('newses', ['newses' => $newses->all()]);
    }
}


