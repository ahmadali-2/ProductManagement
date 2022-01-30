@extends('admin.panel.admin_panel')
@section('admin')
<body onload="setfilterParams()">
<div class="row" style="float: right; width: 100.01%;">
    <div class="col" style="float: right;">
        <a href="{{route('showProductForm')}}" class="btn btn-info" id="addBrandButton" >Add Product</a>
        @if(is_countable($products))
            <p class="btn btn-danger" id="addBrandButton">Total Products : Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of total {{$products->total()}} entries</p>
        @else
            <p class="btn btn-danger" id="addBrandButton">Total Products : 0</p>
        @endif
        <p id="brandHeading">Products Section</p>
    </div>
</div>
    <div class="row">
    <div class="col-sm-3" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;">

    <select id="optionCategory" onchange="catOp()">
        <option value="-">All Categories</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
    </select>

    </div>
    <div class="col-sm-3" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;">

    <select id="optionBrand" onchange="braOp()">
        <option value="-">All Brands</option>
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
            @endforeach
    </select>
    </div>
    <div class="col-sm-6" style="padding-left: 100px; padding-top: 10px; padding-bottom: 10px; background-color: #0dcaf0;">
        <div class="btn btn-primary" onclick="productFilter()">Filter</div>
    </div>
    </div>
    <div class="py-12">
        <div class="row">
        <table class="table table-hover" style="margin-right: 10px; margin-left: 20px;">
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
                {{$products->links('pagination::bootstrap-4')}}
            @endif
        </div>
    </div>
    </div>
</body>
@endsection
