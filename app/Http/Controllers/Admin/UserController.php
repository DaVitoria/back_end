<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }



    public function create()
    {
       
    }

    public function show(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'Produto adicionado com sucesso');

    }

}
