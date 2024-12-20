<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Define review_code as the primary key
    protected $primaryKey = 'review_code';

    // Ensure the primary key is not auto-incrementing
    public $incrementing = false;

    // Specify the fields that are mass assignable
    protected $fillable = ['review_code', 'comments', 'rate', 'likes'];

    // Enable timestamps
    public $timestamps = true;


    // Define the relationship to fetch the user who made the comment
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship to fetch the parent comment (if this is a reply)
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Define the relationship to fetch the replies for this comment
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Define the relationship to fetch the book associated with the comment
    public function book()
    {
        return $this->belongsTo(LandingView::class, 'book_id');
    }
}
