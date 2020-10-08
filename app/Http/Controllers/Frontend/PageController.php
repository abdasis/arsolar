<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Product;
use App\Models\Site;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs()
    {
        $site = Site::first();
        return view('frontend.pages.about-us')->withSite($site);
    }

    public function berita()
    {
        $berita = Berita::all();
        $recentBerita = Berita::orderBy('created_at', 'ASC')->get();
        return view('frontend.pages.berita.berita')->withBerita($berita)->withRecents($recentBerita);
    }

    public function singleBerita($berita)
    {
        $berita = Berita::where('judul_berita', $berita)->first();
        return view('frontend.pages.berita.single-berita')->withBerita($berita);
    }

    public function trading()
    {
        $trading = Product::where('category', 'Trading')->get();
        return view('frontend.pages.trading')->withTradings($trading);
    }

    public function service()
    {
        return view('frontend.pages.service');
    }


    public function transformer()
    {
        return view('frontend.pages.transformer');
    }
}
