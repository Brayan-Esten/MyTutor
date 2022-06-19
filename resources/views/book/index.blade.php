@extends('layouts.main')

@section('container')
    <h1 class="my-5">Choose your desired subject</h1>

    <section class="subject" id="primary">
        <h3 class="h3 mb-5 fw-bold subject-category">
            Primary Level
        </h3>
        <button class="pre-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <button class="nxt-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <div class="subject-container">
            @foreach ($primary as $row)
                <div class="subject-card" id="{{ $row->id }}">
                    <div class="subject-image">
                        <img src="img/subjects/{{ $row->field->name }}.jpg" class="subject-thumb">
                    </div>
                    <div class="card-img-overlay d-flex justify-content-center align-items-center p-0">
                        <h5 class="card-title fs-2 text-center py-4 flex-fill text-light"
                            style="background-color: rgba(0,0,0,0.7); text-transform: capitalize;">
                            {{ $row->field->name }}
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="subject" id="junior">
        <h3 class="h3 mb-5 fw-bold subject-category">
            Junior-High Level
        </h3>
        <button class="pre-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <button class="nxt-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <div class="subject-container">
            @foreach ($junior as $row)
                <div class="subject-card" id="{{ $row->id }}">
                    <div class="subject-image">
                        <img src="img/subjects/{{ $row->field->name }}.jpg" class="subject-thumb">
                    </div>
                    <div class="card-img-overlay d-flex justify-content-center align-items-center p-0">
                        <h5 class="card-title fs-2 text-center py-4 flex-fill text-light"
                            style="background-color: rgba(0,0,0,0.7); text-transform: capitalize;">
                            {{ $row->field->name }}
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="subject" id="senior">
        <h3 class="h3 mb-5 fw-bold subject-category">
            Senior-High Level
        </h3>
        <button class="pre-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <button class="nxt-btn"><i class="bi bi-chevron-right text-light fw-bold"></i></button>
        <div class="subject-container">
            @foreach ($senior as $row)
                <div class="subject-card" id="{{ $row->id }}">
                    <div class="subject-image">
                        <img src="img/subjects/{{ $row->field->name }}.jpg" class="subject-thumb">
                    </div>
                    <div class="card-img-overlay d-flex justify-content-center align-items-center p-0">
                        <h5 class="card-title fs-2 text-center py-4 flex-fill text-light"
                            style="background-color: rgba(0,0,0,0.7); text-transform: capitalize;">
                            {{ $row->field->name }}
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <h1 class="my-5">Choose your desired time</h1>

    <div class="col-lg-4">

        <form action="/book/tutor" method="get">

            @csrf


            <input class="@error('subject_id') is-invalid @enderror" type="hidden" name="subject_id" id="subject_id"
                value="">

            @error('subject_id')
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    {{ 'Please choose a subject first' }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror

            @error('start_time')
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    {{ 'Please choose a schedule first ' }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror

            <select class="form-select mb-3" name="start_time">
                <option value="">Schedule Options</option>
                <option value="07" {{ 7 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    07:00 - 09:00
                </option>
                <option value="08" {{ 8 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    08:00 - 10:00
                </option>
                <option value="09" {{ 9 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    09:00 - 11:00
                </option>
                <option value="10" {{ 10 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    10:00 - 12:00
                </option>
                <option value="11" {{ 11 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    11:00 - 13:00
                </option>
                <option value="12" {{ 12 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    12:00 - 14:00
                </option>
                <option value="13" {{ 13 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    13:00 - 15:00
                </option>
                <option value="14" {{ 14 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    14:00 - 16:00
                </option>
                <option value="15" {{ 15 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    15:00 - 17:00
                </option>
                <option value="16" {{ 16 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    16:00 - 18:00
                </option>
                <option value="17" {{ 17 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    17:00 - 19:00
                </option>
                <option value="18" {{ 18 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    18:00 - 20:00
                </option>
                <option value="19" {{ 19 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    19:00 - 22:00
                </option>
                <option value="20" {{ 20 < (int) date('H', strtotime(date('Y-m-d H:i:s'))) ? 'disabled' : '' }}>
                    20:00 - 22:00
                </option>
                <option value="22">
                    22:00 - 00:00
                </option>
            </select>

            <button type="submit" class="btn btn-primary mb-5">Find Tutor</button>

        </form>

    </div>




    <script>
        const subjectId = document.getElementById("subject_id");
        const subjects = document.querySelectorAll(".subject-card");

        // subject cards event listeners
        subjects.forEach(e => {
            e.addEventListener("click", function() {
                subjects.forEach(e => {
                    e.classList.remove("c-active");
                })
                e.classList.add("c-active");
                subjectId.value = e.id;
            });
        });

    </script>
@endsection
