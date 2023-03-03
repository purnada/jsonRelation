<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    use HasFactory;
    protected $table = 'blog_category';

    public function blogs()
    {
        return $this->hasManyJson(EmployerBlog::class,'category');
    }
}
