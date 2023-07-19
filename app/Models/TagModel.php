<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PostModel;

class TagModel extends Model
{
    use HasFactory;
    protected $table="tags";
    protected $guarded = [];

    public function posts() {
        return $this->belongsToMany(PostModel::class, 'posts_tags', 'post_id', 'tag_id');
    }
}
