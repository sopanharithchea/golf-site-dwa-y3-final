@extends('layouts.backend')

@section('admin')

    <div class="container-fluid">
       <h2>Video Categories </h2>
        <table id="userlist" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Categories</th>
                    <th>Category Video</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($catvideo as $row)
                <tr>
                    <td>{{$row->category}}</td>
                    <td>{{$row->category_img}}</td>
                    <td class="text-center" style="width:300px;">
                     <a href="{{route('catvideoBackControl.show',$row->id)}}" class="btn btn-sm btn-primary" >View </a>
                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updateModal" data-id="{{$row->id}}" data-category="{{$row->category}}" data-category_img="{{$row->category_img}}" >Update </a>
                    <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$row->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tfoot>
        </table>
        <button class="btn mt-4" style="background:#006df0; color:white; margin-left:85%;" data-toggle="modal" data-target="#createCategory"><a href="">
          <i class="mdi mdi-plus-circle"  aria-hidden="true"></i></a>Create Category</button>
    </div>


              <!-- create Modal -->
     <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Category</h5>
                </div>
                <div class="modal-body">

                        <form  action ="{{action('catvideoController@store')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}
                         <h6 class="text-danger"> Required size: 350 x 250 pixel</h6>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label" style="margin-top: 10px;">Category:</label>
                                <div class="col-sm-9">
                                <input type="text" name="category" class="form-control" autofocus required>
                                </div>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="category_img"  class="custom-file-input" lang="es">
                                <label class="custom-file-label" for="customFileLang">Image</label>
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
          <div  class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Delete catgory</h5>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to remove category ?</h5><p id="title" style="color:red;"></p>
                </div>
              <form  id="fDelete" action="" method="POST" autocomplete="off">
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
<div  class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update category</h5>
                </div>
                <form action="" method="POST" id="updateForm" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                             <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label" style="margin-top: 10px;">Category:</label>
                                <div class="col-sm-9">
                                <input type="text" id="category" name="category" class="form-control" autofocus required>
                                </div>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="category_img"  class="custom-file-input" id="category_img" lang="es">
                                <input type="hidden" name="backup" value="" id="backup" lang="es">
                                <label class="custom-file-label" for="customFileLang">Image</label>
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
    $('#deleteModal').on('show.bs.modal',function(event){
        var button=$(event.relatedTarget)
        var id =button.data('id')
        var category =button.data('category')
        var modal=$(this)
        modal.find('#title').text(category)
        var url = "{{url('catvideoctr/')}}/"+id;

        $("#fDelete").attr('action',url);

    });

    $('#updateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var category = button.data('category')
            var category_img = button.data('category_img')
            console.log(category_img);

            var modal = $(this)
            modal.find('#category').attr('value',category)
            modal.find('#backup').attr('value',category_img)

            var url = "{{url('catvideoctr')}}/"+id;

            $('#updateForm').attr('action',url);
     });
  </script>


@endsection
