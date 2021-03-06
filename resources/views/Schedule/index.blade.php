@extends('layouts.master')

@section('content')

    <h1><b>My Schedule</b></h1>
    <a href="{{ url('schedule/create') }}" class="btn btn-primary">Add Shedule</a>
    <div class="row mt-4">
        <div class="col">
            <center>
                <h3>Monday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($monday)>0)
                        @foreach ($monday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col">
            <center>
                <h3>Tuesday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($tuesday)>0)
                        @foreach ($tuesday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <center>
                <h3>Wednesday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($wednesday)>0)
                        @foreach ($wednesday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col">
            <center>
                <h3>Thursday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($thursday)>0)
                        @foreach ($thursday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <center>
                <h3>Friday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($friday)>0)
                        @foreach ($friday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col">
            <center>
                <h3>Saturday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($saturday)>0)
                        @foreach ($saturday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <center>
                <h3>Sunday</h3>
            </center>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center><b>Start</b></center>
                        </th>
                        <th scope="col">
                            <center><b>End</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Subject</b></center>
                        </th>
                        <th scope="col">
                            <center><b>From</b></center>
                        </th>
                        <th scope="col">
                            <center><b>Action</b></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($sunday)>0)
                        @foreach ($sunday as $key => $item)
                        <tr>
                            <th scope="col">
                                <h4><span class="badge bg-danger">{{ $item->start_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h4><span class="badge bg-primary">{{ $item->end_time }}</span></h4>
                            </th>
                            <th scope="col">
                                <h5><b>{{ $item->subject }}</b></h5>
                            </th>
                            <th scope="col">
                                <h5><center>{{ $item->from }}</center></h5>
                            </th>
                            <th scope="col">
                                @if ($item->from === 'College')<a
                                        href="{{ $item->classroom_link }}" class="btn btn-success">Classroom</a><br>
                                @endif
                                <a href="{{ $item->meet_link }}" class="btn btn-primary mt-1">Meet</a>
                                <a href="{{url('/schedule/'.$item->id.'/edit')}}" class="btn btn-warning mt-1">Update</a>
                                <form action="{{url('/schedule/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger mt-1" onclick="confirm('Delete this schedule ?')">Delete</a>
                                </form>
                            </th>
                        </tr>
                    @endforeach    
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col">
        </div>
    </div>

@endsection
