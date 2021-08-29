@extends('layouts/master')

@section('content')
<h1><b>My Assignment</b></h1>
    <a href="{{ url('assignment/create') }}" class="btn btn-primary">Add Assignment</a>
    <div class="row mt-4">
        <div class="col">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Assigned Date</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Deadline</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Status</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignment_undone as $key => $item)
                        <tr>
                            <td scope="col">
                                <center>{{ $item->assigned_date }}</center>
                            </td>
                            <td scope="col">
                                <center>{{ $item->deadline_date }}</center>
                            </td>
                            <td scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </td>
                            <td scope="col">
                                @if ($item->status == 'Not Finished')
                                <center><h5><span class="badge bg-danger">{{ $item->status }}</span></h5></center>
                                @endif
                                @if ($item->status == 'Finished')
                                <center><h5><span class="badge bg-success">{{ $item->status }}</span></h5></center>
                                @endif
                            </td>
                            <td>
                                <a href="{{url('/assignment/'.$item->id)}}" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Assigned Date</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Deadline</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Status</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignment_done as $key => $item)
                        <tr>
                            <td scope="col">
                                <center>{{ $item->assigned_date }}</center>
                            </td>
                            <td scope="col">
                                <center>{{ $item->deadline_date }}</center>
                            </td>
                            <td scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </td>
                            <td scope="col">
                                @if ($item->status == 'Not Finished')
                                <center><h5><span class="badge bg-danger">{{ $item->status }}</span></h5></center>
                                @endif
                                @if ($item->status == 'Finished')
                                <center><h5><span class="badge bg-success">{{ $item->status }}</span></h5></center>
                                @endif
                            </td>
                            <td>
                                <a href="{{url('/assignment/'.$item->id)}}" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
