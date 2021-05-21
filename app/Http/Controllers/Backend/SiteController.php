<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function general()
    {
        $site = Site::first();
        return view('backend.pages.setting.general')->withSite($site);
    }

    public function storeGeneral(Request $request)
    {

        $site = Site::first();
        $site->nama_situs = $request->get('nama_situs');
        if ($request->hasFile('logo_situs')) {
            $logo = $request->file('logo_situs');
            $logo_name = date('d-m-y') . '-' . Str::slug($request->get('nama_situs')) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('frontend/assets/images/'), $logo_name);
            $site->logo = $logo_name;
        }
        if(Session::get('bahasa')=='id' || empty(Session::get('bahasa'))){
            $site->tagline = ['id' => $request->get('tagline')];
        }else{
            $site->tagline = ['en' => $request->get('tagline')];
        }        
        $site->save();
        return redirect()->back()->withStatus('Pengaturan Berhasil disimpan');
    }

    public function seo()
    {
        return 'Halaman seo';
    }

    public function about(Request $request)
    {
        $site = Site::first();
        if (!empty($site)) {
            if(Session::get('bahasa')=='id' || empty(Session::get('bahasa'))){
                $site->setLocale('id');
            }else{
                $site->setLocale('en');
            }
        }
        return view('backend.pages.setting.about')->withSite($site);
    }

    public function contact(Request $request)
    {
        $site = Site::first()->setLocale(Session::get('bahasa') ?? 'id');
        return view('backend.pages.setting.contact')->withSite($site);
    }

    public function storeContact(Request $request)
    {
        if (Site::all()->count() > 0) {
            $site = Site::first();
            $site->alamat = $request->alamat ?? '-';
            $site->email = $request->email ?? '-';
            $site->telepon = $request->telepon ?? '-';
            $site->save();
        } else {
            $site = new Site();
            $site->alamat = $request->alamat ?? '-';
            $site->email = $request->email ?? '-';
            $site->telepon = $request->telepon ?? '-';
            $site->save();
        }

        return redirect()->back()->withStatus('Halaman Contact Berhasil Diperbarui');
    }

    public function storeAbout(Request $request)
    {
        if(Session::get('bahasa')=='id' || empty(Session::get('bahasa'))){
            if (Site::all()->count() > 0) {
                $site = Site::first();
                $site->about_us = ['id' => $request->get('aboutus')];
                $site->save();
            } else {
                $site = new Site;
                $site->about_us = ['id' => $request->get('aboutus')];
                $site->save();
            }
        }else{
            if (Site::all()->count() > 0) {
                $site = Site::first();
                $site->about_us = ['en' => $request->get('aboutus')];
                $site->save();
            } else {
                $site = new Site;
                $site->about_us = ['en' => $request->get('aboutus')];
                $site->save();
            }
        }

        return redirect()->back()->withStatus('Halaman About Berhasil Diperbarui');
    }
}
