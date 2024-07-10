<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $User_id
 * @property integer $Role_id
 * @property string $createdAt
 * @property string $updatedAt
 * @property User $user
 * @property Role $role
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
