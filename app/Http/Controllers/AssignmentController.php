<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use File;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assignment_undone = Assignment::all()->where('status', 'Not Finished')->sortBy('deadline');
        $assignment_done = Assignment::all()->where('status', 'Finished')->sortBy('deadline');
        return view('Assignment.index', [
            'assignment_undone' => $assignment_undone,
            'assignment_done' => $assignment_done
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
        return view('Assignment.create');
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
        $current_date = date('Y-m-d');
        
        $assignment_attachment = $request->file('assignment_screenshot');
        
        $assignment = new Assignment;
        $assignment->subject = $request->subject;
        $assignment->description = $request->description;
        $assignment->assignment_link = $request->assignment_link;
        $assignment->assigned_date = $current_date;
        $assignment->deadline_date = $request->deadline_date;
        $assignment->status = 'Not Finished';

        if($assignment_attachment){
            $original_name = $assignment_attachment->getClientOriginalName();
            $assignment_file_name = $current_date.' '.$original_name;
            $assignment->assignment_screenshot = $assignment_file_name;
            $assignment_attachment->move(public_path().'/images/Assignment', $assignment_file_name);
        }

        $assignment->save();

        return redirect ('assignment');
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
        $assignment = Assignment::find($id);
        return view('Assignment.detail', compact('assignment'));
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
        $assignment = Assignment::find($id);
        return view('Assignment.update', compact('assignment'));
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
        $current_date = date('Y-m-d');
        
        $assignment_attachment = $request->file('assignment_screenshot');
        $finished_attachment = $request->file('finished_screenshot');

        $assignment = Assignment::find($id);
        if($assignment_attachment){
            File::delete(public_path().'/images/Assignment/'.$assignment->assignment_screenshot);
            $original_name = $assignment_attachment->getClientOriginalName();
            $assignment_file_name = $current_date.' '.$original_name;
            $assignment->assignment_screenshot = $assignment_file_name;
            $assignment_attachment->move(public_path().'/images/Assignment', $assignment_file_name);
        }

        if($finished_attachment){
            File::delete(public_path().'/images/Assignment/'.$assignment->finished_screenshot);
            $original_name = $finished_attachment->getClientOriginalName();
            $finished_file_name = $current_date.' '.$original_name;
            $assignment->finished_screenshot = $finished_file_name;
            $finished_attachment->move(public_path().'/images/Assignment', $finished_file_name);
        }

        $assignment->subject = $request->subject;
        $assignment->description = $request->description;
        $assignment->assignment_link = $request->assignment_link;
        $assignment->deadline_date = $request->deadline_date;
        $assignment->status = $request->status;

        $assignment->save();

        return redirect('assignment');
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
        $assignment = Assignment::find($id);

        if($assignment->assignment_screenshot != ''){
            File::delete(public_path().'/images/Assignment/'.$assignment->assignment_screenshot);
        }

        if($assignment->finished_screenshot != ''){
            File::delete(public_path().'/images/Assignment/'.$assignment->finished_screenshot);
        }
        $assignment->delete();

        return redirect('assignment');
    }
}
