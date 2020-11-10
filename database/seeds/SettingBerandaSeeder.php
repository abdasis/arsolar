<?php

namespace Database\Seeders;

use App\Models\SettingBeranda;
use Illuminate\Database\Seeder;

class SettingBerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kutipan = new SettingBeranda();
        $kutipan->judul = "Judul Website";
        $kutipan->kutipan = "Ini adalah diskripsi website";
        $kutipan->save();
    }
}
