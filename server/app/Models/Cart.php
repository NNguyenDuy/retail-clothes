<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $User_id
 * @property string $createdAt
 * @property string $updatedAt
 * @property CartItem[] $cartItems
 * @property User $user
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartItems()
    {
        return $this->hasMany('App\Models\CartItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
