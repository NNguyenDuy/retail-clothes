<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $User_id
 * @property integer $Product_id
 * @property integer $Rating
 * @property string $Title
 * @property string $Content
 * @property string $createdAt
 * @property string $updatedAt
 */
class Review extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Reviews';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['User_id', 'Product_id', 'Rating', 'Title', 'Content', 'createdAt', 'updatedAt'];
}
