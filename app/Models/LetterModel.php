<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterModel extends Model
{
    use HasFactory;
    protected $table = 'letters';
    protected $guarded = [];
}
