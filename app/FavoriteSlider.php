<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class FavoriteSlider extends Model
{
    use HasTranslations;
    public $translatable = ['title','place','','location'];
}
