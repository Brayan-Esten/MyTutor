@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Today's Class</h1>
    </div>

    <div class="container">
        <div class="row p-4">
            @foreach ($data as $row)
                <div class="col-md-4 mb-5">

                    <div class="rounded-3 text-dark .col-xs-6 .col-sm-3"
                        style="width: 250px; padding: 20px; min-height: 250px; 
                    background-color: var(--white); box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.25);">

                        <div style="display:flex; justify-content: space-between; margin-bottom: 15px;">
                            <div class="rounded-5 text-center"
                                style="padding :1px;border-style:solid ;border-width:2px;border-color:var(--yellow); width : 100px">
                                online class
                            </div>
                            {{-- <div>
                            1 jam
                        </div> --}}
                        </div>


                        <div style="margin-bottom: 15px;">
                            <b style="text-transform: capitalize">
                                {{ $row->tutor->subject->field->name . ' - ' . $row->tutor->subject->edulvl->level }}
                            </b>
                        </div>
                        <div style="margin-bottom: 15px;"">
                            <span class="me-3">
                                <img src="{{ asset('img/profile.png') }}" alt="" style="height:30px;width:30px;">
                            </span>
                            <span style="text-transform: capitalize">
                                {{ $row->tutor->name }}
                            </span>
                        </div>


                        <div style="font-size: 0.9rem">
                            <b>Date : {{ date('F jS, Y', strtotime($row->date)) }}</b>
                        </div>
                        <div style="font-size: 0.9rem">
                            <b>Start : {{ $row->start_time . ':00 WIB' }}</b>
                        </div>
                        <div style="margin-bottom: 15px; font-size: 0.9rem">
                            <b>End : {{ $row->end_time . ':00 WIB' }}</b>
                        </div>
                        <div style="font-size: 10pt">
                            ZOOM Link: <a href="{{ $row->zoom_link . '.com' }}">{{ $row->zoom_link . '.com' }}</a>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>
    </div>
@endsection
