<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Role_name
 * @property string $Description
 * @property integer $Status
 * @property string $createdAt
 * @property string $updatedAt
 * @property ShopMenuRole[] $shopMenuRoles
 * @property ShopUserRole[] $shopUserRoles
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Roles';

    /**
     * @var array
     */
    protected $fillable = ['Role_name', 'Description', 'Status', 'createdAt', 'updatedAt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopMenuRoles()
    {
        return $this->hasMany('App\Models\ShopMenuRole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopUserRoles()
    {
        return $this->hasMany('App\Models\ShopUserRole');
    }
}
