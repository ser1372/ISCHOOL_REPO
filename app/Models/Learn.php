<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'img',
        'description_en',
        'description'
    ];
}
