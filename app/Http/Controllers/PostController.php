<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("pages.client.posts");
    }

    public function courseDetail(){
        return view("pages.client.post-detail");


    }
}
