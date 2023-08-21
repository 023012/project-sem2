<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount extends Model
{
    use HasFactory;
    protected string $table = 'discounts';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'discount_percent',
        'active'
    ];
}
