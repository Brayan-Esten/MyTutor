@extends('layouts.main')

@section('container')
    {{-- <p>{{ $tutor->name }}</p>
    <p>{{ $field->name }}</p>
    <p>{{ $edulvl->level }}</p>
    <p>{{ $date }}</p>
    <p>{{ $start_time }}</p> --}}


    <div class="checkout pb-5">
        <div class="d-flex justify-content-around align-items-center" style="width: 50%;">
            <a href="{{ url()->previous() }}" class="mb-5 mt-5">
                <i class="bi bi-caret-left-square-fill" style="font-size: 3rem; color: var(--grey)"></i>
            </a>

            <h1 class="text-center" style="color: var(--yellow)">Booking Confirmation</h1>
        </div>

        <h5 class="ms-5 mb-5">
            You are about to book a private <span
                style="text-transform: capitalize; color: var(--yellow)">{{ $field->name }}</span> tutoring session with
        </h5>

        {{-- booking overview --}}
        <div class="d-flex justify-content-between align-items-center ms-5 mb-5" style="width: 60%;">
            <div class="tutor-card">
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
                            <p style="text-transform: capitalize">Expertise : {{ $field->name }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <h2>At</h2>

            <div class="schedule-card"
                style="width: 255px; height: 60px; background-color: var(--white);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px; display: grid; place-content: center">
                <p class="fw-bold mt-3" style="font-size: 1.5rem">
                    {{ $start_time . ':00 - ' . (int) $start_time + 2 . ':00 WIB' }}
                </p>
            </div>
        </div>

        {{-- payment method --}}
        <div class="ms-5 mb-5 d-flex" style="width: 90%;">

            <div class="d-flex justify-content-around align-items-center me-5 payment-method"
            data-price="101000">
                <div style="width: 100px; height: 100px;">
                    <img src="/img/payment/ovo.jpg"
                        style="width: 100%; border-radius: 5px;
                    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.25);">
                </div>
                <h3>Rp. 101.000</h3>
            </div>

            <div class="d-flex justify-content-around align-items-center me-5 payment-method"
            data-price="102500">
                <div style="width: 100px; height: 100px;">
                    <img src="/img/payment/gopay.png"
                        style="width: 100%; border-radius: 5px;
                    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.25);">
                </div>
                <h3>Rp. 102.500</h3>
            </div>

            <div class="d-flex justify-content-around align-items-center me-5 payment-method"
            data-price="100000">
                <div style="width: 100px; height: 100px;">
                    <img src="/img/payment/dana.jpg"
                        style="width: 100%; border-radius: 5px;
                    box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.25);">
                </div>
                <h3>Rp. 100.000</h3>
            </div>

        </div>

        <div class="col-lg-4 ms-5 mb-5">
            <form action="/book/receipt/{{ $tutor->slug }}/{{ $field->id }}/{{ $edulvl->id }}/{{ $date }}/{{ $start_time }}" method="post">
                @csrf
                <input type="hidden" name="price" id="price" value="">

                @error('price')
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        {{ 'Insufficient fund' }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror

                <h5 class="mb-3">Your current fund : Rp. {{ $credit }}</h5>
                <h5 class="mb-3">Discount : <span id="discount">0</span></h5>
                
                <select class="form-select mb-3" name="voucher">
                    <option value="0">No voucher set yet</option>
                </select>
                <button type="submit" class="btn btn-success mb-5 d-flex justify-content-between" style="width: 150px;"> 
                    <span>Confirm</span>
                    <i class="bi bi-caret-right-fill" style="color: var(--white)"></i>
                </button>
                
            </form>
        </div>

    </div>

    <script>
        const price = document.getElementById("price");
        const pMethod = document.querySelectorAll(".payment-method");
        pMethod.forEach(e => {
            e.addEventListener("click", function() {
                pMethod.forEach(e => {
                    e.classList.remove("c-active");
                });
                e.classList.add("c-active");
                price.value = e.dataset.price;
            });
        });
    </script>
@endsection
