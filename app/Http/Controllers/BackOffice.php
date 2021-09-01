<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class BackOffice extends Controller
{
    //
    public function index(){
        $dataPortfolio=Portfolio::all();
        return view('backoffice.backoffice',compact('dataPortfolio'));
    }
    public function create(){
        return view('backoffice.createPortfolio');
    }
    public function destroy($id){
        $dataDelete=Portfolio::find($id);
        $dataDelete->delete();
        return redirect()->route('backoffice');
    }
    public function show(Portfolio $id){
        $portefolio=$id;
        return view('backoffice.showPortfolio',compact('portefolio'));
    }
    public function edit(Portfolio $id){
        $portefolio=$id;
        return view('backoffice.editPortefolio',compact('portefolio'));
    }
    public function update(Portfolio $id, Request $request){
        $portefolio = $id;
        $portefolio->image = $request->image;
        $portefolio->titre = $request->titre;
        $portefolio->description = $request->description;
        $portefolio->save();
        return redirect()->route('showB', $portefolio->id);
    }
}
