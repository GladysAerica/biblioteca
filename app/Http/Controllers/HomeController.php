<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;


class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->user_type === 'admin') {
            $libros = Libros::paginate(2);
            return view('home.index', compact('libros'));
        } else {
            return view('home.index_user');
        }
    }
}
