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
 * @property OrderItem[] $orderItems
 * @property User $user
 * @property Coupon $coupon
 * @property Payment[] $payments
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
     * @var array
     */
    protected $fillable = ['User_id', 'Coupon_id', 'Status', 'Shipping_fee', 'Total', 'Created_at', 'Canceled_at', 'Completed_at', 'Delivery_at', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('App\Models\OrderItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coupon()
    {
        return $this->belongsTo('App\Models\Coupon');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
