@extends('layouts.master')

@section('content')

    <h1>Create Page</h1>

    <form action="{{ url('schedule') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required>
                </div>
                <label for="day" class="form-label">Day</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="day" id="day"
                        aria-label="Example select with button addon">
                        <option value="sunday">Sunday</option>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label">Start Time</label>
                    <input name="start_time" type="text" class="form-control" id="start_time" required>
                </div>
                <div class="mb-3">
                    <label for="end_time" class="form-label">End Time</label>
                    <input name="end_time" type="text" class="form-control" id="end_time">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="classroom_link" class="form-label">Classroom Link</label>
                    <input name="classroom_link" type="text" class="form-control" id="classroom_link">
                </div>
                <div class="mb-3">
                    <label for="meet_link" class="form-label">Meet Link</label>
                    <input name="meet_link" type="text" class="form-control" id="meet_link">
                </div>
                <label for="from" class="form-label">From</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="from" id="from"
                        aria-label="Example select with button addon">
                        <option value="College">College</option>
                        <option value="Work">Work</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
