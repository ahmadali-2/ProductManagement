@extends('admin.panel.admin_panel')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
<h2>Add Hero Overlay Details</h2>
</div>
<div class="card-body">
    <form method="POST" action="{{route('addHeroOverlay')}}">
        @csrf
        <div class="form-group">
            <label>Overlay Silver Heading</label>
            <input name="hO_silverHeading" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Silver Heading">
            @error('hO_silverHeading')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Overlay Heading</label>
            <input name="hO_heading" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Heading">
            @error('hO_heading')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Overlay Description</label>
            <textarea name="hO_description" class="form-control" id="exampleFormControlInput1" placeholder="Enter Overlay Description"></textarea>
            @error('hO_description')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-footer pt-4 pt-5 mt-4 border-top">
            <button type="submit" class="btn btn-primary btn-default">Create Now!</button>
        </div>
    </form>
</div>
</div>
@endsection