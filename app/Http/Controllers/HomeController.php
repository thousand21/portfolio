<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $anniversaire="21 fevrier 1996";
        $website="www.vanhoa.be";
        $phone="0485231012";
        $ville="Bruxelles";
        $age="25";
        $degre="CESS";
        $email="vantran@outlook.fr";
        $freelance="available";
        return view('pages.portfolio',compact('anniversaire','website','phone','ville','age','degre','email','freelance'));
    }

    public function store(Request $request){
        $newEntry=new Contact;
        $newEntry->nom=$request->nom;
        $newEntry->mail=$request->mail;
        $newEntry->sujet=$request->sujet;
        $newEntry->message=$request->message;
        $newEntry->save();
        return redirect()->back();

    }
}
