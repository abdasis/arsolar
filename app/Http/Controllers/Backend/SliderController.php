<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.pages.sliders.index')->withSliders($sliders);
    }

    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    public function store(RequestSlider $request)
    {
        $newSlider = new Slider();
        $newSlider->nama_slider = ['id' => $request->get('nama_slider'), 'en' => $request->get('nama_slider')];
        $newSlider->deskripsi_slider = ['id' => $request->get('deskripsi_slider'), 'en' => $request->get('deskripsi_slider')];
        $newSlider->status = $request->status;
        if ($request->hasFile('gambar_slider')) {
            $gambar = $request->file('gambar_slider');
            $nama_gambar = date('d-m-y') . '-' . $gambar->getClientOriginalName();
            $gambar->move('gambar_slider', $nama_gambar);
            $newSlider->gambar_slider = $nama_gambar;
        } else {
            $newSlider->gambar_slider = 'default-gambar-slider.png';
        }
        $newSlider->save();
        return redirect()->back()->withStatus('Slider berhasil di tambahkan');
    }
    public function edit($id)
    {
        if(Session::get('bahasa')=='id' || empty(Session::get('bahasa'))){
            $slider = Slider::find($id)->setLocale('id');
        }else{
            $slider = Slider::find($id)->setLocale('en');
        }
        return view('backend.pages.sliders.edit')->withSlider($slider);
    }
    public function update(Request $request, $id)
    {
        if(Session::get('bahasa')=='id' || empty(Session::get('bahasa'))){
            $newSlider = Slider::find($id)->setLocale('id');
            $newSlider->nama_slider = ['id' => $request->get('nama_slider')];
            $newSlider->deskripsi_slider = ['id' => $request->get('deskripsi_slider')];
        }else{
            $newSlider = Slider::find($id)->setLocale('en');
            $newSlider->nama_slider = ['en' => $request->get('nama_slider')];
            $newSlider->deskripsi_slider = ['en' => $request->get('deskripsi_slider')];
        }
        
       
        $newSlider->status = $request->status;
        if ($request->hasFile('gambar_slider')) {
            if ($newSlider->gambar_slider && file_exists(public_path('gambar_slider/') . $newSlider->gambar_slider)) {
                File::delete(public_path('gambar_slider/') . $newSlider->gambar_slider);
            }
            $gambar = $request->file('gambar_slider');
            $nama_gambar = date('d-m-y') . '-' . $gambar->getClientOriginalName();
            $gambar->move('gambar_slider', $nama_gambar);
            $newSlider->gambar_slider = $nama_gambar;
        } else {
            $newSlider->gambar_slider = 'default-gambar-slider.png';
        }
        $newSlider->save();
        return redirect()->back()->withStatus('Slider berhasil di tambahkan');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        if ($slider->gambar_slider && file_exists(public_path('gambar_slider/') . $slider->gambar_slider)) {
            File::delete(public_path('gambar_slider/') . $slider->gambar_slider);
        }
        return redirect()->back()->withStatus('Slider berhasil dihapus');
    }
}
