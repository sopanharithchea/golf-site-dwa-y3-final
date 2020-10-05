
@extends('layouts.backend')

@section('admin')
    <div class="container-fluid">

            <table id="example" class="display" style="width:100%">
        <thead class="bg-primary text-white">
                <tr>

                    <th>Videos</th>
                    <th>Categories name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($video->video as $item )

            <tr>

                <td>{{$item->video}}</td>
                <td>{{$item->catvideo->category}}</td>
                <td style="width:170px" class="text-center">
                <a href="" aria-hidden="true" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#videoViewModal" data-id={{$item->id}} data-video={{$item->video}} >View</a>
                <a href="" aria-hidden="true" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#imageDeleteModal" data-id="{{$item->id}}" data-image="{{$item->video}}">Delete</a>

                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        <br>
        <a  href="{{url('catvideoctr')}}" style="display:inline;" aria-hidden="true" class="btn btn-danger" >Back</a>
        <a href="" aria-hidden="true" class="btn btn-primary" style="background:#006df0; color:white; margin-left:80%; margin-top:20px !important; display:inline;" data-toggle="modal" data-target="#uploadGarllery">Upload Video</a>

    <br><br>


</div>


    <!-- create Modal -->
    <div class="modal fade" id="uploadGarllery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Video</h5>
            </div>
            <div class="modal-body">
                    <form  action ="{{action('catvideoBackendController@store')}}" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="customFileLang">Link:</label>
                            <input type="text" name="video"   class="form-control" lang="in">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select name="catvideo_id" class="form-control">
                                @foreach ($catvideo as $row)
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
                <h5 class="modal-title">Delete Video</h5>
            </div>
            <div class="modal-body">
                <h5>Are you sure you want to remove Video? </h5><p id="title" style="color:red;"></p>
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

    <div  class="modal fade" id="videoViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-body text-center">
                            <iframe class="video" width="450" height="320" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
                </div>


        <script>
$('#imageDeleteModal').on('show.bs.modal',function(event){
            var button=$(event.relatedTarget);
            var id =button.data('id');
            var video =button.data('video');
            var url = "{{url('catvideoBackControl')}}/"+id;
            $("#imageFDelete").attr('action',url);
    });

    $('#videoViewModal').on('show.bs.modal',function(event){
            var button=$(event.relatedTarget);
            var id =button.data('id');
            var video=button.data('video');
            var url ="https://www.youtube.com/embed/"+ video;
            $(".video").attr('src',url);
    });
</script>
@endsection

