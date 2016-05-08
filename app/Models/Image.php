<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    const T = 'images';
    const TP = 'image_product';

    protected $fillable = ['name', 'url'];
}
