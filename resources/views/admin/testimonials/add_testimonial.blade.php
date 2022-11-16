@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset('Images/Testimonial/logoHere.png')}}" id="icon" alt="User Icon" style="border-radius: 5px;"/>
                    @error('customer_image')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{route('addTestimonial')}}" enctype="multipart/form-data">
                        @csrf
                    <input id="field" class="form-control" type="file" name="customer_image" onchange="readURL(this)">
                    <input id="field" class="form-control" type="text" name="customer_name" placeholder="Customer Name">

                    @error('customer_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Message" name="customer_message"></textarea>
                    @error('customer_message')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Create Now!">
                        <a href="{{url('dashboard/showAllTestimonials')}}" class="btn btn-info" id="cancelButton"><i class="fas fa-arrow-left" style="color: white;"></i>   Back</a>
                    </div>
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    </div>
            </div>
</div>
@endsection
