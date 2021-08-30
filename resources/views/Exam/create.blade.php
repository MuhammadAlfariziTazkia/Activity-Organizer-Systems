@extends('layouts.master')

@section('content')

    <h1>Create Page</h1>

    <form action="{{ url('exam') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="lesson" class="form-label">Lesson</label>
                    <input name="lesson" type="text" class="form-control" id="lesson" required>
                </div>
                <label for="category" class="form-label">Category</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="category" id="category"
                        aria-label="Example select with button addon">
                        <option value="Quiz">Quiz</option>
                        <option value="UTS">UTS</option>
                        <option value="UAS">UAS</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input name="date" type="text" class="form-control" id="date" required>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input name="time" type="text" class="form-control" id="time" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
