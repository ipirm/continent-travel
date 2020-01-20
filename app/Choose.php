<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Choose extends Model
{
    use HasTranslations;
    public $translatable = ['title','subtitle'];
}
