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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Order_id', 'Amount', 'Payment_method', 'Payment_status', 'Created_at', 'Updated_at', 'createdAt', 'updatedAt'];
}
