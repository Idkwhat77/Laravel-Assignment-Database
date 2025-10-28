<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // ...existing code...
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'image',
        'published_at',
        'is_published',
        'slug'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}