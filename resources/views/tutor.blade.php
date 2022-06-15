@extends('layouts.main')

@section('container')

<!-- Design Tutor CARD !! -->

<!-- Tutor CARD -->
<div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 " > 
                    <!-- bagian header warna dan profile -->
                    <div class="rounded-top " style="height:80px;width:300px;background: #D5DF0D;background: -webkit-linear-gradient(top, #D5DF0D, #F5B911);background: -moz-linear-gradient(top, #D5DF0D, #F5B911);background: linear-gradient(to bottom, #D5DF0D, #F5B911);">

                        <img src="{{ asset('img/profile.png')}}" class="rounded-circle" alt="" style="z-index:10;position:absolute;margin-left:105px;margin-top:40px;height:90px;width:90px;">
                        <div  class="rounded-circle" style="position:absolute;margin-left:105px;margin-top:40px;background-color:white; height:90px; width:90px; opacity:100%;">
    
                        </div>
                    </div>
                    
                    <!-- bagian bawah card (putihnya) -->
                    <div class="rounded-bottom"style="padding:20px;width:300px;height:250px; border-style:outset;border-width:0 1px 2px 1px;">
                        <!-- ini buat namanya -->
                        <div style="display:flex; flex-direction:column;align-items:center;position:relative; padding-top:50px;height:110px;">
                            <div>
                                <b>ini isi nama tutor</b> 
                            </div>
                            <div>
                                ini isi institusi
                            </div>
                        </div>

                        <div>
                            <img src="{{ asset('img/star.png')}}" alt="" style="height:20px;">
                            <span> masuking rating</span>
                            <div>
                                Expertise : blablabla
                            </div>
                        </div>
                        <br>

                        <!-- buat continue -->
                        <a href="">
                        <div class="rounded-3" style="background-color:#3D96FF;display:flex;justify-content:center;align-items:center;height:35px;">
                            <div class="text-light">
                                 <span>
                                     Continue
                                 </span> 
                                 <span style="position:relative; border: solid white;  border-width: 0 3px 3px 0;  display: inline-block;  padding: 3px;transform: rotate(-45deg);  -webkit-transform: rotate(-45deg);">

                                 </span>
                            </div>  
                        </div>
                        </a>
                        
                        
                    </div>

            </div>
           
            
        </div>

        <div style="width: 300px; height: 300px; background-color: var(--yellow);">
            hello world
        </div>
       

        
</div>
 @endsection