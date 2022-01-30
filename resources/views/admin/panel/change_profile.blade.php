@extends('admin.panel.admin_panel')
@section('admin')
<div class="card-body">
<h1>Change Profile</h1>
<form class="form-pill" method="POST" action="{{route('changeProfile')}}" enctype="multipart/form-data">
    @csrf
    <img style="margin-top: 10px;" id="profileImage" height="150px" width="150px" src="{{asset("$user->profile_photo_path")}}" id="icon" alt="Product Icon" />
    <div class="form-group" style="margin-top: 10px;">
        <input type="file" name="profile_photo_path" id="imgupload" style="display:none" onchange="readProfileURL(this)"/>
        <a id="OpenImgUpload" class="btn btn-info" style="align-content: center; color: white;">Change</a>
        @error('name')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3">Name</label>
        <input name="name" value="{{$user->name}}" type="text" class="form-control" placeholder="Name">
        @error('name')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3">Email</label>
        <input name="email" value="{{$user->email}}" type="email" class="form-control" placeholder="Email">
        @error('email')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <input class="btn btn-info" type="submit" style="color: white;" value="Update Profile">
</form>
</div>
@endsection