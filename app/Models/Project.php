<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'image_url',
        'live_url',
        'github_url',
        'technologies',
        'featured',
        'order'
    ];
    
    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean'
    ];
}