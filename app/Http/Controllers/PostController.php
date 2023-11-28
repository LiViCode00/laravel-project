<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::getPostPag(5);
        $postRand = Post::getPostRand();
        $categories = Category::getAllCate();
        return view("pages.client.posts", [
            'posts' => $post,
            'postLike' => $postRand,
            'categories' => $categories
        ]);
    }

    public function test(Request $request){
        if($request->ajax() || 'NULL'){
          $products =Post::paginate(2);
          return view('posts.index',compact('products'));
        }
    }

    public function postDetail($id){
        $post = Post::getPostById($id);
        $user_id_post = $post->user_id;
        $postRand = Post::getPostPopular($id);
        $postsSameUser = Post::getPostSameUser( $user_id_post);
        return view("pages.client.post-detail", [
            'post' => $post,
            'postSameUser' =>  $postsSameUser,
            'postRand' => $postRand
          ]);
    }

  
    
}
