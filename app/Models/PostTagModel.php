<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTagModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'posts_tags';
}
