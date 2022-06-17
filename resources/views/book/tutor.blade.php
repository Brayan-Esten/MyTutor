@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">

            <a href="/book" class="mb-5">
                <i class="bi bi-caret-left-square-fill" style="font-size: 3rem; color: var(--grey)"></i>
            </a>

            @if ($tutors->count())
                @foreach ($tutors as $tutor)
                    <div class="col-md-3 mb-5 ">

                        <!-- card header -->
                        <div class="rounded-top"
                            style="width: 300px; height: 80px;
                        background: linear-gradient(180deg, #F6F578 0%, #F8B501 100%);
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 0px 12px -2px;">

                            <img src="{{ asset('img/profile.png') }}" class="rounded-circle"
                                style="z-index:10; position: absolute; margin-left:105px; margin-top:40px; height:90px; width:90px;">

                            <div class="rounded-circle"
                                style="position:absolute; margin-left:105px; margin-top:40px; background-color:white; height:90px; width:90px; opacity:100%;">
                            </div>

                        </div>

                        <!-- card body -->
                        <div class="rounded-bottom"
                            style="width: 300px;  padding: 20px;
                            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                            <div
                                style="display:flex; flex-direction: column; align-items:center; position:relative; padding-top:50px;">

                                <div>
                                    <p class="fw-bold text-center" style="font-size: 1.1">{{ $tutor->name }}</p>
                                </div>
                                <div>
                                    <p class="text-center text-muted" style="font-size: 0.9rem">{{ $tutor->last_ed }}</p>
                                    <p class="text-center text-muted" style="font-size: 0.9rem; margin-top: -1rem;">at</p>
                                    <p class="text-center text-muted" style="font-size: 0.9rem; margin-top: -1rem;">
                                        {{ $tutor->institution }}
                                    </p>
                                </div>
                            </div>

                            <div>
                                <i class="bi bi-star-fill" style="color: var(--yellow)"></i>
                                <span> {{ $tutor->rating }}</span>
                                <div>
                                    <p style="text-transform: capitalize">Expertise : {{ $expertise->field->name }}</p>
                                </div>
                            </div>

                            <br>

                            <!-- buat continue -->
                            <a
                                href="/book/checkout/{{ $tutor->slug }}/{{ $expertise->field->id }}/{{ $expertise->edulvl->id }}/{{ $date }}/{{ $start_time }}">
                                <div class="rounded-3"
                                    style="background-color:#3D96FF;display:flex;justify-content:center;align-items:center;height:35px;">
                                    <div class="text-light">
                                        <span>
                                            Continue
                                        </span>
                                        <span
                                            style="position:relative; border: solid white;  border-width: 0 3px 3px 0;  display: inline-block;  padding: 3px;transform: rotate(-45deg);  -webkit-transform: rotate(-45deg);">
                                        </span>
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                @endforeach
            @else
                <p class="text-center fs-4">No post found</p>
            @endif

        </div>
    </div>
@endsection
