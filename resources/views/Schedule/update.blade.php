@extends('layouts.master')

@section('content')

    <h1>Update Page</h1>
    
    <form action="{{ url('/schedule/'.$schedule->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required value="{{$schedule->subject}}">
                </div>
                <label for="day" class="form-label">Day</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="day" id="day"
                        aria-label="Example select with button addon">
                        <option value="sunday" @if ($schedule->day == 'sunday') selected @endif>Sunday</option>
                        <option value="monday" @if ($schedule->day == 'monday') selected @endif>Monday</option>
                        <option value="tuesday" @if ($schedule->day == 'tuesday') selected @endif>Tuesday</option>
                        <option value="wednesday" @if ($schedule->day == 'wednesday') selected @endif>Wednesday</option>
                        <option value="thursday" @if ($schedule->day == 'thursday') selected @endif>Thursday</option>
                        <option value="friday" @if ($schedule->day == 'friday') selected @endif>Friday</option>
                        <option value="saturday" @if ($schedule->day == 'saturday') selected @endif>Saturday</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label">Start Time (hh:mm)</label>
                    <input name="start_time" type="text" class="form-control" id="start_time" required value="{{$schedule->start_time}}"  minlength="5" maxlength="5">
                </div>
                <div class="mb-3">
                    <label for="end_time" class="form-label">End Time (hh:mm)</label>
                    <input name="end_time" type="text" class="form-control" id="end_time" value="{{$schedule->end_time}}" minlength="5" maxlength="5">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="classroom_link" class="form-label">Classroom Link</label>
                    <input name="classroom_link" type="text" class="form-control" id="classroom_link" value="{{$schedule->classroom_link}}">
                </div>
                <div class="mb-3">
                    <label for="meet_link" class="form-label">Meet Link</label>
                    <input name="meet_link" type="text" class="form-control" id="meet_link" value="{{$schedule->meet_link}}">
                </div>
                <label for="from" class="form-label">From</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="from" id="from"
                        aria-label="Example select with button addon">
                        <option value="College" @if ($schedule->from == 'College') selected @endif>College</option>
                        <option value="Work" @if ($schedule->from == 'Work') selected @endif>Work</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
