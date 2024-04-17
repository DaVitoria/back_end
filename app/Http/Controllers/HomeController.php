<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Contar cursos
        $num_courses = Course::count();

        // Recuperar todos os cursos
        $courses = Course::all();

        // Contar usuários
        $num_users = User::count();

        return view('index', compact('courses', 'num_courses', 'num_users'));
    }
}
