<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiController extends Controller
{
    public function index()
    {
        return view('audi.index', []);
    }
}
