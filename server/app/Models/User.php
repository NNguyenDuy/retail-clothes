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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Password', 'Gmail', 'Phone_number', 'Fullname', 'Address', 'createdAt', 'updatedAt'];
}
