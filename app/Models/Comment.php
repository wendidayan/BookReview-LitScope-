<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = ['book_id', 'comment', 'user_id', 'parent_id', 'rating'];


    // Relationship to LandingView (book)
    public function landingView()
    {
        return $this->belongsTo(LandingView::class, 'book_id');
    }

    // Relationship to UserLogin (user)
    public function user()
    {
        return $this->belongsTo(UserLogin::class, 'user_id');
    }

    // Relationship to parent comment
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Relationship to replies
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
