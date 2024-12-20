<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookViewModel extends Model
{
    use HasFactory;
    //table name
    protected $table = 'book_view_models';

    //primary key
    public $primarykey = 'id';

    //Timestamps

    public $timestamps = true;

    // Define fillable attributes
    protected $fillable = [
        'title',
        'author',
        'rating',
        'genres',
        'published',
        'format',
        'language',
        'about',
        'review',
        'about_author',
    ];


}
