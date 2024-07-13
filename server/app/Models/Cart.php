<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $User_id
 * @property string $createdAt
 * @property string $updatedAt
 */
class Cart extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Carts';

    /**
     * @var array
     */
    protected $fillable = ['User_id', 'createdAt', 'updatedAt'];
}
