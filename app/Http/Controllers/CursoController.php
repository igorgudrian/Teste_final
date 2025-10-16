<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        $curso_n_informatica = Curso::where('nome','!=','informatica')->get();
        $curso_igual = Curso::where('nome','=','administração')
        ->orWhere('nome','=','gestão')->get();
        return view('curso.index', compact('cursos','curso_n_informatica','curso_igual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Curso::create(['nome' => $request->nome]);
      return redirect()-> route('curso.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $curso = curso::find($id);
        return view('curso.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = curso::find($id);
        return view('curso.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('curso.index');
    }
}
