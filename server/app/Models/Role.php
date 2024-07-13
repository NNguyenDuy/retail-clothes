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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Role_name', 'Description', 'Status', 'createdAt', 'updatedAt'];
}
