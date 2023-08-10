<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function index(){
        $categories = DB::table('categories')
            ->get();
        return $categories;
    }

    public function store() {
        DB::table('categories')
        ->insert([
            'name' => $this->name,
        ]);
    }

    public function edit(){
        DB::table('categories')
        ->where('id', $this->id)
        ->update([
            'name' => $this->name,
        ]);
    }

    public function delete(){
        DB::table('categories')
        ->where('id', $this->id)
        ->delete();
    }
}
