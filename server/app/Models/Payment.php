<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $Order_id
 * @property float $Amount
 * @property string $Payment_method
 * @property string $Payment_status
 * @property string $Created_at
 * @property string $Updated_at
 * @property string $createdAt
 * @property string $updatedAt
 * @property Order $order
 */
class Payment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Payments';

    /**
     * @var array
     */
    protected $fillable = ['Order_id', 'Amount', 'Payment_method', 'Payment_status', 'Created_at', 'Updated_at', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
