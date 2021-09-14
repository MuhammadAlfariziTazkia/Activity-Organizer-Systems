@php
$date = date('F j, Y');
$time = date('g:i a');
$current_day = date('D');
$current_date = date('Y-n-j');
$current_time = date('H:i');


@endphp
@extends('layouts.dashboard-master')

@section('content')
    <div class="container" id="userspace">
        <center>
            <div class="card p-4" style="border-radius: 20px">
                <h1>
                    <b>Halo, {{ Auth::user()->name }}</b>
                </h1>
                <br>
                <h2 class="mt-3">
                    {{ $date }}
                    <br>
                    {{ $time }}
                </h2>
                <h3>
                    (Waktu DKI Jakarta)
                </h3>
            </div>
        </center>
        <div class="row mt-4">
            <div class="col">
                <div class="card" style="border-radius: 20px">
                    <div class="card-header">
                        <h3>
                            <center><b>Nearest Schedule Today</b></center>
                        </h3>
                    </div>
                    <div class="card-body">
                        @if (count($schedule) > 0)
                            <div class="card nearest_item_list">
                                <h3 class="card-title">{{ $schedule[0]->subject }}</h3>
                                <h5 class="card-text">
                                    At {{ $schedule[0]->start_time }}
                                </h5><br>
                            </div>
                            <br>
                            <center><a href="{{ url('/schedule') }}" class="btn btn-primary">Show My Schedule!</a>
                            </center>
                        @else
                            <h4>Yohoo, Relax ! <br> There is no Schedule Today</h4><br>
                            <center><a href="{{ url('/schedule') }}" class="btn btn-primary">Show My Schedule!</a>
                            </center>
                        @endif
                    </div>
                </div>
                <br>
            </div>
            
            <div class="col">
                <div class="card" style="border-radius: 20px">
                    <div class="card-header">
                        <h3>
                            <center><b>Nearest Exam</b></center>
                        </h3>
                    </div>
                    <div class="card-body">
                        @if ($exam != 'no data')
                        
                           <div class="card nearest_item_list">
                            <h4 class="card-title">({{$exam->category}}) {{ $exam->subject }}</h4>
                            <p class="card-text">
                                At {{ $exam->datetime }}
                            </p><br>
                           </div>
                           <br>
                            <center>
                                <a href="{{ url('/exam') }}" class="btn btn-primary">Show My Exam!</a>
                            </center>
                        @else
                            <h4>Yohoo, Relax ! <br> There are no upcoming exams</h4>
                        @endif
                    </div>
                </div>
                <br>
            </div>
            
            <div class="col">
                <div class="card" style="border-radius: 20px">
                    <div class="card-header">
                        <h3>
                            <center><b>Today's Assignment Deadline</b></center>
                        </h3>
                    </div>
                    <div class="card-body">
                        @if (count($assignment) > 0)
                            @foreach ($assignment as $item)
                                <div class="card nearest_item_list">
                                    <h4 class="card-title">{{ $item->subject }}</h4>
                                    <p class="card-text">
                                        At {{ $item->deadline_date }}
                                    </p>

                                </div>
                                <br>
                            @endforeach
                            <br>
                            <center>
                                <a href="{{ url('/assignment') }}" class="btn btn-primary">Show My Exam!</a>
                            </center>
                        @else
                            <h4>Yohoo, Relax ! <br> There are no assignment deadline Today</h4><br>
                            <center>
                                <a href="{{ url('/assignment') }}" class="btn btn-primary">Show My Assignment!</a>
                            </center>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
