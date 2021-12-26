@extends('admin.panel.admin_panel')
@section('admin')

@if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Great!</strong> {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<a href="{{route('showHeroImageForm')}}" id="addBrandButton" class="btn btn-info" style="align-content: center; color: white;">Create</a>
<div class="col-lg-10">
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Hero Images</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($heros as $hero)
                    <tr>
                        <td scope="row">{{$hero->id}}</td>
                        <td><img src="{{asset("$hero->hero_logo")}}" width="100" height="60"></td>
                        <td>{{$hero->hero_name}}</td>
                        <td>{{$hero->hero_description}}</td>
                        <td>
                            <a href="{{url('dashboard/showAllHeroImages/edit/'.$hero->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            <a href="{{url('dashboard/showAllHeroImages/delete/'.$hero->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color: white;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$heros->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>
@endsection