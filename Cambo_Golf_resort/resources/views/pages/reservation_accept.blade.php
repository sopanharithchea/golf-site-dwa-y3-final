@extends('layouts.backend')

@section('admin')

<div class="container-fluid">

        <h2>About Us </h2>
        <table id="userlist" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
            </thead>
            <tbody>

                @foreach($accepted as $item)
                <tr>
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->start_time}}</td>
                    <td>{{$item->end_time}}</td>
                </tr>
                @endforeach
            </tfoot>
        </table>
    </div>
@endsection
  