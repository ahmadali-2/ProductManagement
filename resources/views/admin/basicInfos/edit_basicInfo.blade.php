@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset("$basicInfo->website_logo")}}" id="icon" alt="Website Logo" />
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{url('dashboard/showAllBasicInfos/update/'.$basicInfo->id)}}" enctype="multipart/form-data">
                        @csrf

                    <input id="field" class="form-control" type="text" name="website_title" value="{{$basicInfo->website_title}}" placeholder="Website Title">
                    @error('website_title')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror

                    <input id="field" class="form-control" type="file" name="website_logo" onchange="readURL(this)">
                    @error('website_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror

                    <input id="field" class="form-control" type="email" name="email" value="{{$basicInfo->email}}" placeholder="Email">
                    @error('email')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror

                    <input id="field" class="form-control" type="text" name="telephone" value="{{$basicInfo->telephone}}" placeholder="Telephone">
                    @error('telephone')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror

                    <textarea id="field" class="form-control" name="address" placeholder="Address">{{$basicInfo->address}}</textarea>
                    @error('address')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Update">
                        <a href="{{url('dashboard/showAllBasicInfos')}}" class="btn btn-info" id="cancelButton"><i class="fas fa-arrow-left" style="color: white;"></i>   Back</a>
                    </div>
                    </form>
                    <div id="formFooter">
                    </div>
            </div>
</div>
@endsection