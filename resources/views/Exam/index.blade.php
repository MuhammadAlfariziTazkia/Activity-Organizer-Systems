@extends('layouts/master')

@section('content')
    <h1><b>My Exam</b></h1>
    <a href="{{ url('exam/create') }}" class="btn btn-primary">Add Exam</a>
    <div class="row mt-4">
        <div class="col">
            <center>
                <h3>On Going</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Time</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Lesson</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Category</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($exam_undone)>0)
                    @foreach ($exam_undone as $key => $item)
                    <tr>
                        <td>{{ $item->datetime }}</td>
                        <td>
                            <h5>{{ $item->subject }}</h5>
                        </td>
                        <td>{{ $item->lesson }}</td>
                        <td>{{ $item->category }}</td>
                        <td><a href="{{url('/exam/'.$item->id.'/edit')}}" class="btn btn-warning">Update</a>
                            <form action="{{ url('/exam/' . $item->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="confirm('Do you want to delete this data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    @else
                        <tr><th>No Data</th></tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col">
            <center>
                <h3>Completed</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Time</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Lesson</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Category</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($exam_done)>0)
                    @foreach ($exam_done as $key => $item)
                    <tr>
                        <td>{{ $item->datetime }}</td>
                        <td>
                            <h5>{{ $item->subject }}</h5>
                        </td>
                        <td>{{ $item->lesson }}</td>
                        <td>{{ $item->category }}</td>
                        <td><a href="{{url('/exam/'.$item->id.'/edit')}}" class="btn btn-warning">Update</a>
                            <form action="{{ url('/exam/' . $item->id) }}" method="POST" >
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="confirm('Do you want to delete this data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    @else
                        <tr><th>No Data</th></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
