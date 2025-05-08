<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('artikel.index', compact('artikel', 'kategori'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('artikel.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(public_path('storage/artikel'), $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('artikel.index');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
            'foto' => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $artikel->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(public_path('storage/artikel'), $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        session()->flash('success', 'Data berhasil di update');
        return redirect()->route('artikel.index');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->foto && Storage::exists('public/artikel/' . $artikel->foto)) {
            Storage::delete('public/artikel/' . $artikel->foto);
        }

        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Data berhasil dihapus');
    }
}
