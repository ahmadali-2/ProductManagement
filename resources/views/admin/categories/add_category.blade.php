@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset('Images/Category/logoHere.png')}}" id="icon" alt="Category Icon" />
                    @error('category_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{route('addCategory')}}" enctype="multipart/form-data">
                        @csrf
                    <input id="field" class="form-control" type="file" name="category_logo" onchange="readURL(this)">
                    <input id="field" class="form-control" type="text" name="category_name" placeholder="Category Name">
                    
                    @error('category_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="category_description"></textarea>
                    @error('category_description')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Create Now!">
                        <a href="{{url('dashboard/showAllCategories')}}" class="btn btn-info" id="cancelButton"><i class="fas fa-arrow-left" style="color: white;"></i>   Back</a>
                    </div>
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    </div>
            </div>
    </div>
@endsection