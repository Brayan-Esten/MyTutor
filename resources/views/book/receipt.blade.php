@extends('layouts.main')

@section('container')
    <div class="mt-5 d-flex flex-column align-items-center" style="width: 80%; margin:auto;">

        <i class="bi bi-check-circle-fill" style="color: #10CA00; font-size: 3rem"></i>
        <h3 class="text-center fw-bold mb-5" style="color: #10CA00">Booking Successful</h3>

        <div class="rounded d-flex"
            style="width: 55%; background-color: var(--white);
        box-shadow: 0px 0px 4px 4px rgba(0, 0, 0, 0.25);">

            {{-- lhs --}}

            <div class="d-flex flex-column p-5" style="width: 50%;">

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Booking Date</p>
                    <p style="margin-top: -10px; color: var(--black)">
                        <span style="color: var(--yellow)">>></span>
                        {{ date('F jS, Y', strtotime($date)) }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Subject</p>
                    <p style="margin-top: -10px; color: var(--black); text-transform: capitalize;">
                        <span style="color: var(--yellow)">>></span>
                        {{ $field->name . ' - ' . $edulvl->level }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Payment Method</p>
                    <p style="margin-top: -10px; color: var(--black); text-transform: capitalize;">
                        <span style="color: var(--yellow)">>></span>
                        {{ $p_method }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Total</p>
                    <p style="margin-top: -10px; color: var(--black); text-transform: capitalize;">
                        <span style="color: var(--yellow)">>></span>
                        {{ 'IDR ' . $price . 'K' }}
                    </p>
                </div>


            </div>

            <div class="d-flex flex-column p-5" style="width: 50%;">

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Scheduled at</p>
                    <p style="margin-top: -10px; color: var(--black)">
                        <span style="color: var(--yellow)">>></span>
                        {{ $start_time . ':00 - ' . (int) $start_time + 2 . ':00 WIB' }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Tutor</p>
                    <p style="margin-top: -10px; color: var(--black)">
                        <span style="color: var(--yellow)">>></span>
                        {{ $tutor->name }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Fee</p>
                    <p style="margin-top: -10px; color: var(--black); text-transform: capitalize;">
                        <span style="color: var(--yellow)">>></span>
                        {{ 'IDR ' . (int) ($price + $discount) . 'K' }}
                    </p>
                </div>

                <div class="d-flex flex-column fw-bold">
                    <p style="color: var(--black)">Discount</p>
                    <p style="margin-top: -10px; color: var(--black); text-transform: capitalize;">
                        <span style="color: var(--yellow)">>></span>
                        {{ 'IDR ' . $discount . 'K' }}
                    </p>
                </div>

            </div>

        </div>

        <a href="/" class="btn mt-5 mb-5 d-flex justify-content-center fw-bold"
            style="width: 150px; background-color: #10CA00; color: var(--white)">
            <span>CONTINUE</span>
            <i class="bi bi-caret-right-fill" style="color: var(--white)"></i>
        </a>

    </div>
@endsection
