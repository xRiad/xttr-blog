<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostModel;

class StatusModel extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $guarded = [];

    public function posts () {
        $this->hasMany(PostModel::class);
    }
}
