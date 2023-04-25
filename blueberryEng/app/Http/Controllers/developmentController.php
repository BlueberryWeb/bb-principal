<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class developmentController extends Controller
{
    public function __invoke(){
        return view('Page.development');
    }
}
