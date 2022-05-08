<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleQuantity extends Model
{
    use HasFactory;

    protected $table = 'article_quantitys';

    public function article()
    {
        return $this->morphToMany(Article::class, 'articlable');
    }
}
