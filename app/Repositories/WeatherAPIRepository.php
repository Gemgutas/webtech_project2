<?php

namespace App\Repositories;

use App\Models\WeatherAPI;
use App\Repositories\BaseRepository;

/**
 * Class WeatherAPIRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:24 am UTC
*/

class WeatherAPIRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'country',
        'celsius',
        'fahrenheit',
        'longitude',
        'latitude'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WeatherAPI::class;
    }
}
