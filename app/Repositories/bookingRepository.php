<?php

namespace App\Repositories;

use App\Models\booking;
use App\Repositories\BaseRepository;

/**
 * Class bookingRepository
 * @package App\Repositories
 * @version February 24, 2025, 4:20 pm UTC
*/

class bookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bookingdate',
        'starttime',
        'endtime',
        'memberid',
        'courtid',
        'fee'
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
        return booking::class;
    }
}
