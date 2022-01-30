@extends('admin.panel.admin_panel')
@section('admin')

<div class="col-lg-10">
<div class="card card-default">
<div class="card-header card-header-border-bottom">
    <h2>Arrival Image</h2>
</div>
<div class="card-header card-header-border-bottom">
    <form action="{{url('dashboard/showAllArrivals/updateImage/'.$arrival->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="file" name="arrival_image" id="imgupload" style="display:none" onchange="readHeroURL(this)"/>
                <a id="OpenImgUpload" class="btn btn-info" style="align-content: center; color: white;">Change</a>
            </div>

            <div class="col-sm-4">
                <a href="" class="btn btn-danger" style="align-content: center; color: white;">Discard</a>
            </div>

            <div class="col-sm-4">
                <button type="submit" class="btn btn-success" style="align-content: center; color: white;">Apply Change</button>
            </div>
        </div>
    </form>
</div>
<img id="heroImg" src="{{asset("$arrival->arrival_image")}}" height="250px" width="450px" alt="" class="img-fluid">
    <div class="card-header card-header-border-bottom">
        <h2>Arrival Info</h2>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Heading</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$arrival->arrival_heading}}</td>
                        <td>{{$arrival->arrival_description}}</td>
                        <td>
                            <a href="{{url('dashboard/showAllArrivals/edit/'.$arrival->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection