<?php

namespace App\Http\Controllers;

use App\Mail\standardMail;
use App\Models\formcontatti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;

class PublicController extends Controller
{
    public function Home(){
        return view('welcome');
    }
    public function Personale(){
        return view('chiSiamo');
    }
    public function Contatti(){
        return view('formContatti');
    }
    public function InviaMail(Request $request){
        $mail=$request->email;
        $name=$request->name;
        $text=$request->contenuto;
        Mail::to($mail)->send(new standardMail());
        $form= new formcontatti();
        $form->email=$request->email;
        $form->contenuto=$request->contenuto;
        $form->save();
        return redirect(route('grazie'));
    }
    public function Grazie(){
        return view('Grazie');
    }
}
