@extends('layouts.app')

@section('content')
<section class="wpm_slider_area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->


        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">
            @foreach($slide as $item)
            <div class="item">
                <img src="{{asset('/img/slideImage/'.$item->imgname)}}" alt="{{$item->desc}}">
                <div class="carousel-caption tp-caption">
                    <h3>{$item->maintext}}</h3>
                </div>
            </div>
            @endforeach

            {{-- <div class="item active">
                <img src="images/slider/01.jpg" alt="...">
                <div class="carousel-caption tp-caption">
                    <h3>We make awesome things</h3>
                </div>
            </div>

            <div class="item">
                <img src="images/slider/02.jpg" alt="...">
                <div class="carousel-caption tp-caption">
                    <h3>We are very clean</h3>
                </div>
            </div>

            <div class="item">
                <img src="images/slider/03.jpg" alt="...">
                <div class="carousel-caption tp-caption">
                    <h3>Fully responsive website</h3>
                </div>
            </div> --}}

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-arrow-circle-left"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>



</section>


<section class="get_start_area">

    <div class="container">

        <div class="row wpm_mobile_center">

            <div class="col-sm-9">

                <h2>We design and develop the best website's for customers!</h2>

            </div>


            <div class="col-sm-3">

                <button type="button" class="btn btn-primary btn-lg active wpm_start_button">GET STARTED NOW</button>

            </div>

        </div>

    </div>

</section>



<section class="features_area">

    <div class="container">

        <div class="row">

            <h2>Features</h2>

            <h5>CHECK OUT SOME OF OUR MAIN CORE FEATURES. REVELANCE IS A VERY POWERFUL THEME PACKED WITH TONS OF
                SHORTCODES.</h5>

            <div class="wpm_border center-block"> <i class="fa fa-star-half-o"></i> </div>

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/08.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/07.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/06.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

        </div>


        <div class="row">

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/05.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/04.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

            <div class="col-sm-4">

                <div class="wpm_img">

                    <img src="images/work/03.jpg" alt="">

                </div>

                <div class="features_text">

                    <h4>Responsive</h4>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard</p>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="wpm_welcome_area">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Welcome To Our Website</h2>

                <h5 class="wpm_sub_title">That why our company exists</h5>

                <div class="wpm_border center-block"> <i class="fa fa-star-half-o"></i> </div>

                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum has been the
                    industry's standard.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard. </p>

                <h5>Get your Free Consultation <a href="#">(888) 123-456-7890</a> Available 24/7 </h5>

            </div>

        </div>

    </div>

</section>


<section class="wpm_our_team_area">

    <div class="wpm_bg_opacity">

        <div class="container">

            <div class="row">

                <h2>Meet our Team</h2>

                <div class="col-sm-3">

                    <div class="count text-center wpm_number">375</div>

                    <div class="team_img">

                        <img src="images/clients/01.jpg" alt="">

                    </div>

                    <div class="team_text_area">

                        <h5>Robat Jacobson</h5>

                        <em>Founder and Manager</em>

                        <p><span>Practice Areas:</span> <br> Corporate and Securities Commercial Lending, Real Estate
                        </p>

                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa-twitter"></i></a>

                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <div class="clearfix"></div>

                        <button type="button" class="btn btn-success wpm_btn">Read More</button>

                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="count text-center wpm_number">333</div>

                    <div class="team_img">

                        <img src="images/clients/02.jpg" alt="">

                    </div>

                    <div class="team_text_area">

                        <h5>Marcos Zoom</h5>

                        <em>Founder and Manager</em>

                        <p><span>Practice Areas:</span> <br> Corporate and Securities Commercial Lending, Real Estate
                        </p>

                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa-twitter"></i></a>

                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <div class="clearfix"></div>

                        <button type="button" class="btn btn-success wpm_btn">Read More</button>

                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="count text-center wpm_number">280</div>

                    <div class="team_img">

                        <img src="images/clients/03.jpg" alt="">

                    </div>

                    <div class="team_text_area">

                        <h5>Alana Morkoni</h5>

                        <em>Founder and Manager</em>

                        <p><span>Practice Areas:</span> <br> Corporate and Securities Commercial Lending, Real Estate
                        </p>

                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa-twitter"></i></a>

                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <div class="clearfix"></div>

                        <button type="button" class="btn btn-success wpm_btn">Read More</button>

                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="count text-center wpm_number">499</div>

                    <div class="team_img">

                        <img src="images/clients/04.jpg" alt="">

                    </div>

                    <div class="team_text_area">

                        <h5>Kiley ferry</h5>

                        <em>Founder and Manager</em>

                        <p><span>Practice Areas:</span> <br> Corporate and Securities Commercial Lending, Real Estate
                        </p>

                        <a href="#"><i class="fa fa-facebook"></i></a>

                        <a href="#"><i class="fa fa-twitter"></i></a>

                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <div class="clearfix"></div>

                        <button type="button" class="btn btn-success wpm_btn">Read More</button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="wpm_portfolio_area">

    <div class="container">

        <h2>Portfolio Areas</h2>

        <div class="wpm_border center-block"> <i class="fa fa-star-half-o"></i> </div>

        <div class="row">

            <div class="col-sm-4">

                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/work/01.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>


            <div class="col-sm-4">

                <div class="view view-tenth">
                    <img src="images/work/02.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>


            <div class="col-sm-4">


                <div class="view view-tenth">
                    <img src="images/work/03.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>


        </div>


        <div class="row">

            <div class="col-sm-4">


                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/work/04.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>


            <div class="col-sm-4">

                <div class="view view-tenth">
                    <img src="images/work/05.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>


            <div class="col-sm-4">


                <div class="view view-tenth">
                    <img src="images/work/06.jpg" />
                    <div class="mask">
                        <h2>Hover Style</h2>
                        <p>A wonderful serenity has taken possession of my entire soul,its looks very nice.</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

            </div>

        </div>


    </div>

</section>


<section class="wpm_blog_area">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <h2>See Video</h2>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sXtekwuT8R0"></iframe>
                </div>

            </div>

            <div class="col-sm-6">

                <h2>Recent Blogs</h2>

                <div id="wpm2_carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#wpm2_carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#wpm2_carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#wpm2_carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">

                            <div class="wpm_slide_01">

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type.Lorem Ipsum is simply dummy text.</p>

                                <img src="images/corner_testimonial.png" alt="">

                            </div>


                            <div class="wpm_slide_img">

                                <img src="images/clients/01.jpg" alt="">

                            </div>

                            <div class="name">

                                <a href="#">Monika Sing</a>

                                <p>
                                    FIFO Themes

                                </p>

                            </div>


                            <div class="carousel-caption">

                            </div>

                        </div>



                        <div class="item">

                            <div class="item active">

                                <div class="wpm_slide_01">

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type.Lorem Ipsum is simply dummy text.</p>

                                    <img src="images/corner_testimonial.png" alt="">

                                </div>


                                <div class="wpm_slide_img">

                                    <img src="images/clients/02.jpg" alt="">

                                </div>

                                <div class="name">

                                    <a href="#">Monika Sing</a>

                                    <p>
                                        FIFO Themes

                                    </p>

                                </div>


                                <div class="carousel-caption">

                                </div>

                            </div>


                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>


                        <div class="item">

                            <div class="item active">

                                <div class="wpm_slide_01">

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type.Lorem Ipsum is simply dummy text.</p>

                                    <img src="images/corner_testimonial.png" alt="">

                                </div>


                                <div class="wpm_slide_img">

                                    <img src="images/clients/03.jpg" alt="">

                                </div>

                                <div class="name">

                                    <a href="#">Monika Sing</a>

                                    <p>
                                        FIFO Themes

                                    </p>

                                </div>


                                <div class="carousel-caption">

                                </div>

                            </div>


                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>


                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


{{-- Old content --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}
@endsection
