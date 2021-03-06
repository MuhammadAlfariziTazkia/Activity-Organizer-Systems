<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Assignment;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_day = date('D');
        $current_date = date('Y-m-d');
        $current_time = date('H:i');
        $datetime = $current_date.' ('.$current_time.')';
        if($current_day == "Sun"){
            $day = 'sunday';
        }
        if($current_day == "Mon"){
            $day = 'monday';
        }
        if($current_day == "Tue"){
            $day = 'tuesday';
        }
        if($current_day == "Wed"){
            $day = 'wednesday';
        }
        if($current_day == "Thu"){
            $day = 'thursday';
        }
        if($current_day == "Fri"){
            $day = 'friday';
        }
        if($current_day == "Sat"){
            $day = 'sat';
        }
        $unprocessed_schedule = Schedule::all()->where('user', Auth::user()->email)->where('day', $day)->where('start_time', '>=', $current_time)->sortBy('start_time')->take(1);
        $unprocessed_exam = Exam::all()->where('user', Auth::user()->email)->where('status', 'Not yet')->sortBy('datetime')->where('datetime', '>=', $datetime)->take(1);
        $assignment = Assignment::all()->where('user', Auth::user()->email)->where('status', 'Not Finished')->where('deadline_date', $current_date);
        $unprocessed_exam = $unprocessed_exam ?? [];
        $unprocessed_schedule = $unprocessed_schedule ?? [];
        
        if(count($unprocessed_exam) == 0){
            $exam = 'no data';
        }else{
            foreach($unprocessed_exam as $item){
                $exam = $item;
            }
        }

        if(count($unprocessed_schedule) == 0){
            $schedule = 'no data';
        }else{
            foreach($unprocessed_schedule as $item){
                $schedule = $item;
            }
        }
        
        $title = 'Dashboard';
        return view('dashboard', compact('title', 'schedule', 'exam', 'assignment'));
    }
}
