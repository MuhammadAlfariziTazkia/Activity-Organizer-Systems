@extends('layouts.master')

@section('content')

    <h1>Update Page</h1>

    <form action="{{ url('/exam/'.$exam->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required value="{{$exam->subject}}">
                </div>
                <div class="mb-3">
                    <label for="lesson" class="form-label">Lesson</label>
                    <input name="lesson" type="text" class="form-control" id="lesson" required value="{{$exam->lesson}}">
                </div>
                <label for="category" class="form-label">Category</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="category" id="category"
                        aria-label="Example select with button addon">
                        <option value="Quiz" @if ($exam->category == 'Quiz')
                            selected
                        @endif>Quiz</option>
                        <option value="UTS" @if ($exam->category == 'UTS')
                            selected
                        @endif>UTS</option>
                        <option value="UAS" @if ($exam->category == 'UAS')
                            selected
                        @endif>UAS</option>
                    </select>
                </div>
            </div>
            @php
                $datetime = $exam->datetime;
                $datetime_exploded = explode(' ', $datetime);
                $date = $datetime_exploded[0];
                $time = $datetime_exploded[1];
                $time = str_replace("(", "", $time);
                $time = str_replace(")", "", $time);
            @endphp
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" type="text" class="form-control" id="date" required value="{{$date}}">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input name="time" type="text" class="form-control" id="time" required value="{{$time}}">
                </div>
                <label for="Status" class="form-label">Status</label>
            <div class="input-group">
                <select class="form-select mb-3" name="status" id="Status"
                    aria-label="Example select with button addon">
                    <option value="Not yet" @if ($exam->status == 'Not yet')
                        selected
                    @endif>Not yet</option>
                    <option value="Completed" @if ($exam->status == 'Completed')
                        selected
                    @endif>Completed</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
