<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $coursesForFree;
    public function __construct(){
        $this->coursesForFree = Course::getCoursesForFree();
    }
    
    public function index()
    {
        return view('pages.client.home', ['coursesFree' => $this->coursesForFree]);
    }
}
