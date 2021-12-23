<x-app-layout>
<body onload="setfilterParams()">
<div class="row" style="float: right; width: 100.01%;">
    <div class="col" style="float: right;">
        <a href="{{route('showProductForm')}}" class="btn btn-info" id="addBrandButton" >Add Product</a>
        @if(is_countable($products))
            <p class="btn btn-danger" id="addBrandButton">Total Products : {{count($products)}}</p>
        @else
            <p class="btn btn-danger" id="addBrandButton">Total Products : 0</p>
        @endif
        <p id="brandHeading">Products Section</p>
    </div>
</div>    
    @if(session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Great!</strong> {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row" style="border: 1px solid red;">
    <div class="col-sm-3" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;"> 
    
    <select id="optionCategory" onchange="catOp()">
        <option value="-">All Categories</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
    </select>

    <!-- <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Category
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{url('/dashboard/showAllProducts/filter/category/'."showAll")}}">Show All</a>
                @foreach($categories as $category)
                    <a class="dropdown-item" href="{{url('/dashboard/showAllProducts/filter/category/'."$category->id")}}">{{$category->category_name}}</a>
                @endforeach
            </div>
    </div> -->
    </div>
    <div class="col-sm-3" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;">
    
    <select id="optionBrand" onchange="braOp()">
        <option value="-">All Brands</option>
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
            @endforeach
    </select>     

        <!-- <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Brand
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach($brands as $brand)
                    <a class="dropdown-item" href="{{url('/dashboard/showAllProducts/filter/brand/'."$brand->id")}}">{{$brand->brand_name}}</a>
                @endforeach
            </div>
        </div> -->
    </div>
    <div class="col-sm-6" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;">
        <div class="btn btn-primary" onclick="productFilter()">Filter</div>
    </div>
    </div>
    <div class="py-12">
        <div class="row">
        <table class="table table-hover" style="margin-right: 10px; margin-left: 20px;">
            <colgroup>
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
            </colgroup>
            <thead>
                <tr">
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @if(is_countable($products))
                @foreach($products as $product)
                    <tr>
                        <td><strong>{{$product->id}}</strong></td>
                        <td><img src="{{asset("$product->product_logo")}}" width="100px" height="100px" alt="No Image"></td>
                        <td>{{$product->product_name}}</td>
                        <td><b>{{$product->product_stock}}</b> <i> Pieces</i></td>
                        <td><b>${{$product->product_price}}</b> <i> Per / Piece</i></td>
                        <td>
                            <a href="{{url('dashboard/showAllProducts/edit/'.$product->id)}}" class="btn btn-info" ><i class="fas fa-edit" style="color: white;"></i></a>
                            <a href="{{url('dashboard/showAllProducts/delete/'.$product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color: white;"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            </table>
            @if(is_countable($products))
                {{$products->links()}}
            @endif
        </div>
    </div>
    </div>
</body>
</x-app-layout>
