<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'discount_percent',
        'active'
    ];

    public function index(){
        $users = DB::table('discounts')
            ->get();
        return $users;
    }

    public function store(){
        DB::table('discounts')
            ->insert([
                'name' => $this->name,
                'discount_percent' => $this->discount_percent,
                'active' => $this->active
            ]);
    }

    public function edit(){
        DB::table('discounts')
        ->where('id', $this->id)
        ->update([
            'name' => $this->name,
            'discount_percent' => $this->discount_percent,
            'active' => $this->active
        ]);
    }

    public function delete(){
        DB::table('discounts')
        ->where('id', $this->id)
        ->delete();
    }
}
