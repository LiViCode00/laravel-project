<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;



class HomeController extends Controller


{

    private $coursesForFree;
    public function __construct() {
        $this->coursesForFree = Course::getCoursesForFree();
    }


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
    
    public function index()

    {
        return view('pages.client.home', ['coursesFree' => $this->coursesForFree]);
    }
}
