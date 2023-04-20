<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class mailController extends Controller
{
    public function store(Request $request){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'lada' => 'required',
            'message' => 'required'
        ]);
        //dd('entre');
        Mail::to('blueberryweb7@gmail.com')->queue(new contactMail($message));
        return redirect()->back();
    }
}
