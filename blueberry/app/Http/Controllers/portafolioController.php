<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portafolioController extends Controller
{
    public function __invoke(){
        return view('portafolio');
    }
}
