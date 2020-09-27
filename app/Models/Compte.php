<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compte
 * @package App\Models
 * @version September 26, 2020, 9:05 am UTC
 *
 * @property string $numero
 * @property string $rib
 * @property integer $entreprise_id
 * @property integer $client_id
 * @property integer $type_compte
 * @property number $solde
 * @property number $agios
 * @property number $fraisOuverture
 * @property number $remuneration
 * @property string $dateD
 * @property string $dateF
 */
class Compte extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'numero',
        'rib',
        'entreprise_id',
        'client_id',
        'type_compte',
        'solde',
        'agios',
        'fraisOuverture',
        'remuneration',
        'dateD',
        'dateF'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'rib' => 'string',
        'entreprise_id' => 'integer',
        'client_id' => 'integer',
        'type_compte' => 'integer',
        'solde' => 'double',
        'agios' => 'double',
        'fraisOuverture' => 'double',
        'remuneration' => 'double',
        'dateD' => 'date',
        'dateF' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero' => 'required',
        'rib' => 'required',
        'solde' => 'required',
        'agios' => 'numeric',
        'fraisOuverture' => 'numeric',
        'remuneration' => 'numeric'
    ];

    
}
