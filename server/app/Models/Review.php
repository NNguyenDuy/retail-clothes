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
 * @property User $user
 * @property Product $product
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
     * @var array
     */
    protected $fillable = ['User_id', 'Product_id', 'Rating', 'Title', 'Content', 'createdAt', 'updatedAt'];

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
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
