<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $Product_id
 * @property integer $Order_id
 * @property string $Name
 * @property integer $Quantity
 * @property float $Price
 * @property string $Created_at
 * @property string $Updated_at
 * @property string $Deleted_at
 * @property string $createdAt
 * @property string $updatedAt
 * @property Product $product
 * @property Order $order
 */
class OrderItem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Order_items';

    /**
     * @var array
     */
    protected $fillable = ['Product_id', 'Order_id', 'Name', 'Quantity', 'Price', 'Created_at', 'Updated_at', 'Deleted_at', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
