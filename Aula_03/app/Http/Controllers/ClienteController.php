<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::all();
                    //nome da view       //nome do atributo $cliente sem $
       return view('cliente',compact('cliente'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
            $cliente ->  primeiroNome = $request -> txNomeCliente;
            $cliente ->  sobrenome = $request -> txSobrenome;

            $cliente -> save ();

            return redirect ('/cliente');
    }

}
