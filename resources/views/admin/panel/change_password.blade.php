@extends('admin.panel.admin_panel')
@section('admin')
<div class="card-body">
<h1>Change Password</h1>
<form class="form-pill" method="POST" action="{{route('changePassword')}}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlPassword3">Current Password</label>
        <input id="current_password" name="current_password" type="password" class="form-control" placeholder="Current Password">
        @error('current_password')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3">New Password</label>
        <input id="password" name="password" type="password" class="form-control" placeholder="New Password">
        @error('password')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlPassword3">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
        @error('password_confirmation')
            <span class="error" style="color: red;">{{$message}}</span>
        @enderror
    </div>
    <input class="btn btn-info" type="submit" style="color: white;" value="Update Password">
</form>
</div>
@endsection