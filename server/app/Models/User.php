<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Password
 * @property string $Gmail
 * @property string $Phone_number
 * @property string $Fullname
 * @property string $Address
 * @property string $createdAt
 * @property string $updatedAt
 * @property Cart[] $carts
 * @property Order[] $orders
 * @property Review[] $reviews
 * @property ShopUserRole[] $shopUserRoles
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Users';

    /**
     * @var array
     */
    protected $fillable = ['Password', 'Gmail', 'Phone_number', 'Fullname', 'Address', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopUserRoles()
    {
        return $this->hasMany('App\Models\ShopUserRole');
    }
}
