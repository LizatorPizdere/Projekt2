<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return view('addMember');

    }
    
    function addData(Request $req)
    {
        $profil = new Profil;
        $profil->ime = $req->ime;
        
        $profil->prezime = $req->prezime;
        
        $profil->odjel = $req->odjel;

        $profil->isAdmin = $req->isAdmin;
        $profil->save();

    }
}
