@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset("$category->category_logo")}}" id="icon" alt="Category Icon" />
                    @error('category_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{url('dashboard/showAllCategories/update/'.$category->id)}}" enctype="multipart/form-data">
                        @csrf
                    <input id="field" class="form-control" type="file" name="category_logo" onchange="readURL(this)">
                    <input id="field" class="form-control" type="text" name="category_name" placeholder="Category Name" value="{{$category->category_name}}">
                    
                    @error('category_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="category_description">{{$category->category_description}}</textarea>
                    @error('category_description')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Update">
                        <input id="cancelButton" type="button" class="fadeIn fourth" value="Back" onclick="closeBrandForm()">
                    </div>
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    </div>
            </div>
    </div>
@endsection