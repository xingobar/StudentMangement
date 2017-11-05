<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Classes;
use App\Group;
use App\Shift;
use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Time;

class StudentController extends Controller
{
    public function getStudentRegister()
    {
        $programs = Program::all();
        $academics = Academic::orderBy('academic_id', 'DESC')->get();
        $shifts = Shift::all();
        $times = Time::all();
        $batches = Batch::all();
        $groups = Group::all();
        return view('student.studentRegister',[
            'academics' => $academics,
            'programs' => $programs,
            'shifts' => $shifts,
            'times' => $times,
            'batches' => $batches,
            'groups' => $groups
        ]);
    }

    public function postStudentRegister(Request $request)
    {
        return $request->all();
    }
}
