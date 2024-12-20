<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingView extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'landing_views';

    // Define fillable attributes
    protected $fillable = [
        'title',
        'author',
        'genres',
        'published',
        'format',
        'language',
        'about',
        'about_author',
        'approval_status',
    ];

    // LandingView model relationship
public function comments()
{
    return $this->hasMany(Comment::class, 'book_id');
}

}
