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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Product_id', 'Order_id', 'Name', 'Quantity', 'Price', 'Created_at', 'Updated_at', 'Deleted_at', 'createdAt', 'updatedAt'];
}
