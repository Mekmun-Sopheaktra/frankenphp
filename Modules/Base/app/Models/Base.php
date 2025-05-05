<?php

namespace Modules\Base\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Base\Database\Factories\BaseFactory;

class Base extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
    ];

    // protected static function newFactory(): BaseFactory
    // {
    //     // return BaseFactory::new();
    // }
}
