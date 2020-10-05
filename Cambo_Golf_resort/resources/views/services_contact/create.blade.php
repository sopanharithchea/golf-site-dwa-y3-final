@extends('layouts.backend')

@section('admin')

<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Create Contact
				<a href="{{url('services_contact/index')}}"class="btn btn-primary-outline btn-oval btn-sm mx-left">
                    <i class="fa fa-reply"></i> Back
                </a>
			</p>
		</div>
	</div>
    <hr>
	<div class="card-block">
		<div class="row">
            <div class="col-sm-8">
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
                <form action="{{url('services_contact/save')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-8">
                                {{csrf_field()}}
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4">Phone<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="phone" name="phone" 
                                        value="{{old('phone')}}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4">Email<span class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" 
                                        value="{{old('email')}}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-4">Description</label>
                                <div class="col-sm-8">
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <!--  -->
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-3">&nbsp;</label>
                                <div class="col-sm-9">
                                    <button class="btn btn-primary btn-oval">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
	</div>
</div>

@endsection

