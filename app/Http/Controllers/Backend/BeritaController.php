<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('backend.pages.berita.index')->withBeritas($beritas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newBerita = new Berita();
        $newBerita->judul_berita = $request->get('judul_berita');
        $newBerita->isi_berita = $request->get('isi_berita');
        $newBerita->status = $request->get('status');
        if ($request->hasFile('thumbnail_berita')) {
            $gambar = $request->file('thumbnail_berita');
            $gambar_name = date('d-m-y') . '-' . Str::slug($request->get('judul_berita'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar-berita'), $gambar_name);
            $newBerita->thumbnail_berita = $gambar_name;
        }
        $newBerita->save();
        return redirect()->back()->withStatus('Berita Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('backend.pages.berita.edit')->withBerita($berita);
    }

    /**;
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateBerita = Berita::find($id);
        $updateBerita->judul_berita = $request->get('judul_berita');
        $updateBerita->isi_berita = $request->get('isi_berita');
        $updateBerita->status = $request->get('status');
        if ($request->hasFile('thumbnail_berita')) {
            if ($updateBerita->thumbnail_berita && file_exists(public_path('gambar-berita') . $updateBerita->thumbnail_berita)) {
                File::delete(public_path('gambar-berita'), $updateBerita->thumbnail_berita);
            }
            $gambar = $request->file('thumbnail_berita');
            $gambar_name = date('d-m-y') . '-' . Str::slug($request->get('judul_berita'), '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar-berita'), $gambar_name);
            $updateBerita->thumbnail_berita = $gambar_name;
        } else {
            $updateBerita->thumbnail_berita = $updateBerita->thumbnail_berita;
        }
        $updateBerita->save();
        return redirect()->back()->withStatus('Berita Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBerita = Berita::find($id);
        $deleteBerita->delete();
        return redirect()->back()->withStatus('Berita berhasil dihapus');
    }
}
