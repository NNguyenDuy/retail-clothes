<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $Product_id
 * @property integer $Cart_id
 * @property integer $Quantity
 * @property float $Price
 * @property string $Created_at
 * @property string $Updated_at
 * @property string $createdAt
 * @property string $updatedAt
 * @property Product $product
 * @property Cart $cart
 */
class CartItem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Cart_items';

    /**
     * @var array
     */
    protected $fillable = ['Product_id', 'Cart_id', 'Quantity', 'Price', 'Created_at', 'Updated_at', 'createdAt', 'updatedAt'];

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
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart');
    }
}
