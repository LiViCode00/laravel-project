<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

    public function write_post(){
        if (!Auth::guard('student')->check()) {
            return Redirect::guest(route('login'));
            
        } else {
            $categories = Category::getAllCate();
            return view('pages.client.write_post', [
                "categories" => $categories
            ]);
        }
    }

    
        public function store(Request $request)
    {
        // Nhận dữ liệu từ frontend
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $image_paths = json_decode($request->input('image_paths'));

        // Lưu tất cả các hình ảnh vào thư mục public/images/news
        $saved_image_paths = [];
        foreach ($image_paths as $image_path) {
            $imageFilename = 'news_image_' . time() . '.' . pathinfo($image_path, PATHINFO_EXTENSION);
            $imagePath = public_path('images/news') . '/' . $imageFilename;
            file_put_contents($imagePath, file_get_contents($image_path));
            $saved_image_paths[] = 'images/news/' . $imageFilename;
        }

        // Tạo mới bài viết
        $post = new Post();
        $post->title = $title;
        $post->category_id = $category_id;
        $post->image_paths = json_encode($saved_image_paths);
        // Thêm các trường dữ liệu khác nếu cần

        // Lưu bài viết
        $post->save();

        // Trả về kết quả nếu cần
        return response()->json(['message' => 'Bài viết đã được đăng thành công']);
    }

  
    
}
