<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class book
 * @package App\Models
 * @version March 1, 2020, 6:42 pm UTC
 *
 * @property string title
 * @property string author
 * @property string date_published
 * @property integer number_of_pages
 * @property string type_of_book
 */
class book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'author',
        'date_published',
        'number_of_pages',
        'type_of_book'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'author' => 'string',
        'date_published' => 'date',
        'number_of_pages' => 'integer',
        'type_of_book' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'author' => 'required'
    ];

    
}
