<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view("pages.client.teachers");
    }

    public function courseDetail(){
        return view("pages.client.teacher-detail");


    }
}
