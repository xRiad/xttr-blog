<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TagModel;
use App\Models\CategoryModel;

class PostModel extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = [];

    public function tags () {
        return $this->belongsToMany(TagModel::class, 'posts_tags', 'post_id', 'tag_id');
    }
    public function categories () {
        return $this->belongsTo(CategoryModel::class);
    }
}
