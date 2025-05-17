<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service_category extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'en_name',
    'image',
    'short_description',
    'is_active',
    'sorting',
  ];

  /**
   * Scope a query to only include active service categories.
   */
  public function scopeActive($query)
  {
    return $query->where('is_active', true);
  }

  /**
   * Scope a query to order by the 'sorting' field.
   */
  public function scopeOrdered($query)
  {
    return $query->orderBy('sorting');
  }

  /**
   * Get the full image URL (optional accessor if you're storing only the path).
   */
  public function getImageUrlAttribute()
  {
    return $this->image ? asset('storage/' . $this->image) : null;
  }
}