<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocController extends Controller
{
    public function index()
    {
        return view('Crud.Loc');
    }
}
