<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class typeOperation
 * @package App\Models
 * @version September 25, 2020, 6:36 pm UTC
 *
 * @property string $libelle
 */
class typeOperation extends Model
{
    use SoftDeletes;

    public $table = 'type_operations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'libelle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required|max:100'
    ];

    
}
