<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Entreprise
 * @package App\Models
 * @version September 25, 2020, 7:02 pm UTC
 *
 * @property string $nom
 * @property string $ninea
 * @property string $telephone
 * @property string $adresse
 * @property integer $budget
 */
class Entreprise extends Model
{
    use SoftDeletes;

    public $table = 'entreprises';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'ninea',
        'telephone',
        'adresse',
        'budget'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'ninea' => 'string',
        'telephone' => 'string',
        'adresse' => 'string',
        'budget' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required|max:100',
        'ninea' => 'required|max:100',
        'telephone' => 'required|50',
        'adresse' => 'required|max:100',
        'budget' => 'required|numeric'
    ];

    
}
