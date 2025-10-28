<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'demo_url',
        'github_url',
        'technologies',
        'featured',
        'status'
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean'
    ];
}