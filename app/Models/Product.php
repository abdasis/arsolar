<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;

    public $translatable = [
        'nama_produk',
        'diskripsi',
        'kategori'
    ];
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
