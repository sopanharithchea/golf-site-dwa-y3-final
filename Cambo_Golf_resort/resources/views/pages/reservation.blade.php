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
        @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            {{session('success')}}
                        </div>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div>
                            {{session('error')}}
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="col">

                <h3>Reservation Form</h3>

                <form action="{{url('reservation/save')}}" method="POST">
                {{ csrf_field() }}
                    <div class="input input--nao">
                        <div>
                            <label class="input__label-content input__label-content--nao" for="firstName">First
                                Name</label>
                            <input class="input__field input__field--nao" type="text" name="firstName" id="firstName" placeholder="Enter First Name" auto-focus required>
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="lastName">Last
                                Name</label>
                            <input class="input__field input__field--nao" type="text" name="lastName" id="lastName"  placeholder="Enter Last Name" required>
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="email" >Email</label>
                            <input class="input__field input__field--nao" type="email" name="email" id="email" placeholder="Enter Email" required>
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="date" >Date</label>
                            <input class="input__field input__field--nao" type="date" name="date" id="date" placeholder="Enter Date" required>
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="startTime" >Starting
                                Time</label>
                            <input class="input__field input__field--nao" type="text" name="startTime" id="startTime" placeholder="Enter Starting Time" required>
                        </div>
                        <div>
                            <label class="input__label-content input__label-content--nao" for="endTime" >Ending
                                Time</label>
                            <input class="input__field input__field--nao" type="text" name="endTime" id="endTime" placeholder="Enter Ending Time" required>
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
