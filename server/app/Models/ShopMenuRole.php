<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $Role_id
 * @property integer $Menu_id
 * @property string $createdAt
 * @property string $updatedAt
 */
class ShopMenuRole extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Shop_menu_roles';

    /**
     * @var array
     */
    protected $fillable = ['createdAt', 'updatedAt'];
}
