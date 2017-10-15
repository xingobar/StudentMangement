<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    /**
     * CourseController constructor.
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    public function getManageCourse()
    {
        return view('course.manageCourse');
    }
}
