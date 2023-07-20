<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PostModel;

class CommentModel extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = [];

    public function post() {
        return $this->belongsTo(PostModel::class);
    }
}
