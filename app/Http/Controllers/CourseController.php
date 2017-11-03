<?php

namespace App\Http\Controllers;

use App\Batch;
use App\Group;
use App\Shift;
use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Time;
use Illuminate\Support\Facades\Log;

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
        $shifts = Shift::all();
        $times = Time::all();
        $batches = Batch::all();
        $groups = Group::all();
        return view('course.manageCourse',[
            'academics' => $academics,
            'programs' => $programs,
            'shifts' => $shifts,
            'times' => $times,
            'batches'=>$batches,
            'groups' => $groups
        ]);
    }

    public function postInsertAcademic(Request $request)
    {
        if($request->ajax())
        {
            $academic = Academic::where('academic','=',$request->input('academic'))->first();
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

    public function postInsertLevel(Request $request)
    {
        if($request->ajax())
        {
            return response(Level::create($request->all()));
        }
    }

    public function showLevel(Request $request)
    {
        if($request->ajax())
        {
            return response(Level::where('program_id',$request->program_id)->get());
        }
    }

    public function postInsertShift(Request $request)
    {
        if($request->ajax())
        {
            $shift = Shift::where('shift','=',$request->input('shift'))->first();
            if(!$shift)
            {
                return response(Shift::create($request->all()));
            }
            return response('');
        }
    }

    public function postInsertTime(Request $request)
    {
        if($request->ajax())
        {
            $time = Time::where("time",'=',$request->input('time'))->first();
            if(!$time)
            {
                return response(Time::create($request->all()));
            }
            return response('');
        }
    }

    public function postInsertBatch(Request $request)
    {
        if($request->ajax())
        {
            $batch = Batch::where('batch',$request->batch)->first();
            if(!$batch)
            {
                return response(Batch::create($request->all()));
            }
            return response('');
        }
    }

    public function postInsertGroup(Request $request)
    {
        if($request->ajax())
        {
            $group = Group::where('groups','=',$request->groups)->first();
            if(!$group)
            {
                return response(Group::create($request->all()));
            }
            return response('');
        }
    }
}
