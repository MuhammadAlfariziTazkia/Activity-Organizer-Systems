@extends('layouts.master')

@section('content')

    <h1>Update Page</h1>

    <form action="{{ url('/assignment/'.$assignment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required value="{{$assignment->subject}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label> <br>
                    <textarea name="description" id="" cols="30" rows="10">{{$assignment->description}}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="assignment_link" class="form-label">Assignment Link</label>
                    <input name="assignment_link" type="text" class="form-control" id="assignment_link" value="{{$assignment->assignment_link}}">
                </div>
                <div class="mb-3">
                    <label for="deadline_date" class="form-label">Deadline Date (yyyy-mm-dd)</label>
                    <input name="deadline_date" type="text" class="form-control" id="deadline_date" required value="{{$assignment->deadline_date}}" minlength="10" maxlength="10">
                </div>

                <div class="mb-3">
                    <label for="assignment_screenshot" class="form-label">Assignment Screenshot</label>
                    <input name="assignment_screenshot" type="file" class="form-control" id="assignment_screenshot">
                </div>
                <div class="mb-3">
                    <input type="hidden" value="{{$assignment->finished_screenshot}}" name="finished_screenshot_before">
                    <label for="finished_screenshot" class="form-label">Finished Screenshot</label>
                    <input name="finished_screenshot" type="file" class="form-control" id="finished_screenshot">
                </div>
                <label for="status" class="form-label">Status</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="status" id="from"
                        aria-label="Example select with button addon">
                        <option value="Not Finished" @if ($assignment->status == 'Not Finished') selected @endif>Not Finished</option>
                        <option value="Finished" @if ($assignment->status == 'Finished') selected @endif>Finished</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
