<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Name
 * @property string $Category_path
 * @property string $Description
 * @property integer $Status
 * @property string $Image
 * @property string $createdAt
 * @property string $updatedAt
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Categories';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'Category_path', 'Description', 'Status', 'Image', 'createdAt', 'updatedAt'];
}
