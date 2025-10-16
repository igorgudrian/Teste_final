<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Professor;

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = professor::all();
        $professor_nome = Professor::where('nome','like','João%')
        ->where('nome','like','%Silva')
        ->get();
        return view('professor.index', compact('professores','professor_nome'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extensao_arquivo = $request->foto->getClientOriginalExtension();
        $foto = $nome_arquivo. '-' . time() . '.' . $extensao_arquivo;

         $professor = Professor::create([
            'disciplina' => $request->matricula,
            'nome' => $request->nome,
            'foto' => 'imagens/' . $foto
         ]);
        $request->foto->move(public_path('imagens'),$foto);
        
        $professor->contatoProfessor()->create([
            'telefone' => $request->telefone,
            'email' => $request->email
        ]);
        
    

        return redirect()->route('professor.index');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = professor::find($id);
        return view('professor.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = professor::find($id);
        return view('professor.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nome_arquivo = pathinfo($request->foto->getClientOriginalName(), PATHINFO_FILENAME);
        $extensao_arquivo = $request->foto->getClientOriginalExtension();
        $foto = $nome_arquivo. '-' . time() . '.' . $extensao_arquivo;

        $request->foto->move(public_path('imagens'),$foto);
        $professor = professor::find($id);
        professor->update([
            'disciplina' => $request->matricula,
            'nome' => $request->nome,
            'foto' => 'imagens/' . $foto
        ]);

        return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = professor::find($id);
        $professor->delete();
        return redirect()->route('professor.index');

    }
}
