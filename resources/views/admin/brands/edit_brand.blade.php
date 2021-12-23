<x-app-layout>
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                    <img src="{{asset("$brand->brand_logo")}}" id="icon" alt="User Icon" />
                    @error('brand_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>

                    <!-- Login Form -->
                    <form id="model" method="POST" action="{{url('dashboard/showAllBrands/update/'.$brand->id)}}" enctype="multipart/form-data">
                        @csrf
                    <input id="field" class="form-control" type="file" name="brand_logo" onchange="readURL(this)">
                    <input id="field" class="form-control" type="text" name="brand_name" placeholder="Brand Name" value="{{$brand->brand_name}}">
                    
                    @error('brand_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="brand_description">{{$brand->brand_description}}</textarea>
                    @error('brand_description')
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
</x-app-layout>