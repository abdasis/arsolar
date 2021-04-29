<?php

namespace App\Http\Livewire\Produk;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Translate extends Component
{

    public $nama_produk, $siput, $diskripsi, $kategori;

    public $produk_id;

    public function mount($slug)
    {

        $produk = Product::whereSiput($slug)->first();
        $this->nama_produk = $produk->nama_produk;
        $this->siput = $produk->siput;
        $this->diskripsi = $produk->diskripsi;
        $this->kategori = $produk->kategori;
        $this->produk_id = $produk->id;
    }

    public function translate()
    {
        $produk = Product::find($this->produk_id);
        $produk->nama_produk = ['id' => $produk->nama_produk, 'en' => $this->nama_produk];
        $produk->diskripsi = ['id' => $produk->diskripsi, 'en' => $this->diskripsi];
        $produk->save();
        $this->alert('success', 'Produk Berhasil di Translate');
    }
    public function render()
    {
        $categories = Category::latest()->get();
        return view('livewire.produk.translate', [
            'categories' => $categories
        ])->extends('backend.layouts.app');
    }
}
