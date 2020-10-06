@extends('layouts.app')

@section('content')
<section class="wpm_title_ber">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Create a reservation</h2>

            </div>

        </div>

    </div>

</section>



<section class="wpm_contact_area">

    <div class="container w-50">

        <div class="row">



            <div class="col">

                <h3>Reservation Form</h3>

                <form>

                    <textarea class="massage_area wpm_textarea" cols="55" rows="10" placeholder="Massage"> </textarea>

                    <input class="wpm_sub_btn" type="submit" value="Make Reservation">

                </form>



            </div>

        </div>

    </div>

</section>

@endsection
