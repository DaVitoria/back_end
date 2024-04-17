<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        $courses = Course::all(); // Adicionando $courses aqui
        $user = User::all();
        return view('inscription.index', compact('inscriptions', 'courses', 'user')); // Passando $courses para a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all(); // Adicionando $courses aqui
        return view('inscription.create', compact('courses')); // Passando $courses para a view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inscription::create($request->all());
        return redirect()->route('inscription.index')->with('success', 'Usuarios adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        $courses = Course::all(); // Adicionando $courses aqui
        return view('inscription.show', compact('courses')); // Passando $courses para a view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
