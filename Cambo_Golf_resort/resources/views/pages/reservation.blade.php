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
                    <div class="input input--nao">
                        <div>
                            <label class="input__label-content input__label-content--nao" for="firstName">First
                                Name</label>
                            <input class="input__field input__field--nao" type="text" name="firstName" id="firstName">
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="lastName">Last
                                Name</label>
                            <input class="input__field input__field--nao" type="text" name="lastName" id="lastName">
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="email">Email</label>
                            <input class="input__field input__field--nao" type="text" name="email" id="email">
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="startTime">Starting
                                Time</label>
                            <input class="input__field input__field--nao" type="text" name="startTime" id="startTime">
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="endTime">Ending
                                Time</label>
                            <input class="input__field input__field--nao" type="text" name="endTime" id="endTime">
                        </div>
                    </div>
                    <br><br><br>
                    <input class="wpm_sub_btn" type="submit" value="Make Reservation">

                </form>



            </div>

        </div>

    </div>

</section>

@endsection
