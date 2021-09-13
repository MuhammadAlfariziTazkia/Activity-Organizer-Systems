<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exam_undone = Exam::all()->where('user', Auth::user()->email)->where('status', 'Not yet')->sortBy('date');
        $exam_done = Exam::all()->where('user', Auth::user()->email)->where('status', 'Completed')->sortBy('date');
        $title = 'My Exam';
        return view('Exam.index', [
            'exam_done' => $exam_done,
            'exam_undone' => $exam_undone,
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
        $title = 'Add Exam';

        return view('Exam.create', compact('title'));
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
        $exam = new Exam;
        $exam->subject = $request->subject;
        $exam->lesson = $request->lesson;
        $exam->category = $request->category;
        $exam->datetime = $request->date.' ('.$request->time.')';
        $exam->status = 'Not yet';
        $exam->user = Auth::user()->email;
        $exam->save();
        return redirect('exam');
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
        $exam = Exam::find($id);
        $title = 'Edit Exam';

        return view('Exam.update', compact('exam', 'title'));
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
        $exam = Exam::find($id);
        $exam->subject = $request->subject;
        $exam->lesson = $request->lesson;
        $exam->category = $request->category;
        $exam->datetime = $request->date.' ('.$request->time.')';
        $exam->status = $request->status;
        $exam->save();
        return redirect('exam');
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
        $exam = Exam::find($id);
        $exam->delete();

        return redirect('exam');
    }
}
