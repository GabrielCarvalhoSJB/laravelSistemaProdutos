<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index(){
    	$data['titulo']= "Minha Página de Contato";
    	return view('contato',$data);
    }
}
