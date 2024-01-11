<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiareController extends Controller
{

        public function index()
    {
        $stagiaires = [["nom"=>"yassir","prenom"=>"aghbalou","age"=>"22","email"=>"aaaaa@gmail.com"]];
        return view("pages/index",["stagiaire"=>$stagiaires]);
    }}

