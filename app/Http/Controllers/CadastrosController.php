<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('cadastros.index', ['cadastros'=>$cadastros]);
    }

    public function create()
    {
        return view('cadastros.create');

    }

    public function store(Request $request)
    {
        Cadastro::create($request->all());
        return redirect()->route('cadastros-index');
    }

    public function edit($id)
    {
        $cadastros = Cadastro::where('id',$id)->first();
        if(!empty($cadastros))
        {
            return view('cadastros.edit', ['cadastros'=>$cadastros]);
        }
        else
        {
            return redirect()->route('cadastros-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'experiencia' => $request->experiencia,
            'academico' => $request->academico,
            'usuario' => $request->usuario,
            'senha' => $request->senha,

        ];

        Cadastro::where('id',$id)->update($data);
        return redirect()->route('cadastros-index');

    }

    public function destroy($id)
    {
        Cadastro::where('id',$id)->delete();
        return redirect()->route('cadastros-index');
    }


}
