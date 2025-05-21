<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $jenis = Jenis::all();
        return view('welcome', compact('artikel', 'jenis'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }

    public function view($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('detail.single', compact('artikel'));
    }

}
