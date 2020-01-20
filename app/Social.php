<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Social extends Model
{
    use HasTranslations;
    public $translatable = ['text__footer'];
}
