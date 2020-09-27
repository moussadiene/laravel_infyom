<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeCompte
 * @package App\Models
 * @version September 25, 2020, 5:20 pm UTC
 *
 * @property string $libelle
 */
class TypeCompte extends Model
{
    use SoftDeletes;

    public $table = 'type_comptes';
    

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
