@extends('layouts/master')

@section('content')
    <h1><b>My Presence</b></h1>
    <a href="{{url('presence/create')}}" class="btn btn-primary">Add Presence</a>
    <table class="table table-dark table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">
                    <center><b>Subject</b></center>
                </th>
                <th scope="col">
                    <center><b>Date</b></center>
                </th>
                <th scope="col">
                    <center><b>Proof</b></center>
                </th>
                <th scope="col">
                    <center><b>Status</b></center>
                </th>
            </tr>
        </thead>
        <tbody>
            @if (count($pre)>0)
            @foreach ($pre as $key => $item)
            <tr>
                <td scope="col">
                    <center>{{ $item->subject }}</center>
                </td>
                <td scope="col">
                    <center>{{ $item->date }}</center>
                </td>
                <td scope="col">
                    <center><a href="{{ '/images/Presence/' . $item->presence_screenshot }}" target="_blank"
                            class="btn btn-danger">Download Proof</a></center>
                </td>
                <td scope="col">
                    <h5><b>
                            <center><span @if ($item->status == 'Presence')
                                    class="badge bg-primary"
        @endif
        @if ($item->status == 'Sick/Excuse')
            class="badge bg-success"
        @endif
        @if ($item->status == 'Alpha')
            class="badge bg-danger"
        @endif
        >{{ $item->status }}</span></center></b></h5>
        </td>
        </tr>

        @endforeach
            @else
                <tr><th>No Data</th></tr>
            @endif
        </tbody>
    </table>
@endsection
