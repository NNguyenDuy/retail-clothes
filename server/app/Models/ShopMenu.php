<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Path
 * @property string $Description
 * @property string $createdAt
 * @property string $updatedAt
 * @property ShopMenuRole[] $shopMenuRoles
 */
class ShopMenu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Shop_menus';

    /**
     * @var array
     */
    protected $fillable = ['Path', 'Description', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopMenuRoles()
    {
        return $this->hasMany('App\Models\ShopMenuRole', 'Menu_id');
    }
}
