<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request\PostRequest;

class PostController extends Controller
{
    /*
    * Post一覧を表示する
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    /*
    public function index(Post $post)
    {
        return $post->get();
    }
    */
    
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request, PostRequest $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/');
    }
}
