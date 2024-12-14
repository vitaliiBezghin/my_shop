<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\Translatable\HasTranslations;

class Category extends Pivot
{
    use HasTranslations;
    public $translatable = ['name'];


}
