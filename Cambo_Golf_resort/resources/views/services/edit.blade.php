@extends('layouts.backend')
@section('admin')




<div class="card card-gray">
	<div class="card-header">
		<div class="header-block">
			<p class="title"> Edit Service
				<a href="{{url('services/index')}}"class="btn btn-primary-outline btn-oval btn-sm mx-left">
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
                <form action="{{url('services/update')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$r->id}}">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3">Title <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" 
                                value="{{$r->title}}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3"> Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$r->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">&nbsp;</label>
                        <div class="col-sm-9">
                            <button class="btn btn-primary btn-oval">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>

@endsection