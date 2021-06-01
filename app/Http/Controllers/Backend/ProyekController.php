<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProyekRequest;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyek = Proyek::orderBy('id', 'DESC')->get();
        return view('backend.pages.project.index')->withProjects($proyek);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyekRequest $request)
    {
        $newProyek = new Proyek();
        $newProyek->title_proyek = $request->get('title_proyek');
        $newProyek->diksripsi_proyek = $request->get('diskripsi_proyek');
        $newProyek->status = $request->get('status');
        $newProyek->created_by = Auth::user()->name;
        if ($request->hasFile('thumbnail_proyek')) {
            $thumbnail = $request->file('thumbnail_proyek');
            $thumbnail_name = date('dmsyh') . '-' . Str::slug($request->get('title_proyek'), '-') . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('gambar-proyek', $thumbnail_name);
            $newProyek->thumbnail_proyek = $thumbnail_name;
        }
        $newProyek->save();
        return redirect()->back()->withStatus('Data proyek terbaru berhasil disimpan');
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
        $proyek = Proyek::find($id);
        return view('backend.pages.project.edit')->withProject($proyek);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyekRequest $request, $id)
    {
        $proyek = Proyek::find($id);
        $proyek->title_proyek = $request->get('title_proyek');
        $proyek->diksripsi_proyek = $request->get('diskripsi_proyek');
        $proyek->status = $request->get('status');
        $proyek->created_by = Auth::user()->name;
        if ($request->hasFile('thumbnail_proyek')) {
            if ($proyek->thumbnail && file_exists(public_path('gambar-proyek/') . $proyek->thumbnail_proyek)) {
                File::delete(public_path('gambar-proyek/' . $proyek->thumbnail_proyek));
            }
            $thumbnail = $request->file('thumbnail_proyek');
            $thumbnail_name = date('dmsyh') . '-' . Str::slug($request->get('title_proyek'), '-') . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('gambar-proyek', $thumbnail_name);
            $proyek->thumbnail_proyek = $thumbnail_name;
        } else {
            $proyek->thumbnail_proyek = $proyek->thumbnail_proyek;
        }
        $proyek->save();
        return redirect()->route('product.index')->withStatus('Data proyek terbaru berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
