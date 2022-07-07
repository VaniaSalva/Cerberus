<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoralController extends Controller
{
    public function index()
    {
        return view('Crud.Moral');
    }
}
