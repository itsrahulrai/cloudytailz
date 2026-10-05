<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'short_description',
        'content',
        'author',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Relationship: Blog belongs to a Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope to only include published blogs.
     */
    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    /**
     * Get image URL with fallback to default placeholder.
     */
    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset_url('assets/images/blog/post-1.jpg');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        // Check if uploaded in uploads/blogs
        if (file_exists(public_path('uploads/blogs/' . $this->image))) {
            return asset_url('uploads/blogs/' . $this->image);
        }

        // Check if relative asset path
        if (file_exists(public_path($this->image))) {
            return asset_url($this->image);
        }

        return asset_url('uploads/blogs/' . $this->image);
    }
}
