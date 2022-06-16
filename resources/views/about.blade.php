@extends('layouts.main')

@section('container')
    <h1 class="p-3 text-center" style="font-size : 50pt; margin-bottom : 30px;">MyTutor</h1>

    <!-- ini buat description nya -->
    <div class="rounded-5"
        style="height : 500px; background-color: #0c0434; padding:50px;border-style:solid ;border-width:10px;border-color:gray;">
        <div class ="row">
            <h1 class="text-center text-light" style="padding-bottom:50px">Description</h2>
                <div class="text-light col-md-6 rounded-4 " style="padding:15px; border-style:solid ;border-width:6px;">
                    <h5 style="text-align : justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MyTutor is an application
                        that offer a service to order private tutor.
                        We develop this application in order to help students improve their knowledge of specific subjects.
                        With MyTutor, you will be able to study whenever and wherever you are because our system provide
                        many schedule
                        that you can choose and adjust, also with experienced tutor that will help you study and answer all
                        of your question without any excuse.
                    </h5>
                </div>
                <div class="text-light col-md-6" style="display:flex;justify-content:center;align-items:center;">
                    <img src="{{ asset('img/mytutor.png') }}" alt="" style="height:130px;">
                </div>
        </div>

    </div>


    <br><br><br><br>

    <!-- ini buat meet the foundernya -->
    <!-- NOTE ! nanti kalo masukin img bryan hanuga namain nya bryan.jpg  -->

    <div class="rounded-5"
        style="background-color:var(--grey);height : 700px; border-color: #3A3F47; padding:50px; border-style:solid ;border-width:6px;">
        <div class ="row">
            <h1 class="text-center text-light" style="padding-bottom:50px">Meet the Founder</h2>
                <div class="text-dark col-md-4 rounded-4 column"
                    style="background-color:var(--white);padding:25px; border-style:solid ;border-width:4px;">
                    <div style="display:flex; justify-content:center; ">
                        <img src="{{ asset('img/Ekin.jpg') }}" alt=""
                            style="height:250px; width:200px;border-style: double ;border-width:4px;" class="center-block">
                    </div>
                    <br>
                    <div style="display:flex;flex-direction:column;" class="text-center">

                        <h6>
                            Ekin Tanuwijaya
                        </h6>
                        <h6>
                            2440018444
                        </h6>
                        <h6>
                            Bina Nusantara University
                        </h6>
                    </div>
                </div>
                <div class="text-dark col-md-4 rounded-4 column"
                    style="background-color:var(--white);padding:25px; border-style:solid ;border-width:4px;">
                    <div style="display:flex; justify-content:center;">
                        <img src="{{ asset('img/bryan.jpg') }}" alt=""
                            style="height:250px; width:200px;border-style: double ;border-width:4px;" class="center-block">
                    </div>
                    <br>
                    <div style="display:flex;flex-direction:column;" class="text-center">

                        <h6>
                            Bryan Hanuga
                        </h6>
                        <h6>
                            2440036724
                        </h6>
                        <h6>
                            Bina Nusantara University
                        </h6>
                    </div>
                </div>
                <div class="text-dark col-md-4 rounded-4 column"
                    style="background-color:var(--white);padding:25px; border-style:solid ;border-width:4px;">
                    <div style="display:flex; justify-content:center;">
                        <img src="{{ asset('img/brayan.jpg') }}" alt=""
                            style="height:250px; width:200px;border-style: double ;border-width:4px;" class="center-block">
                    </div>
                    <br>
                    <div style="display:flex;flex-direction:column;" class="text-center">

                        <h6>
                            Brayan Esten
                        </h6>
                        <h6>
                            2440029454
                        </h6>
                        <h6>
                            Bina Nusantara University
                        </h6>
                    </div>
                </div>
        </div>

    </div>

    <br><br><br><br>

    <div class="rounded-5"
        style="height : 550px; background-color: #3A3F47; padding:50px;border-style:solid ;border-width:10px;border-color:gray;">
        <div class ="row">
            <h1 class="text-center text-light" style="padding-bottom:50px">Contact Us</h2>
                <div class="text-center text-light" style="padding-left: 300px;padding-right:300px;">

                    <h5>
                        Have any question? Need a help? If you can't find what you're looking for, we'd be happy to help
                        you.
                        Please feel free to send us an email or you can contact us below!
                    </h5>
                </div>
                <br><br><br><br><br><br>
                <div
                    style="text-decoration:none; display:flex; align-items:center; justify-content:space-between;padding-left:250px;padding-right:200px">
                    <div>

                        <!-- facebook -->
                        <a href="https://www.facebook.com/" class="text-light" style="margin:20px;">
                            <div style="display:flex; align-items:center;">

                                <div style="padding-right:10px; display:flex; align-items;center;justify-content:center;">
                                    <img src="{{ asset('img/socmed/facebook.png') }}" alt="" style="height:60px;">
                                </div>
                                <div>
                                    MyTutor
                                </div>
                            </div>
                        </a>
                        <!-- ig -->
                        <a href="https://www.instagram.com/" class="text-light">
                            <div style="display:flex; align-items:center;">

                                <div style="padding-right:10px; display:flex; align-items;center;justify-content:center;">
                                    <img src="{{ asset('img/socmed/instagram.png') }}" alt=""
                                        style="height:60px;">
                                </div>
                                <div>
                                    MyTutor
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>

                        <!-- whatsapp -->
                        <div class="text-light"">
                            <div style="display:flex; align-items:center;">

                                <div style="padding-right:10px; display:flex; align-items;center;justify-content:center;">
                                    <img src="{{ asset('img/socmed/whatsapp.png') }}" alt="" style="height:80px;">
                                </div>
                                <div>
                                    +62 882 0084 9004
                                </div>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="text-light" style="padding-top:20px;">
                            <div style="display:flex; align-items:center;">

                                <div style="padding-right:5px; display:flex; align-items;center;justify-content:center;">
                                    <img src="{{ asset('img/socmed/gmail.png') }}" alt="" style="height:50px;">
                                </div>
                                <div>
                                    MyTutor.company@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>

    </div>
@endsection
