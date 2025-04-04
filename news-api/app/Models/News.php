<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'summary',
        'image_url',
        'video_url',
        'category',
        'source_name',
        'source_url',
        'published_at',
        'views',
        'status',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
