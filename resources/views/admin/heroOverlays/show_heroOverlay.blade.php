@extends('admin.panel.admin_panel')
@section('admin')

<div class="col-lg-10">
<div class="card card-default">
<div class="card-header card-header-border-bottom">
    <h2>Hero Image</h2>
</div>
<div class="card-header card-header-border-bottom">
    <form action="{{url('dashboard/showAllHeroImages/update/'.$heroImage->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="file" name="hero_image" id="imgupload" style="display:none" onchange="readHeroURL(this)"/>
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
<img id="heroImg" src="{{asset("$heroImage->hero_image")}}" height="500px" width="900px" alt="" class="img-fluid" style="border-radius: 5px;">
    <div class="card-header card-header-border-bottom">
        <h2>Hero Overlays</h2>
    </div>

    <div class="card-header card-header-border-bottom">
        <a href="{{route('showHeroOverlayForm')}}" class="btn btn-info" style="align-content: center; color: white;">Create Hero Overlay</a>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id#</th>
                    <th scope="col">SiverHeading</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($heroOverlays as $hero)
                    <tr>
                        <td scope="row">{{$hero->id}}</td>
                        <td>{{$hero->hO_silverHeading}}</td>
                        <td>{{$hero->hO_heading}}</td>
                        <td>{{$hero->hO_description}}</td>
                        <td>
                            <a href="{{url('dashboard/showAllHeroOverlays/edit/'.$hero->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            <a href="{{url('dashboard/showAllHeroOverlays/delete/'.$hero->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color: white;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$heroOverlays->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>
@endsection
