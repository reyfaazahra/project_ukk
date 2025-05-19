<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }
}
