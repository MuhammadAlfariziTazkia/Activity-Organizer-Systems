<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pre = Presence::all();
        return view('Presence.index', compact('pre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Presence.create');
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
        
        $presence_screenshot = $request->file('presence_screenshot');
        $pre = new Presence;
        $pre->subject = $request->subject;
        $pre->date = $request->date;
        $pre->status = $request->status;

        if($presence_screenshot){
            $original_name = $presence_screenshot->getClientOriginalName();
            $presence_screenshot_fn = $current_date.' '.$original_name;
            $pre->presence_screenshot = $presence_screenshot_fn;
            $presence_screenshot->move(public_path().'/images/Presence', $presence_screenshot_fn);
        }

        $pre->save();
        return redirect('presence');
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
