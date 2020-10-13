@extends('layouts.backend')
@section('admin')

<div class="card card-gray">
  <div class="card-header">
    <div class="header-block">
      <p class="title"> Service Category
        <a href="{{url('services_category/create')}}"class="btn btn-primary-outline btn-oval btn-sm mx-left">
            <i class="fa fa-plus-circle"></i> Create
        </a>
      </p>
    </div>
  </div>
    <hr>
  <div class="card-block">
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
    <div class="table-flip-scroll">
      
      <table class="table table-sm table-bordered table-hover flip-content">
        <thead class="flip-header">
          <tr>
                <th>#</th>
                <th>Title</th>
                
                <th>Actions</th>
          </tr>
        </thead>
        <tbody>      
            <?php
                $pagex = @$_GET['page'];
                if(!$pagex)
                    $pagex = 1;
                $i = 22 * ($pagex - 1) + 1;
            ?>
            @foreach($services_category as $sr)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        <!-- <a href="{{url('services/detail/'.$sr->id)}}"> -->
                        {{$sr->title}}
                        <!-- </a> -->
                    </td>
                    
                    
                    <td>
                        <a href="{{url('services_category/delete?id='.$sr->id)}}" title="Delete" class='text-danger'
                            onclick="return confirm('You want to delete?')">
                            <i class="fa fa-trash"></i>
                        </a>&nbsp;
                        <a href="{{url('services_category/edit/'.$sr->id)}}" class="text-success" title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{$services_category  ->links()}}
    </div>
    
  </div>
</div>

@endsection