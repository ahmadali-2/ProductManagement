@extends('admin.panel.admin_panel')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
<h2>Add WhyShop Details</h2>
</div>
<div class="card-body">
    <form method="POST" action="{{route('addWhy')}}">
        @csrf
        <div class="form-group">
            <label>Why Shop Card Heading</label>
            <input name="why_heading" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter why shop heading">
            @error('why_heading')
                <span class="error" style="color: red;">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Why Shop Card Description</label>
            <textarea name="why_description" class="form-control" id="exampleFormControlInput1" placeholder="Enter sho shop description"></textarea>
            @error('why_description')
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