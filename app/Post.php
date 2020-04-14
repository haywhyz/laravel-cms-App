<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id', 'title','content','description','publish_at','image'
    ];

    public function category()
    {
    //    $posts->belongTo(category::class);
      $posts->belongsTo(Category::class);
    }
}
