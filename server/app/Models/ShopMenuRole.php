<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $Role_id
 * @property integer $Menu_id
 * @property string $createdAt
 * @property string $updatedAt
 * @property Role $role
 * @property ShopMenu $shopMenu
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shopMenu()
    {
        return $this->belongsTo('App\Models\ShopMenu', 'Menu_id');
    }
}
