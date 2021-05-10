<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_id',
        'published_at',
        'description'
    ];

    public function author() {
        return $this->hasOne(Author::class);
    }
}
