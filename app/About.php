<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasTranslations;
    public $translatable = ['about_text','title','possibility_text'];

    public function possibilitys()
    {
      return  $this->hasMany(Possibility::class);
    }
}
