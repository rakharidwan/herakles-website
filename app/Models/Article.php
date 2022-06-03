<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = ['id_category','code_article','no_article','name_article','price','description','chapter','main_image','status_publish','created_at'];


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

    public function volume()
    {
        return $this->morphedByMany(Volume::class, 'articlable');
    }

    public function photo()
    {
        return $this->morphedByMany(ArticlePhoto::class, 'articlable');
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class,'id_category');
    }

}
