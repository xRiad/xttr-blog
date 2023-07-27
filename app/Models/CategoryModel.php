<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use App\Models\PostModel;

class CategoryModel extends Model
{
    use HasSlug;
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];

    public function posts () {
        return $this->hasMany(PostModel::class);
    }
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name') // Define the field to generate the slug from (e.g., 'name' field in the database)
            ->saveSlugsTo('slug'); // Define the field where the generated slug will be stored (e.g., 'slug' field in the database)
    }
}
