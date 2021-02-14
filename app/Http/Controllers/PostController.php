<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = [
            'posts' => Post::all(),
        ];
        return view('post.index', $data);
    }
    public function create(){
        $data = [
            'categories' => Category::all(),
        ];
        return view('post.create', $data);
    }
    public function store(Request $request){

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnail') ;
        }
        else {
            $path = "http://via.placeholder.com/150x150";
        }
        $title = $request->input('title');
        $user_id = auth()->user()->id;
        $category_id = $request->input('category_id');
        $details = $request->input('details');

        $post = new Post();
        $post->title = $title;
        $post->thumbnail = $path;
        $post->user_id = $user_id;
        $post->category_id = $category_id;
        $post->details = $details;
        $post->save();
        return redirect('/post');
    }
    public function edit($id){
        $post = Post::find($id);
        $data = [
            'post' => $post
        ];
        return view('post.edit', $data);
    }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }
    public function update(Request $request, $id){
        $title = $request->input('title');
        $thumbnail = $request->input('thumbnail');
        $user_id = $request->input('user_id');
        $category_id = $request->input('category_id');
        $details = $request->input('details');
        $post = Post::find($id);
        $post->title = $title;
        $post->thumbnail = $thumbnail;
        $post->user_id = $user_id;
        $post->category_id = $category_id;
        $post->details = $details;
        $post->save();
        return redirect('/post');
    }
}
