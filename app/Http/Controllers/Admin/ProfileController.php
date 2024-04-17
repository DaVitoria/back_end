<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class ProfileController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard') ;
    }
}
