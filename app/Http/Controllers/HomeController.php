<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;



class HomeController extends Controller
{
<<<<<<< HEAD
    private $coursesForFree;
    public function __construct(){
        $this->coursesForFree = Course::getCoursesForFree();
    }
    
=======
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    private $courses;
     
>>>>>>> 9398c49b74c13a84c015c41b9cd7fa3887b8b546
    public function index()

    {
        return view('pages.client.home', ['coursesFree' => $this->coursesForFree]);
    }
}
