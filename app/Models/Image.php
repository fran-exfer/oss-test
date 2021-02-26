<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Mass assignable attributes, allows using the create method.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'category',
        'url'
    ];
    
    /**
     * Indicates if the model should be timestamped. In this case, we don't
     * really need a timestamp.
     *
     * @var bool
     */
    public $timestamps = false; 
}
