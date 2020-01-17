<?php

namespace App\Http\Controllers\PagesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Controller extends Controller
{
    public function index() {
        return view('pages.index')
    }
}
