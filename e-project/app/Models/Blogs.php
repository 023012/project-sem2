<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = [
        'write_by',
        'image',
        'title',
        'content',
        'tag',
    ];

}
