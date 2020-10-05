@extends('layouts.app')


@section('content')
<section class="wpm_title_ber">
   
   <div class="container">
   
       <div class="row">
       
           <div class="col-sm-12">
           
               <h2>Services</h2>
               
               <div class="ber_link text-center">
               
                   <p> <i class="fa fa-angle-double-right"></i> <a href="{{route('home')}}">Home</a> / <a href="{{route('service')}}">Services</a>  <i class="fa fa-angle-double-left"></i> </p>
               
              </div>
           
           </div>
       
       </div>
   
   </div>   

</section>

<section class="service_area">

    <div class="wpm_bg_opacity">

      <div class="container">
   
       <div class="row">
       
           <h2>services</h2>
           
           <h3 class="sub_titel">We give you the best service</h3>

            @foreach($services as $sr)
           <div class="col-sm-3">
               
               <i class="fa fa-lightbulb-o"></i>
           
               <h4>{{$sr->title}}</h4>
               
               <p>{{$sr->description}}</p>
               
               <button type="button" class="btn btn-default btn-lg wpm_batton wpm_read_btn">Read more</button>
           
           </div>
           @endforeach
           
           
           

       
       </div>
   
   </div> 

</section>


<section class="call_us_area">

   <div class="container">
   
       <div class="row">

            @foreach($service_contact as $sc)
           <div class="col-sm-9">
           
                  <h3>Call us today at <b>{{$sc->phone}}</b> or Email us at <a href="#">{{$sc->email}}</a></h3>
           
                   <p>{{$sc->description}}</p>
           
           </div>
           @endforeach
           
           <div class="col-sm-3">
           
               <input type="submit" class="wpm_btn wpm_contact_btn" value="CONTACT US">	
           
           </div>
       
       </div>
   
   </div>

</section>


<section class="wpm_service_area">

      <div class="container">
   
       <div class="row">
       
           <h2>More Services</h2>
           
          <div class="wpm_border center-block"> <i class="fa fa-star-half-o"></i> </div> 
       
            @foreach($service_category as $scate)           
           <div class="col-sm-4 border_bottom">
           
               <i class="fa fa-skyatlas"></i>
               
               <div class="bold_border"></div>
               
               <h3>{{$scate->title}}</h3>
           
           </div>
           @endforeach
       
       </div>

   
   </div>

</section>
@endsection