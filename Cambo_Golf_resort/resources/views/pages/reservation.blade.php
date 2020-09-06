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

    <div class="container">

        <div class="row">



            <div class="col">

                <h3>Reservation Form</h3>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="firstname-res" />
                    <label class="input__label input__label--nao" for="firstname-res">
                        <span class="input__label-content input__label-content--nao">First Name</span>
                    </label>
                    <input class="input__field input__field--nao" type="text" id="lastname-res" />
                    <label class="input__label input__label--nao" for="lastname-res">
                        <span class="input__label-content input__label-content--nao">Last Name</span>
                    </label>
                </span>


                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Email</span>
                    </label>
                </span>

                <span class="input input--nao">
                    <input class="input__field input__field--nao" type="text" id="input-1" />
                    <label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Subject</span>
                    </label>
                </span>

                <form>

                    <textarea class="massage_area wpm_textarea" cols="55" rows="10" placeholder="Massage"> </textarea>

                    <input class="wpm_sub_btn" type="submit" value="Make Reservation">

                </form>



            </div>

        </div>

    </div>

</section>

@endsection
