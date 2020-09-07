@extends('layouts.app')
@section('content')
<section class="wpm_title_ber">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Contact Us</h2>

                <div class="ber_link text-center">

                    <p> <i class="fa fa-angle-double-right"></i> <a href="index.html">Home</a> / <a
                            href="contact.html">Contact Us </a> <i class="fa fa-angle-double-left"></i> </p>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="wpm_contact_area">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <div class="wpm_address">

                    <h3>We'd Love to Hear From You</h3>

                    <p>Get in touch using the contact details below:</p>
                    <p>Address Line 1,</p>
                    <p>Address Line 2,</p>
                    <p>Cox Bazer , Bangladesh</p>
                    <p>Phone: 123-456-7899</p>
                    <p>Fx: 123-456-7899</p>
                    <p>Email:<a href="#">info@Html5Load.com</a></p>

                </div>

                <div class="embed-responsive embed-responsive-16by9 wpm_maph ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14709.505133882521!2d89.53475469999998!3d22.825564050000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9ab96e0f8897%3A0x9d77b9c214396364!2sSonadanga%2C+Khulna!5e0!3m2!1sen!2sbd!4v1429172770401"
                        width="730" height="370" frameborder="0" style="border:0"></iframe>

                </div>

            </div>

            <div class="col-sm-6">

                <h3>Contact Form</h3>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Name</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                        preserveAspectRatio="none">
                        <path
                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" />
                    </svg>
                </span>


                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Email</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                        preserveAspectRatio="none">
                        <path
                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" />
                    </svg>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Subject</span>
                    </label>
                    <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60"
                        preserveAspectRatio="none">
                        <path
                            d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0" />
                    </svg>
                </span>

                <form>

                    <textarea class="massage_area wpm_textarea" cols="55" rows="10" placeholder="Massage"> </textarea>

                    <input class="wpm_sub_btn" type="submit" value="SEND MESSAGE">

                </form>



            </div>

        </div>

    </div>

</section>
@endsection
