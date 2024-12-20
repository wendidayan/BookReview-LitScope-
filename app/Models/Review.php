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
}
