<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Scope to only include active categories.
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    /**
     * Relationship: Category has many Blogs
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    /**
     * Relationship: Category has many published Blogs
     */
    public function publishedBlogs()
    {
        return $this->hasMany(Blog::class)->where('status', true);
    }
}
