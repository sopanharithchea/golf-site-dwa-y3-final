@extends('layouts.backend')

@section('admin')

<div class="container-fluid">

        <h2>About Us </h2>
        <table id="userlist" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($about as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->description}}</td>

                    <td>
                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#aboutUpdateModal" data-id="{{$item->id}}" data-name="{{$item->name}}" data-position="{{$item->position}}" data-description="{{$item->description}}"  >Update </a>
                    <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#aboutDeleteModal" data-id="{{$item->id}}" data-name="{{$item->name}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tfoot>
        </table>
        <button class="btn mt-4 bg-gradient-primary text-white" style="margin-left:85%;" data-toggle="modal" data-target="#aboutCreateModal"><a href=""><i class="mdi mdi-plus-circle"  aria-hidden="true"></i></a>Create</button>
    </div>

    <!-- create Modal -->
    <div class="modal fade" id="aboutCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                </div>
                <div class="modal-body">
                        <form  action ="{{action('AboutController@store')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="inputname" class="col-sm-3 col-form-label" style="margin-top: 10px;">Name:</label>
                                <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputposition" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Position:</label>
                                <div class="col-sm-9">
                                <input type="text" name="position" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputdescription" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Description:</label>
                                <div class="col-sm-9">
                                <input type="text" name="description" class="form-control" required>
                                </div>
                            </div>


                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </div>
            </form>
            </div>
            </div>
        </div>


<!-- Delete Modal -->
<div  class="modal fade" id="aboutDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to remove about ?</h5><p id="title" style="color:red;"></p>
                </div>
            <form  id="aboutFDelete" action="" method="POST" autocomplete="off">
                @csrf
                @method('DELETE')

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" style="font-width: 600px;"><span class="mdi mdi-close-circle" ></span> Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary" style="font-width: 600px;"><span class="mdi  mdi-checkbox-marked-circle-outline"></span> OK</button>
                </div>
            </form>
            </div>
            </div>
        </div>
<!-- Update Modal -->
<div  class="modal fade" id="aboutUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update about image</h5>
                </div>
                <form action="" method="POST" id="aboutUpdateForm" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-3 col-form-label" style="margin-top: 10px;">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" value="" class="form-control"  name="name" id="name"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputposition" class="col-sm-3 "  style="margin-top: 10px;" >Position:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="position" id="position"  required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputdescription" class="col-sm-3 "  style="margin-top: 10px;" >Description:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="description" id="description"  required>
                                    </div>
                            </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" style="font-width: 600px;"><span class="mdi mdi-close-circle" ></span> Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary" style="font-width: 600px;"><span class="mdi mdi-restore"></span> Update</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


<script>
    $('#aboutDeleteModal').on('show.bs.modal',function(event){
                var button=$(event.relatedTarget)
                var id =button.data('id')
                var name =button.data('name')
                var name =button.data('position')
                var name =button.data('desctiption')
                var modal=$(this)
                var url = "{{url('about/')}}/"+id;
                $("#aboutFDelete").attr('action',url);
    });

    $('#aboutUpdateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var position = button.data('position')
            var description = button.data('description')


            var modal = $(this)
            modal.find('#name').attr('value',name)
            modal.find('#position').attr('value',position)
            modal.find('#description').attr('value',description)
            var url = "{{url('about')}}/"+id;
            $('#aboutUpdateForm').attr('action',url);
    });
</script>
@endsection
