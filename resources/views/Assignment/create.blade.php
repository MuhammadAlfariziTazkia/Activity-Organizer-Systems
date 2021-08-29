@extends('layouts.master')

@section('content')

    <h1>Create Page</h1>

    <form action="{{ url('assignment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label> <br>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="assignment_link" class="form-label">Assignment Link</label>
                    <input name="assignment_link" type="text" class="form-control" id="assignment_link">
                </div>
                <div class="mb-3">
                    <label for="deadline_date" class="form-label">Deadline Date</label>
                    <input name="deadline_date" type="text" class="form-control" required id="deadline_date">
                </div>

                <div class="mb-3">
                    <label for="assignment_screenshot" class="form-label">Assignment Screenshot</label>
                    <input name="assignment_screenshot" type="file" class="form-control" id="assignment_screenshot">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
