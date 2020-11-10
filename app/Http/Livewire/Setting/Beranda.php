<?php

namespace App\Http\Livewire\Setting;

use App\Models\SettingBeranda;
use Database\Seeders\SettingBerandaSeeder;
use Livewire\Component;

class Beranda extends Component
{
    public $judul, $kutipan;

    public function mount()
    {
        $kutipan = SettingBeranda::latest()->first();
        $this->judul = $kutipan->judul;
        $this->kutipan = $kutipan->kutipan;
    }
    public function store()
    {
        $kutipan = SettingBeranda::latest()->first();
        $kutipan->judul = $this->judul;
        $kutipan->kutipan = $this->kutipan;
        $kutipan->save();
        $this->emit('success', ['title' => 'Berhasil', 'message'=>'Perubahan berhasil disimpan']);
    }
    public function render()
    {
        return view('livewire.setting.beranda')->extends('backend.layouts.app');
    }
}
