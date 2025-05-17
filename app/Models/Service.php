<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'en_name',
    'price',
    'promotional_price',
    'is_active',
    'sorting',
    'expected_duration',
  ];

  /**
   * Scope to get only active services.
   */
  public function scopeActive($query)
  {
    return $query->where('is_active', true);
  }

  /**
   * Scope to order services by sorting field.
   */
  public function scopeOrdered($query)
  {
    return $query->orderBy('sorting');
  }

  /**
   * Optional: Relationship to ServiceCategory (if applicable).
   */
  public function category()
  {
    return $this->belongsTo(Service_category::class);
  }
}
