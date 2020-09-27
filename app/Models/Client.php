<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version September 26, 2020, 8:00 am UTC
 *
 * @property string $nom
 * @property string $prenom
 * @property string $cni
 * @property string $sexe
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 * @property integer $salaire
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'cni',
        'sexe',
        'adresse',
        'telephone',
        'email',
        'salaire'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'prenom' => 'string',
        'cni' => 'string',
        'sexe' => 'string',
        'adresse' => 'string',
        'telephone' => 'string',
        'email' => 'string',
        'salaire' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'cni' => 'required',
        'sexe' => 'required',
        'adresse' => 'required',
        'telephone' => 'required',
        'email' => 'required',
        'salaire' => 'numeric'
    ];

    
}
