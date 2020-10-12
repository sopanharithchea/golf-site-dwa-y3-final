@extends('layouts.backend')

@section('admin')

<div class="container-fluid">

        <h2>Career</h2>
        <table id="userlist" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Sector</th>
                    <th>Position</th>
                    <th>Open Post</th>
                    <th>Location</th>
                    <th>Deadline</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($career as $item)
                <tr>
                    <td>{{$item->sector}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->open_post}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->deadline}}</td>
                    <td>{{$item->description}}</td>

                    <td>
                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#careerUpdateModal" data-id="{{$item->id}}" data-name="{{$item->name}}" data-position="{{$item->position}}" data-open_post="{{$item->open_post}}" data-deadline="{{$item->deadline}}" data-location="{{$item->location}}" data-sector="{{$item->sector}}" data-description="{{$item->description}}"  >Update </a>
                    <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#careerDeleteModal" data-id="{{$item->id}}" data-name="{{$item->name}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tfoot>
        </table>
        <button class="btn mt-4 bg-gradient-primary text-white" style="margin-left:85%;" data-toggle="modal" data-target="#careerCreateModal"><a href=""><i class="mdi mdi-plus-circle"  aria-hidden="true"></i></a>Create</button>
    </div>

    <!-- create Modal -->
    <div class="modal fade" id="careerCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                </div>
                <div class="modal-body">
                        <form  action ="{{action('CareerController@store')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="form-group row">
                            <label for="inputsector" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Sector:</label>
                                <div class="col-sm-9">
                                <input type="text" name="sector" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputposition" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Position:</label>
                                <div class="col-sm-9">
                                <input type="text" name="position" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputopen_post" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Open Post:</label>
                                <div class="col-sm-9">
                                <input type="text" name="open_post" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputlocation" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Location:</label>
                                <div class="col-sm-9">
                                <input type="text" name="location" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputdeadline" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Deadline:</label>
                                <div class="col-sm-9">
                                <input type="text" name="deadline" class="form-control" required>
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
<div  class="modal fade" id="careerDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to remove career ?</h5><p id="title" style="color:red;"></p>
                </div>
            <form  id="careerFDelete" action="" method="POST" autocomplete="off">
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
<div  class="modal fade" id="careerUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update career image</h5>
                </div>
                <form action="" method="POST" id="careerUpdateForm" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputsector" class="col-sm-3 col-form-label" style="margin-top: 10px;">Sector:</label>
                                <div class="col-sm-9">
                                    <input type="text" value="" class="form-control"  name="sector" id="sector"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputposition" class="col-sm-3 "  style="margin-top: 10px;" >Position:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="position" id="position"  required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputopen_post" class="col-sm-3 "  style="margin-top: 10px;" >Open Post:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="open_post" id="open_post"  required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputlocation" class="col-sm-3 "  style="margin-top: 10px;" >Location:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="location" id="location"  required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputdeadline" class="col-sm-3 "  style="margin-top: 10px;" >Deadline:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="deadline" id="deadline"  required>
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
    $('#careerDeleteModal').on('show.bs.modal',function(event){
                var button=$(event.relatedTarget)
                var id =button.data('id')
                var name =button.data('sector')
                var name =button.data('position')
                var name =button.data('open_post')
                var name =button.data('location')
                var name =button.data('deadline')
                var name =button.data('desctiption')
                var modal=$(this)
                var url = "{{url('career/')}}/"+id;
                $("#careerFDelete").attr('action',url);
    });

    $('#careerUpdateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var sector = button.data('sector')
            var position = button.data('position')
            var open_post = button.data('open_post')
            var location = button.data('location')
            var deadline = button.data('deadline')
            var description = button.data('description')


            var modal = $(this)
            modal.find('#sector').attr('value',sector)
            modal.find('#position').attr('value',position)
            modal.find('#open_post').attr('value',open_post)
            modal.find('#location').attr('value',location)
            modal.find('#deadline').attr('value',deadline)
            modal.find('#description').attr('value',description)
            var url = "{{url('career')}}/"+id;
            $('#careerUpdateForm').attr('action',url);
    });
</script>
@endsection
