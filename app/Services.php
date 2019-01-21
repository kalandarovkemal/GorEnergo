<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable =
        [
            'title',
            'img',
            'description',
            'slug'
        ];
}
