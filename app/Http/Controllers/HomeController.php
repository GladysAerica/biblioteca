<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;


class HomeController extends Controller
{
    public function index()
    {
        $libros = Libros::paginate(2);

        return view('home.index', compact('libros'));
    }
}
