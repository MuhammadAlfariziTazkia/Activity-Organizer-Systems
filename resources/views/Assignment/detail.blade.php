@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header"><b>{{ $assignment->subject }}</b></h2>
                <div class="row p-2">
                    @if ($assignment->assignment_screenshot)
                        <div class="col-md-5">
                            <a href="{{ '/images/Assignment/' . $assignment->assignment_screenshot }}"
                                target="_blank"><img
                                    src="{{ '/images/Assignment/' . $assignment->assignment_screenshot }}" alt=""
                                    width="100%"></a>
                        </div>
                    @endif
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5>{{ $assignment->description }}</h5>
                            <table border="0" class="mt-3">
                                <tr>
                                    <td>
                                        <h6>Assigned </h6>
                                    </td>
                                    <td>
                                        <h6> : </h6>
                                    </td>
                                    <td>
                                        <h6>{{ $assignment->assigned_date }}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Deadline </h6>
                                    </td>
                                    <td>
                                        <h6> : </h6>
                                    </td>
                                    <td>
                                        <h6>{{ $assignment->deadline_date }}</h6>
                                    </td>
                                </tr>
                            </table>
                            <a href="{{ url('/assignment/'.$assignment->id.'/edit') }}" class="btn btn-warning">Update</a>
                            <form action="{{ url('/assignment/'.$assignment->id) }}" method="POST" style="display: inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="confirm('Delete this Data ?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
