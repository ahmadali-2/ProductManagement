@extends('admin.panel.admin_panel')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
<h2>Add Hero Image</h2>
</div>
<div class="card-body">
    <form method="POST" action="{{route('addHeroImage')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Hero Image Title</label>
            <input name="hero_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hero Image Title">
            @error('hero_name')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Hero Image Description</label>
            <textarea name="hero_description" class="form-control" id="exampleFormControlInput1" placeholder="Enter Hero Image Description"></textarea>
            @error('hero_description')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Select A Hero Image</label>
            <input name="hero_logo" type="file" class="form-control-file" id="exampleFormControlFile1">
            @error('hero_logo')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-footer pt-4 pt-5 mt-4 border-top">
            <button type="submit" class="btn btn-primary btn-default">Creat Now!</button>
            <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
        </div>
    </form>
</div>
</div>
@endsection

