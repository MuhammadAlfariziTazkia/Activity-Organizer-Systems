<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;

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
        $original_name = $assignment_attachment->getClientOriginalName();
        $assignment_file_name = $current_date.' '.$original_name;

        $assignment = new Assignment;
        $assignment->subject = $request->subject;
        $assignment->description = $request->description;
        $assignment->assignment_link = $request->assignment_link;
        $assignment->assignment_screenshot = $assignment_file_name;
        $assignment->assigned_date = $current_date;
        $assignment->deadline_date = $request->deadline_date;
        $assignment->status = 'Not Finished';

        $assignment_attachment->move(public_path().'/images/Assignment', $assignment_file_name);
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
    }
}
