<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Opportunity extends Model
{
    use HasTranslations;
    public $translatable = ['title','image'];
}
