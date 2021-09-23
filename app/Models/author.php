<?php

namespace App\Models;
use app\Models\book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function Book(){

        return $this->hasMany(Book::class);
    }
}
