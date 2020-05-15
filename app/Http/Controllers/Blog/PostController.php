<?php

namespace App\Http\Controllers\Blog;
use App\Post;
use App\Category;
use App\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
       
        return view('blog.show')->with('post', Post::find($id) );
     }

     public function category(Category $category)
     {
         return view('blog.category')
         ->with('category', $category)
         ->with('posts', $category->posts)
         ->with('categories', Category::all())
         ->with('tags', Tag::all());
     }

     public function tag(Tag $tag)
     {
         return view('blog.tag')->with('tag', $tag);
     }
}
