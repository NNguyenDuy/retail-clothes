<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Coupon_code
 * @property string $Coupon_start_date
 * @property string $Coupon_end_date
 * @property float $Coupon_min_spend
 * @property float $Coupon_max_spend
 * @property integer $Coupon_uses_per_customer
 * @property integer $Coupon_uses_per_coupon
 * @property string $Coupon_status
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $Deleted_at
 */
class Coupon extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Coupons';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Coupon_code', 'Coupon_start_date', 'Coupon_end_date', 'Coupon_min_spend', 'Coupon_max_spend', 'Coupon_uses_per_customer', 'Coupon_uses_per_coupon', 'Coupon_status', 'createdAt', 'updatedAt', 'Deleted_at'];
}
