<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class test
 * @package App\Models
 * @version September 25, 2020, 6:43 pm UTC
 *
 * @property string $test
 */
class test extends Model
{
    use SoftDeletes;

    public $table = 'tests';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'test'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'test' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'test' => 'required|max:100'
    ];

    
}
