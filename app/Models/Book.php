<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'published_at',
        'img',
        'pages',
        'description',
        'user_id',
    ];

    public function getTitleAttribute(String $title)
    {
        return ucfirst($title);
    }
}
