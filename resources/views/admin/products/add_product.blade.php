@extends('admin.panel.admin_panel')
@section('admin')
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <div class="fadeIn first">
                    <img src="{{asset('Images/Product/logoHere.png')}}" id="icon" alt="Product Icon" />
                    </div>

                    <form id="model" method="POST" action="{{route('addProduct')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row" style="padding: 20px;">
                    <div class="col-sm-6">
                        <select id="category" name="category_id">
                            <option value="volvo">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span id="error" class="form-control text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                    <div class="dropdown">
                    <select id="brand" name="brand_id">
                            <option value="volvo">Select Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                    </select>
                    @error('brand_id')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>
                    </div>
                    </div>
                    <input id="field" class="form-control" type="file" name="product_logo" onchange="readURL(this)">
                    @error('product_logo')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <input id="field" class="form-control" type="text" name="product_name" placeholder="Product Name">
                    @error('product_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Product Video URL" name="product_video"></textarea>
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="product_description"></textarea>
                    @error('product_description')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <input id="field" class="form-control" type="number" name="product_stock" placeholder="Product Price">
                    @error('product_stock')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <input id="field" class="form-control" type="number" name="product_price" placeholder="Product Stock">
                    @error('product_price')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Create Now!">
                        <a href="{{url('dashboard/showAllProducts')}}" class="btn btn-info" id="cancelButton"><i class="fas fa-arrow-left" style="color: white;"></i>   Back</a>
                    </div>
                    </form>
                    <div id="formFooter">
                    </div>
            </div>
    </div>
@endsection