<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MainTour extends Model
{
    use HasTranslations;
    public $translatable = ['title','visited','visited','author'];
}
