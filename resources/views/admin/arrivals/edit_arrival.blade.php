@extends('admin.panel.admin_panel')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
<h2>Add Hero Overlay Details</h2>
</div>
<div class="card-body">
    <form method="POST" action="{{url('dashboard/showAllArrivals/update/'.$arrival->id)}}">
        @csrf
        <div class="form-group">
            <label>Overlay Heading</label>
            <input name="arrival_heading" value="{{$arrival->arrival_heading}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Arrival Heading">
            @error('arrival_heading')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Arrival Description</label>
            <textarea name="arrival_description" class="form-control" id="exampleFormControlInput1" placeholder="Enter Arrival Description">{{$arrival->arrival_description}}</textarea>
            @error('arrival_description')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-footer pt-4 pt-5 mt-4 border-top">
            <button type="submit" class="btn btn-primary btn-default">Update</button>
        </div>
    </form>
</div>
</div>
@endsection