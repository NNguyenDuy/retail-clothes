<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $Category_id
 * @property string $Name
 * @property string $Description
 * @property string $Size
 * @property string $Colors
 * @property string $Images
 * @property float $Price
 * @property float $Discount
 * @property integer $Quantity
 * @property integer $Sold
 * @property integer $Status
 * @property string $createdAt
 * @property string $updatedAt
 * @property CartItem[] $cartItems
 * @property OrderItem[] $orderItems
 * @property Category $category
 * @property Review[] $reviews
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Products';

    /**
     * @var array
     */
    protected $fillable = ['Category_id', 'Name', 'Description', 'Size', 'Colors', 'Images', 'Price', 'Discount', 'Quantity', 'Sold', 'Status', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartItems()
    {
        return $this->hasMany('App\Models\CartItem');
    }

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
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
