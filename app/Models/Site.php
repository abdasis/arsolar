<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Site extends Model
{
    use HasTranslations;

    public $translatable = [
        'nama_situs',
        'tagline',
        'about_us',
    ];
}
