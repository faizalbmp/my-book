<?php

namespace App\Repositories;

use App\Models\book;
use App\Repositories\BaseRepository;

/**
 * Class bookRepository
 * @package App\Repositories
 * @version March 1, 2020, 6:42 pm UTC
*/

class bookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'author',
        'date_published',
        'number_of_pages',
        'type_of_book'
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
        return book::class;
    }
}
