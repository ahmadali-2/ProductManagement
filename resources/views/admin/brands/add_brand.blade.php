@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset('Images/Brand/logoHere.png')}}" id="icon" alt="User Icon" style="border-radius: 5px;"/>
                    @error('brand_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{route('addBrand')}}" enctype="multipart/form-data">
                        @csrf
                    <input id="field" class="form-control" type="file" name="brand_logo" onchange="readURL(this)">
                    <input id="field" class="form-control" type="text" name="brand_name" placeholder="Brand Name">

                    @error('brand_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="brand_description"></textarea>
                    @error('brand_description')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Create Now!">
                        <a href="{{url('dashboard/showAllBrands')}}" class="btn btn-info" id="cancelButton"><i class="fas fa-arrow-left" style="color: white;"></i>   Back</a>
                    </div>
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    </div>
            </div>
    </div>
@endsection
