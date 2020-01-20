<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Ticket extends Model
{
    use HasTranslations;
    public $translatable = ['title','text'];
}
