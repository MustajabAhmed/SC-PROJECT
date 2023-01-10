<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\reviewController;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable =
        [
            'description',
            'name',
            'email'
        ];


}