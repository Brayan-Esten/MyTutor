@extends('layouts.main')

@section('container')

    <div class="d-flex justify-content-around" style="width: 80%; margin: auto; margin-top: 4rem;">
        <div style="width: 40%; min-height: 350px;" class="d-flex flex-column justify-content-around">
            <h1 class="fw-bold">Hello Students!</h1>
            <h5 class="ms-5 mt-3 mb-3">Let us solve your learning difficulties to help you get the best score</h5>
            <p class="ms-5" style="color: var(--grey)">
                For all those that are tired after all the hard work for studying without significant result, we are the best solution you can get. All our features will make sure you will not be dissapointed after trusting our service.
            </p>
        </div>

        <div class="d-flex align-items-center" style="width: 40%;">
            <div style="width: 400px;">
                <img class="rounded" src="/img/home/brand.png" class="logo" style="width: 100%;">
            </div>
        </div>
    </div>

    <div class="all-features-container rounded">
        <div class="features-container">
            <div class="features-image-container">
                <img src="/img/home/calendar.webp" class="features-image" alt="">
            </div>
            <div class="feature-name">
                Flexible Schedule
            </div>
            <div class="feature-name-desc">
                You don't have to worry about the session schedule colliding with your activity. We offer flexible schedule
                slots every day, so you can adapt them to your activities
            </div>

        </div>
        <div class="features-container">
            <div class="features-image-container">
                <img src="/img/home/badge.png" class="features-image" alt="">
            </div>
            <div class="feature-name">
                Membership System
            </div>
            <div class="feature-name-desc">
                Continue to book sessions to earn more and more points to upgrade your membership status. Get special
                discounts and tutor goes to home privilage for each existing membership category
            </div>

        </div>
        <div class="features-container">
            <div class="features-image-container">
                <img src="/img/home/tutor-logo.png" class="features-image" alt="">
            </div>
            <div class="feature-name">
                Private Tutor
            </div>
            <div class="feature-name-desc">
                Private tutor with on demand sessions. You can choose the material that interests you or which requires more
                understanding, so that it will produce more effective and efficient results.
            </div>

        </div>
    </div>

    <br>
    <br>
    
@endsection
