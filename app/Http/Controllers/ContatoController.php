<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{
    public function enviaContato(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:5|max:100',         
            'email' => 'required|email',
            'phone' => 'required|min:5|max:100',       
            'money' => 'required',       
            'curriculo' => 'required'   
        ],[
            'name.required' => 'Preencha o campo nome',
            'name.min' => 'O nome deve ter no mínimo 5 caracteres',
            'name.max' => 'O nome deve ter no máximo 100 caracteres',

            'email.required' => 'Preencha o campo de email',
            'email.email' => 'Insira um email válido',
            'phone.required' => 'Insira um número de telefone',
            'money.required' => 'Insira sua pretenção salarial',
            'english.required' => 'Selecione seu nível de inglês',
            'curriculo.required' => 'Por favor, anexe o seu currículo'
        ]);

        if($request->file('curriculo')->isValid()) {
            $request->curriculo->storeAs('public/curriculos', $request->curriculo->getClientOriginalName());
        }

        Mail::to('corte_heberty@hotmail.com')->send(new ContatoEmail($request));
        return redirect()->route('index')->with('success','Email enviado com sucesso!');
    }
}
