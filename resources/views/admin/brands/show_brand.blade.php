@extends('admin.panel.admin_panel')
@section('admin')
<div class="row" style="float: right; width: 100.01%;">
    <div class="col" style="float: right;">
        <a href="{{route('showBrandForm')}}" class="btn btn-info" id="addBrandButton" >Add Brand</a>
        <p class="btn btn-danger" id="addBrandButton">Total Brands : {{count($brands)}}</p>
        <p id="brandHeading">Brand Section</p>
    </div>
</div>
    <div class="py-12">
        <div class="row">

        @if(is_countable($brands) && count($brands)>0)
            @foreach($brands as $brand)
            @php
                if(strlen($brand->brand_description)>70){
                    $customDesc = substr($brand->brand_description,0,70)." . . .";
                }
                else{
                    $customDesc = $brand->brand_description;
                }
            @endphp
            <div class="col-lg-3" style="margin-right: 10px; margin-left: 20px;">
                    <div id="mainCard" class="card shadow-xl sm:rounded-lg" style="width: 18rem;">
                    <img id="brandCardPic" src="{{asset("$brand->brand_logo")}}"/>
                    <div id="brandCard" class="card-body">
                        <p id="brandCardHea" class="card-title">{{$brand->brand_name}}</p>
                        <p id="brandCardDes" class="card-text">{{$customDesc}}</p>
                        <a href="{{url('dashboard/showAllBrands/edit/'.$brand->id)}}" class="btn btn-primary" style="width: 40%;"><i class="fas fa-eye" style="color: white;"></i> Details</a>
                        <a href="{{url('dashboard/showAllBrands/brandProducts/'.$brand->id)}}" class="btn btn-primary" style="width: 55%;"><i class="fas fa-table" style="color: white;"></i> Products</a>
                        <a href="{{url('dashboard/showAllBrands/delete/'.$brand->id)}}" onclick="return confirm('Are you sure, you want to delete all products inside if any, along with this Brand ?')" class="btn btn-danger" style="width: 97%; margin-top: 5px;"><i class="fas fa-trash-alt" style="color: white;"></i> Delete</a>
                    </div>
                    </div>
            </div>
            @endforeach
        @else
            <div id="centerDiv">
                <h2>No brands to show!</h2>
                <p style="color: dodgerblue;">Add one now, from top right corner.</p>
            </div>
        @endif
        </div>
    </div>
    </div>
@endsection