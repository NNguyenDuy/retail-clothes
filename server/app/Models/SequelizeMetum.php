<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class SequelizeMetum extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'SequelizeMeta';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'name';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [];
}
