<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Review extends Model
{
    use HasTranslations;
    public $translatable = ['name','text'];
}
