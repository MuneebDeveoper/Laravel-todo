<?php

namespace App\Models;
use app\Models\author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'info', 'author_id', ];
    public function Author(){
        return $this->belongsTo(Author::class);
    }
}
