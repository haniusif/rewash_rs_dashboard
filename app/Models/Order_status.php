<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
  use HasFactory;

  protected $table = 'order_statuses';

  protected $fillable = [
    'name',
    'en_name',
    'sorting',
    'label_color',
  ];

  protected $casts = [
    'sorting' => 'integer',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  /**
   * Scope a query to order statuses by sorting field.
   */
  public function scopeOrdered($query)
  {
    return $query->orderBy('sorting');
  }

  /**
   * Accessor to return the translated name based on app locale.
   */
  public function getTranslatedNameAttribute()
  {
    return app()->getLocale() === 'ar' ? $this->name : $this->en_name;
  }
}