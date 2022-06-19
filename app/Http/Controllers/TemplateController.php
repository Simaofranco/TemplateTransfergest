<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('index');
    }

    public function escala(){
        $ola = "Ola";

        return view('escala', compact('ola'));
    }
}
