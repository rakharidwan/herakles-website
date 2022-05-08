<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDetail extends Model
{
    use HasFactory;

    protected $table = 'article_details';

    public function article()
    {
        return $this->morphToMany(Article::class, 'articlable');
    }

}
