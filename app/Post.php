<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;
use App\Tag;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id', 'title','content','description','publish_at','image','category_id'
    ];

    public function category()
    {
    //    $posts->belongTo(category::class);
      return $this->belongsTo(Category::class);
    }
    public function tags()
    {
      return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function hasTag($tagid)
    {
      return in_array($tagid, $this->tags->pluck('id')->toArray());
    }
}
