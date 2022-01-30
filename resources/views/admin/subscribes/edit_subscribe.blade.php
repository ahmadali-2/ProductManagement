@extends('admin.panel.admin_panel')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
<h2>Edit Subscribe Section</h2>
</div>
<div class="card-body">
    <form method="POST" action="{{url('dashboard/showAllSubscribes/update/'.$subscribe->id)}}">
        @csrf
        <div class="form-group">
            <label>Subscribe Heading</label>
            <input name="subs_heading" value="{{$subscribe->subs_heading}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Heading">
            @error('subs_heading')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Subscribe Description</label>
            <textarea name="subs_description" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subscribe Description">{{$subscribe->subs_description}}</textarea>
            @error('subs_description')
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