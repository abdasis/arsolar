<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyeks = Proyek::all();
        return view('frontend.pages.proyek.proyek')->withProyeks($proyeks);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek = Proyek::where('title_proyek', $id)->first();
        return view('frontend.pages.proyek.single-proyek')->withProyek($proyek);
    }
}
