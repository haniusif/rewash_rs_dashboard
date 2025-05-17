<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $fillable = [
    'order_number',
    'order_status_id',
    'go_to_user_time',
    'start_work_time',
    'finish_work_time',
    'user_id',
    'provider_id',
    'pickup_lat',
    'pickup_lng',
    'pickup_address',
    'order_date',
    'amount',
    'vat',
    'discount',
    'total_amount',
  ];

  protected $casts = [
    'go_to_user_time' => 'datetime',
    'start_work_time' => 'datetime',
    'finish_work_time' => 'datetime',
    'order_date' => 'date',
    'amount' => 'decimal:2',
    'vat' => 'decimal:2',
    'discount' => 'decimal:2',
    'total_amount' => 'decimal:2',
    'pickup_lat' => 'decimal:6',
    'pickup_lng' => 'decimal:6',
  ];

  // Relationship: order belongs to user
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  // Relationship: order belongs to provider (user)
  public function provider()
  {
    return $this->belongsTo(User::class, 'provider_id');
  }

  // Relationship: order belongs to order status
  public function status()
  {
    return $this->belongsTo(Order_status::class, 'order_status_id');
  }

  // Relationship: order has many details
  public function orderDetails()
  {
    return $this->hasMany(Order_detail::class);
  }
}
