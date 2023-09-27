<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use Illuminate\Http\Request;

class IntegranteController extends Controller
{

    private $path = "fotos/integrantes";

    public function index()
    {

        $data = Integrante::orderBy('nome')->get();
        return view('integrante.index', compact('data'));
    }

    public function create()
    {
        return view('integrante.create');
    }

    public function store(Request $request)
    {

        $regras = [
            'nome' => 'required|max:100|min:10',
            'biografia' => 'required|max:1000|min:20',
            'foto' => 'required'
        ];

        $msgs = [
            "required" => "O preenchimento do campo [:attribute] é obrigatório!",
            "max" => "O campo [:attribute] possui tamanho máximo de [:max] caracteres!",
            "min" => "O campo [:attribute] possui tamanho mínimo de [:min] caracteres!",
        ];

        $request->validate($regras, $msgs);

        if ($request->hasFile('foto')) {

           
            $reg = new Integrante();
            $reg->nome = $request->nome;
            $reg->biografia = $request->biografia;
            $reg->save();

            
            $id = $reg->id;
            $extensao_arq = $request->file('foto')->getClientOriginalExtension();
            $nome_arq = $id . '_' . time() . '.' . $extensao_arq;
            $request->file('foto')->storeAs("public/$this->path", $nome_arq);
            $reg->foto = $this->path . "/" . $nome_arq;
            $reg->save();
        }

        return redirect()->route('integrante.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $data = Integrante::find($id);

        if (!isset($data)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        return view('integrante.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $reg = Integrante::find($id);

        if (!isset($reg)) {
            return redirect()->route('integrante.index')->with('error', 'Registro não encontrado.');
        }

        $reg->nome = $request->nome;
        $reg->biografia = $request->biografia;
        $reg->foto = $request->foto;
        $reg->save();

        return redirect()->route('integrante.index');
    }


    public function destroy($id)
    {
      
        $reg = Integrante::find($id);

        if ($reg) {
   
            $reg->delete();

           
            return redirect()->route('integrante.index');
        } else {
            
            return redirect()->route('integrante.index')->with('error', 'Registro não encontrado.');
        }
    }
}
