<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TagModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\StatusModel;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PostModel extends Model
{
    use HasFactory;
    use HasSlug;

    protected $table = 'posts';
    protected $guarded = [];

    public function tags () {
        return $this->belongsToMany(TagModel::class, 'posts_tags', 'post_id', 'tag_id');
    }
    public function category () {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
    public function comments () {
        return $this->hasMany(CommentModel::class, 'post_id');
    }
    public function status() {
        return $this->belongsTo(StatusModel::class, 'status_id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }
}
