<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePhoto extends Model
{
    use HasFactory;

    protected $table = 'article_photos';
    protected $fillable = ['photo'];

    public function article()
    {
        return $this->morphToMany(Article::class, 'articlable');
    }

}
