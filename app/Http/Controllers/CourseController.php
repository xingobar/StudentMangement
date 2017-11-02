<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;

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
        $programs = Program::all();
        $academics = Academic::orderBy('academic_id','DESC')->get();
        return view('course.manageCourse',[
            'academics' => $academics,
            'programs' => $programs
        ]);
    }

    public function postInsertAcademic(Request $request)
    {
        if($request->ajax())
        {
            $academic = Academic::where('academic','=',$request->input('academic'));
            if( !$academic )
            {
                return response(Academic::create($request->all()));
            }
            return response("");
        }
    }

    public function postInsertProgram(Request $request)
    {
        if($request->ajax())
        {
            return response(Program::create($request->all()));
        }
    }
}
