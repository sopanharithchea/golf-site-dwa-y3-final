@extends('layouts.app')
@section('content')
<section class="wpm_title_ber">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>About Us</h2>

                <div class="ber_link text-center">

                    <p> <i class="fa fa-angle-double-right"></i> <a href="index.html">Home</a> / <a
                            href="about.html">About Us</a> <i class="fa fa-angle-double-left"></i> </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="wpm_our_team_area">

    <div class="wpm_bg_opacity">

        <div class="container">

            <div class="row">

                <h2>Meet our Team</h2>
                @foreach($about as $item)
                <div class="col-sm-3">
                    <div class="team_text_area">
                        
                        <h5>{{$item->name}}</h5>

                        <em>{{$item->position}}</em>

                        <p>{{$item->description}}</p>

                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa-twitter"></i></a>

                        <a href="#"><i class="fa fa-google-plus"></i></a>

                        <button type="button" class="btn btn-success wpm_btn">Read More</button>

                    </div>

                </div>
                @endforeach
            </div>

        </div>

    </div>

</section>
@endsection
