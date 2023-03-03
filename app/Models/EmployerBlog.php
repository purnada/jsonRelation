<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerBlog extends Model
{
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    use HasFactory;
    protected $table = 'employer_blog';

    protected $casts = [
        'category' => 'json'
    ];


    public function categories()
    {
        return $this->belongsToJson(BlogCategory::class,'category');
    }

}
