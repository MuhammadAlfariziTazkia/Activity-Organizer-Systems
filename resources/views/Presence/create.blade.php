@extends('layouts.master')

@section('content')

    <h1>Create Page</h1>

    <form action="{{ url('presence') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" required>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date (yyyy-mm-dd)</label>
                    <input name="date" type="text" class="form-control" id="date" required minlength="10" maxlength="10" placeholder="eg. 2021-20-08">
                </div>

                <div class="mb-3">
                    <label for="presence_screenshot" class="form-label">Screenshot</label>
                    <input name="presence_screenshot" type="file" class="form-control" id="presence_screenshot">
                </div>

                <label for="status" class="form-label">Status</label>
                <div class="input-group">
                    <select class="form-select mb-3" name="status" id="status"
                        aria-label="Example select with button addon">
                        <option value="Presence">Presence</option>
                        <option value="Sick/Excuse">Sick/Excuse</option>
                        <option value="Alpha">Alpha</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
