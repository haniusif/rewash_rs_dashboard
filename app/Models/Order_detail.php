<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
  use HasFactory;

  protected $table = 'order_details';

  protected $fillable = [
    'order_id',
    'service_id',
    'quantity',
    'service_price',
    'total_price',
  ];

  protected $casts = [
    'quantity' => 'integer',
    'service_price' => 'decimal:2',
    'total_price' => 'decimal:2',
  ];

  /**
   * Relationship: belongs to an Order.
   */
  public function order()
  {
    return $this->belongsTo(Order::class);
  }

  /**
   * Relationship: belongs to a Service.
   */
  public function service()
  {
    return $this->belongsTo(Service::class);
  }
}