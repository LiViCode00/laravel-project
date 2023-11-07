<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $courses;
    public function __construct(){
        $this->courses = Course::paginate(10);
    }
    
    public function index()
    {
        return view('pages.client.home', ['courses' => $this->courses]);
    }
}
