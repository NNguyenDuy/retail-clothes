<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $User_id
 * @property integer $Role_id
 * @property string $createdAt
 * @property string $updatedAt
 */
class ShopUserRole extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Shop_user_roles';

    /**
     * @var array
     */
    protected $fillable = ['createdAt', 'updatedAt'];
}
