<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    	function mostrarForm()
	{
		return view ('formulario');
	}
	public function processarForm(request $request)
	{
		$nome=$request->nome;
		$morada=$request->morada;
		$automovel=$request->automovel;
		$casa=$request->casa;
	return view ('form-enviado', [
			'nome'=>$nome,
			'morada'=>$morada,
			'automovel'=>$automovel
		
	]);
	}
	public function index(){
		return view('formulario');
	}
}
