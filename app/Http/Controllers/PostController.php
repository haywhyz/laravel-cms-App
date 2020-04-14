<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // var_dump( Post::all());
        return view('post.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('post.create')->with('posts', '');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
       
    
         //upload image
         $image = $request->image->store('posts');
       
      // store data 
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content'=> $request->content,
            'publish_at'=> $request->publish_at,
            'image'=>$image

        ]);
               
       
        //    // store data
        // $post->title =$data['title'];
        // $post->description =$data['description'];
        // $post->content = $data['content'];
        // $post->publish_at = $data['publish_at'];
        // $post->$image ;

    
        //flash messages
        session()->flash('success','data successfully stored');
        //redirect
        return redirect(route('post.index'));
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.create')->with('posts',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = request()->all();
        if ($request->hasFile('image')){
            $image = $request->image->store('posts');
            Storage::delete($post->image);
            $data['image'] = $image;
        }
            $post->title = $data['title'];
            $post->description =$data['description'];
            $post->content = $data['content'];
            $post->publish_at = $data['publish_at'];
            $post->update();

            session()->flash('success', 'post successfully updated');

            return redirect('/post');
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts =Post::withTrashed()->where('id', $id)->first();
        if($posts->trashed()){

        $posts->forceDelete();
        Storage::delete($posts->image);
        }
        else{

        $posts->delete();
        }

        session()->flash('success','post succesfully deleted');
        return redirect('/post');
    }

    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();
        return view('post.index')->with('posts', $trashed);
    } 
}
