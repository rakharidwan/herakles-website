<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public function detail()
    {
        return $this->morphedByMany(ArticleDetail::class, 'articlable');
    }
 
    /**
     * Get all of the videos that are assigned this tag.
     */
    public function quantity()
    {
        return $this->morphedByMany(ArticleQuantity::class, 'articlable');
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

}
