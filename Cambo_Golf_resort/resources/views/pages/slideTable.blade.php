{{--  @extends('layouts.backend')

@section('admin')


@endsection  --}}
@extends('layouts.backend')

@section('admin')

<div class="container-fluid">

        <h2>Slides list </h2>
        <table id="userlist" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-gradient-primary text-white">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($slide as $item)
                <tr>
                    <td>{{$item->maintext}}</td>
                    <td>{{$item->desc}}</td>
                    <td>{{$item->imgname}}</td>

                    <td>
                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#slideUpdateModal" data-id="{{$item->id}}" data-maintext="{{$item->maintext}}" data-desc="{{$item->desc}}" data-imgname="{{$item->imgname}}"  >Update </a>
                    <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#slideDeleteModal" data-id="{{$item->id}}" data-title="{{$item->maintext}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tfoot>
        </table>
        <button class="btn mt-4 bg-gradient-primary text-white" style="margin-left:85%;" data-toggle="modal" data-target="#slideCreateModal"><a href=""><i class="mdi mdi-plus-circle"  aria-hidden="true"></i></a>Create new slide</button>
    </div>

    <!-- create Modal -->
    <div class="modal fade" id="slideCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New slide</h5>
                </div>
                <div class="modal-body">
                        <form  action ="{{action('slideController@store')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="inputmaintext" class="col-sm-3 col-form-label" style="margin-top: 10px;">Tittle:</label>
                                <div class="col-sm-9">
                                <input type="text" name="maintext" class="form-control" autofocus required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label" style="margin-top: 10px; ">Description:</label>
                                <div class="col-sm-9">
                                <input type="text" name="desc" class="form-control" required>
                                </div>
                            </div>
                            <div class="custom-file">
                            <input type="file" name="imgname"   class="custom-file-input" id="customFileLang" lang="in">
                            <label class="custom-file-label" for="customFileLang">Image </label>
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
<div  class="modal fade" id="slideDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Delete slide</h5>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to remove Slide ?</h5><p id="title" style="color:red;"></p>
                </div>
            <form  id="slideFDelete" action="" method="POST" autocomplete="off">
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
<div  class="modal fade" id="slideUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update slide image</h5>
                </div>
                <form action="" method="POST" id="slideUpdateForm" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputmaintext" class="col-sm-3 col-form-label" style="margin-top: 10px;">Tittle:</label>
                                <div class="col-sm-9">
                                    <input type="text" value="" class="form-control"  name="maintext" id="maintext"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="inputdesc" class="col-sm-3 "  style="margin-top: 10px;" >Description:</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control"  name="desc" id="desc"  required>
                                    </div>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="imgname"  class="custom-file-input" id="imgname" lang="es">
                                <input type="hidden" name="backup" value=""  id="backup" lang="es">
                                <label class="custom-file-label" for="customFileLang">Image</label>
                            </div>

                            <div class="container-fluid">

                                <!-- Radio Buttons -->
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label">1</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label">2</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                <label class="form-check-label">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                <label class="form-check-label">4</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                <label class="form-check-label">5</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                <label class="form-check-label">6</label>
                                </div>

                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                <label class="form-check-label">7</label>
                                </div>
                            </div>
                            <br>
                                <div class="form-check form-check-inline ml-auto">
                                <input class="form-check-input" type="Checkbox" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                <label class="form-check-label">Disable</label>
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
    $('#slideDeleteModal').on('show.bs.modal',function(event){
                var button=$(event.relatedTarget)
                var id =button.data('id')
                var name =button.data('maintext')
                var name =button.data('desc')
                var modal=$(this)
                var url = "{{url('slide/')}}/"+id;
                $("#slideFDelete").attr('action',url);
    });

    $('#slideUpdateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var maintext = button.data('maintext')
            var desc = button.data('desc')
            var imgname = button.data('imgname')


            var modal = $(this)
            modal.find('#maintext').attr('value',maintext)
            modal.find('#desc').attr('value',desc)
            modal.find('#backup').attr('value',imgname)
            var url = "{{url('slide')}}/"+id;
            $('#slideUpdateForm').attr('action',url);
    });
</script>
@endsection
