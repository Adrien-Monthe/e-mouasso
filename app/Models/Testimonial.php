<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['author_name', 'author_title', 'author_message', 'image_path', 'status'];

}
