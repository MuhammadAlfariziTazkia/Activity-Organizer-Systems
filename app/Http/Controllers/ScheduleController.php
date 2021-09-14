<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $sunday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'sunday')->sortBy('start_time');
        $monday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'monday')->sortBy('start_time');
        $tuesday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'tuesday')->sortBy('start_time');
        $wednesday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'wednesday')->sortBy('start_time');
        $thursday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'thursday')->sortBy('start_time');
        $friday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'friday')->sortBy('start_time');
        $saturday = Schedule::all()->where('user', Auth::user()->email)->where('day', 'saturday')->sortBy('start_time');
        $title = 'My Schedule';
        return view('Schedule.index', [
            'sunday' => $sunday,
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Add Schedule';
        return view('Schedule.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $schedule = new Schedule;
        $schedule->subject = $request->subject;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->classroom_link = $request->classroom_link;
        $schedule->meet_link = $request->meet_link;
        $schedule->from = $request->from;
        $schedule->user = Auth::user()->email;
        $schedule->save();

        return redirect('/schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('Schedule.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $title = 'Edit Schedule';
        $schedule = Schedule::find($id);
        return view('Schedule.update', compact('schedule', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $schedule = Schedule::find($id);
        $schedule->subject = $request->subject;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->classroom_link = $request->classroom_link;
        $schedule->meet_link = $request->meet_link;
        $schedule->from = $request->from;
        $schedule->save();

        return redirect('/schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect('/schedule');
    }
}
