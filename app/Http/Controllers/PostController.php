<?php

namespace App\Http\Controllers;

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
        return view('post.create');
    }
    public function store(Request $request){
        $title = $request->input('title');
        $thumbnail = $request->input('thumbnail');
        $user_id = $request->input('user_id');
        $category_id = $request->input('category_id');
        $details = $request->input('details');
        $post = new Post();
        $post->title = $title;
        $post->thumbnail = $thumbnail;
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
