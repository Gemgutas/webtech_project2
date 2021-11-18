<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class WeatherAPI
 * @package App\Models
 * @version October 28, 2021, 12:24 am UTC
 *
 * @property string $country
 * @property string $celsius
 * @property string $fahrenheit
 * @property string $longitude
 * @property string $latitude
 */
class WeatherAPI extends Model
{

    use HasFactory;

    public $table = 'weather_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'country',
        'celsius',
        'fahrenheit',
        'longitude',
        'latitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country' => 'string',
        'celsius' => 'string',
        'fahrenheit' => 'string',
        'longitude' => 'string',
        'latitude' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country' => 'required|string|max:255',
        'celsius' => 'required|string|max:255',
        'fahrenheit' => 'required|string|max:255',
        'longitude' => 'required|string|max:255',
        'latitude' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
