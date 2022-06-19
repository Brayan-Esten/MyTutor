@extends('layouts.main')

@section('container')
    <div class="content-container mt-5 ms-5">
        <div class="non-sidebar-container">
            <div class="upgrade-your-membership fw-bold mb-3">
                Upgrade Your Membership
            </div>
            <div class="why-upgrade mb-3">
                Why upgrade your membership ?
            </div>
            <div class="why-upgrade-desc">
                Upgrading your account to certain tier will allow you to get special
                privilages, such as exclusive discounts, tutor goes to home feature, and
                many more! Learn more below.
            </div>

            <div class="card-container" style="margin-top: 70px">

                {{-- silver --}}
                <div class="card">

                    <div class="silver">
                        <img src="img/membership/silver.svg" alt="">
                        <div class="silver-text">Silver</div>
                    </div>
                    <div class="silver-price-container">
                        <p class="price">FREE</p>
                    </div>
                    <div class="silver-benefit-container">
                        <div class="benefit p-2">
                            <ul>
                                <li class="list">Occasional Special Event Discount</li>
                            </ul>
                        </div>
                        <button id="learnmore-silver">Upgrade</button>
                    </div>
                </div>


                {{-- gold --}}
                <div class="card">
                    <div class="gold">
                        <img src="img/membership/gold.svg" alt="">
                        <div class="gold-text">Gold</div>
                    </div>
                    <div class="gold-price-container">
                        <p class="price">IDR 250K</p>

                    </div>
                    <div class="gold-benefit-container">
                        <div class="benefit p-2">
                            <ul>
                                <li class="list">Occasional Special Event Discount</li>
                                <li class="list">Exclusive Monthly Discount</li>
                                <li class="list">Unlock Tutor Goes to Home Feature (5 session/month)</li>
                            </ul>
                        </div>
                        <button id="learnmore-gold">Upgrade</button>
                    </div>
                </div>


                {{-- diamond --}}
                <div class="card">
                    <div class="diamond">
                        <img src="img/membership/diamond.svg" alt="">
                        <div class="diamond-text">Diamond</div>
                    </div>
                    <div class="diamond-price-container">
                        <p class="price">IDR 500K</p>

                    </div>
                    <div class="diamond-benefit-container">
                        <div class="benefit p-2">
                            <ul>
                                <li class="list">Prioritized User</li>
                                <li class="list">Occasional Special Event Discount</li>
                                <li class="list">Exclusive Weekly Discount</li>
                                <li class="list">Unlock Tutor Goes to Home Feature (10 session/month)</li>
                            </ul>
                        </div>
                        <button id="learnmore-diamond">Upgrade</button>
                    </div>
                </div>

            </div>

        </div>
        <div class="sidebar-container"></div>
    </div>
@endsection
