<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBcontroller extends Controller
{
    // public function store(Request $request){
    //     return redirect('grazie');
    // }
    public function image(){
        return view('mailForm.thanks');
    }
}
