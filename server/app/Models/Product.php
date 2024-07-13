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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Category_id', 'Name', 'Description', 'Size', 'Colors', 'Images', 'Price', 'Discount', 'Quantity', 'Sold', 'Status', 'createdAt', 'updatedAt'];
}
