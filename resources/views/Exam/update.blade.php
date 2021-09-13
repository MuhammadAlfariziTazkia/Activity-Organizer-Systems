@extends('layouts.master')

@section('content')

    <h1>Update Page</h1>

    <form action="{{ url('exam') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" method="PUT" name="_method">
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
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" type="text" class="form-control" id="date" required value="{{$exam->date}}">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input name="time" type="text" class="form-control" id="time" required value="{{$exam->time}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
