
@extends('layouts.backend')

@section('admin')

<h4 class="text-danger"> Required size: 720 x 480 pixel </h4>
    <div class="container-fluid">

            <table id="example" class="display" style="width:100%">
        <thead class="bg-primary text-white">
                <tr>

                    <th>Image</th>
                    <th>Category name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($image->image as $item )
            <tr>

                <td>{{$item->image}}</td>
                <td>{{$item->category->category}}</td>

                <td style="width:170px" class="text-center">
                <a href="" aria-hidden="true" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#imageViewModal" data-id={{$item->id}} data-image={{$item->image}} >View</a>
                <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#imageDeleteModal" data-id="{{$item->id}}" data-image="{{$item->image}}">Delete</a>

                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
    <br>
        <a  href="{{url('categoryctr')}}" style="display:inline;" aria-hidden="true" class="btn btn-danger" >Back</a>
        <a href="" aria-hidden="true" class="btn btn-primary" style="background:#006df0; color:white; margin-left:80%; margin-top:20px !important; display:inline;" data-toggle="modal" data-target="#uploadGarllery">Upload image</a>

    <br><br>
    </div>







    <!-- create Modal -->
    <div class="modal fade" id="uploadGarllery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Garllery</h5>
            </div>
            <div class="modal-body">
                    <form  action ="{{action('categoryBackendController@store')}}" method="POST"   enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="custom-file">
                            <input type="file" name="image"   class="custom-file-input" lang="in">
                            <label class="custom-file-label" for="customFileLang">Image </label>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($category as $row)
                                    <option value="{{$row->id}}">{{$row->category}}</option>
                                @endforeach
                            </select>
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
<div  class="modal fade" id="imageDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Image</h5>
            </div>
            <div class="modal-body">
                <h5>Are you sure you want to remove Image ?</h5><p id="title" style="color:red;"></p>
            </div>
            <form  id="imageFDelete" action="" method="POST" autocomplete="off">
            {{ csrf_field() }}
                {{ method_field('DELETE') }}

            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" style="font-width: 600px;"><span class="mdi mdi-close-circle" ></span> Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary" style="font-width: 600px;"><span class="mdi  mdi-checkbox-marked-circle-outline"></span> OK</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        <!-- View Modal -->



<div  class="modal fade" id="imageViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body text-center">
                            <img style="width:450px; height:320px;" src="" alt="Image not found." id="imageViewPopUp">
            </div>
            </div>
        </div>
        </div>


        <script>
$('#imageDeleteModal').on('show.bs.modal',function(event){
            var button=$(event.relatedTarget);
            var id =button.data('id');

            var url = "{{url('categoryBackControl')}}/"+id;

            $("#imageFDelete").attr('action',url);
    });

    $('#imageViewModal').on('show.bs.modal',function(event){
            var button=$(event.relatedTarget);
            var id =button.data('id');
            var image=button.data('image');
            var url = "{{asset('/img/Gallery/')}}/"+image
            $("#imageViewPopUp").attr('src',url);
    });
</script>
@endsection

