<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tour extends Model
{
    use HasTranslations;
    public $translatable = ['title','subtitle','about_tour','days','details','city'];

    public $casts = [

    ];
}
