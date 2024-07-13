<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $User_id
 * @property integer $Coupon_id
 * @property string $Status
 * @property float $Shipping_fee
 * @property float $Total
 * @property string $Created_at
 * @property string $Canceled_at
 * @property string $Completed_at
 * @property string $Delivery_at
 * @property string $createdAt
 * @property string $updatedAt
 */
class Order extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Orders';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['User_id', 'Coupon_id', 'Status', 'Shipping_fee', 'Total', 'Created_at', 'Canceled_at', 'Completed_at', 'Delivery_at', 'createdAt', 'updatedAt'];
}
