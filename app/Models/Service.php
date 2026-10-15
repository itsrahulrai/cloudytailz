<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'icon',
        'short_description',
        'content',
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
     * Scope to only include active/published services.
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    /**
     * Scope alias for published.
     */
    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    /**
     * Get image URL with fallback to default service image.
     */
    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset_url('assets/images/services/dog-grooming.png');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (file_exists(public_path('uploads/services/' . $this->image))) {
            return asset_url('uploads/services/' . $this->image);
        }

        if (file_exists(public_path($this->image))) {
            return asset_url($this->image);
        }

        return asset_url('uploads/services/' . $this->image);
    }

    /**
     * Get the canonical URL, automatically falling back to the service detail route if empty.
     */
    public function getCanonicalUrlAttribute($value)
    {
        return !empty($value) ? $value : route('service.detail', $this->slug);
    }
}

