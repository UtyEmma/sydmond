<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Str;
use App\Library\Token;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{

    private $folder = 'images/posts';

    function index(){
        $posts = Post::paginate();
        return Response::view('admin.posts.posts', [
            'posts' => $posts
        ]);
    }

    function newPost(){
        return Response::view('admin.posts.create-post');
    }

    function edit($id){
        $post = Post::findOrFail($id);
        return Response::view('admin.posts.edit-post', [
            'post' => $post
        ]);
    }

    public function create(CreatePostRequest $request){
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->title);
        $slug = Str::slug($request->title);
        $values = collect($request->validated())->merge(['image' => $image, 'slug' => $slug]);
        Post::create($values->all());
        return Response::redirectBack('success', 'Post Created');
    }

    public function status($id){
        $post = Post::findOrFail($id);
        $post->status = !$post->status;
        $post->save();
        $status = $post->status ? 'Published' : 'Unpublished';

        return Response::redirectBack('success', "Post $status");
    }

    public function update(EditPostRequest $request, $id){
        $post = Post::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->title, $post->image)
                    : $post->image;
        $values = collect($request->validated())->merge(['image' => $image]);
        $post->update($values->all());
        return Response::redirectBack('success', "Post Updated");
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        FileHandler::deleteFile($post->image);
        $post->delete();
        return Response::redirectBack('success', 'Post Deleted');
    }

}
