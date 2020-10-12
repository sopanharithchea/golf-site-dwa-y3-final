@extends('layouts.app')
@section('content')
<section class="wpm_title_ber">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Career</h2>

                <div class="ber_link text-center">

                    <p> <i class="fa fa-angle-double-right"></i> <a href="{{ route('home') }}">Home</a> / <a
                            href="{{ route('news')}}">Career</a> <i class="fa fa-angle-double-left"></i> </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="main_blog_area">

    <div class="container">

        <div class="row">
            @foreach($career as $item)
            <div class="col-sm-6">

                <div class="blog_link_area">

                    <h3><a href="#">{{$item->position}}</a></h3>

                    <a href="#" class="date">{{$item->deadline}}</a>

                    <span>{{$item->location}}</span>

                    <span>{{$item->open_post}}</span>

                    <span>{{$item->sector}}</span>
                    

                </div>

                <p class="para">{{$item->description}}</p>

                <img class="border_img" src="images/horizontal_border.png" alt="">

            </div>
            @endforeach
        </div>

    </div>

</section>
@endsection
