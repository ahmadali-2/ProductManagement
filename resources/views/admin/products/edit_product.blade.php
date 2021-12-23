<x-app-layout>
<body>
<div class="wrapper fadeInDown">
                <div id="newBrandForm">
                    <div class="fadeIn first">
                    <img src="{{asset("$product->product_logo")}}" id="icon" alt="Product Icon" />
                    </div>

                    <form id="model" method="POST" enctype="multipart/form-data" action="{{url('dashboard/showAllProducts/update/'.$product->id)}}">
                        @csrf
                    <div class="row" style="padding: 20px;">
                    <div class="col-sm-6">        
                        <select id="category" name="category_id">
                            <option value="volvo">Select Category</option>
                            @foreach($categories as $category)
                                @if($category->id === $product->category_id)
                                    <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endif
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
                                @if($brand->id === $product->brand_id)
                                    <option value="{{$brand->id}}" selected>{{$brand->brand_name}}</option>
                                @else
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endif
                            @endforeach
                    </select>
                    @error('brand_id')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    </div>
                    </div>
                    </div>
                    <input id="field" class="form-control" type="file" name="product_logo" onchange="readURL(this)">

                    <input id="field" class="form-control" type="text" name="product_name" placeholder="Category Name" value="{{$product->product_name}}">
                    @error('product_name')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <textarea id="field" class="form-control" rows="5" placeholder="Description" name="product_description">{{$product->product_description}}</textarea>
                    @error('product_description')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <input id="field" class="form-control" type="number" name="product_stock" placeholder="Product Price" value="{{$product->product_stock}}">
                    @error('product_stock')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <input id="field" class="form-control" type="number" name="product_price" placeholder="Product Stock" value="{{$product->product_price}}">
                    @error('product_price')
                        <span id="error" class="form-control text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="row">
                        <input id="submitButton" type="submit" class="fadeIn fourth" value="Update Now!">
                        <input id="cancelButton" type="button" class="fadeIn fourth" value="Back" onclick="closeBrandForm()">
                    </div>
                    </form>
                    <div id="formFooter">
                    </div>
            </div>
    </div>
</body>

</x-app-layout>