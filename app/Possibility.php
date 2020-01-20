<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Possibility extends Model
{
    use HasTranslations;
    public $translatable = ['title','image'];

    public function about()
    {
        return  $this->belongsTo('About');
    }
}
