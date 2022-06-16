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

    <div class="col-lg-8">

        <form action="/book/tutor" method="post">
    
            @csrf

            <h1 class="my-5">Choose your desired time</h1>
    
            <input type="hidden" name="subject_id" id="subject_id" value="">
    
            <select class="form-select mb-3" name="start_time">
                <option>Schedule Options</option>
                <option value="07">07:00 - 08:00</option>
                <option value="08">08:00 - 09:00</option>
                <option value="09">09:00 - 10:00</option>
                <option value="10">10:00 - 11:00</option>
                <option value="11">11:00 - 12:00</option>
                <option value="12">12:00 - 13:00</option>
                <option value="13">13:00 - 14:00</option>
                <option value="14">14:00 - 15:00</option>
                <option value="15">15:00 - 16:00</option>
                <option value="16">16:00 - 17:00</option>
                <option value="17">17:00 - 18:00</option>
                <option value="18">18:00 - 19:00</option>
                <option value="19">19:00 - 20:00</option>
                <option value="20">20:00 - 21:00</option>
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
