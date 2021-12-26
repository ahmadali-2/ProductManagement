@extends('admin.panel.admin_panel')
@section('admin')
<div class="row" style="float: right; width: 100.01%;">
    <div class="col" style="float: right;">
        <a href="{{route('showCategoryForm')}}" class="btn btn-info" id="addBrandButton" >Add Category</a>
        <p class="btn btn-danger" id="addBrandButton">Total Categories : {{count($categories)}}</p>
        <p id="brandHeading">Category Section</p>
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
    <div class="py-12">
        <div class="row">

        @if(is_countable($categories) && count($categories)>0)
            @foreach($categories as $category)
            @php
                if(strlen($category->category_description)>70){
                    $customDesc = substr($category->category_description,0,70)." . . .";
                }
                else{
                    $customDesc = $category->category_description;
                }
            @endphp
            <div class="col-lg-3" style="margin-right: 10px; margin-left: 20px;">
                    <div id="mainCard" class="card shadow-xl sm:rounded-lg" style="width: 18rem;">
                    <img id="brandCardPic" src="{{asset("$category->category_logo")}}"/>
                    <div id="brandCard" class="card-body">
                        <p id="brandCardHea" class="card-title">{{$category->category_name}}</p>
                        <p id="brandCardDes" class="card-text">{{$customDesc}}</p>
                        <a href="{{url('dashboard/showAllCategories/edit/'.$category->id)}}" class="btn btn-primary" style="width: 40%;"><i class="fas fa-eye" style="color: white;"></i> Details</a>
                        <a href="{{url('dashboard/showAllCategories/categoryProducts/'.$category->id)}}" class="btn btn-primary" style="width: 55%;"><i class="fas fa-table" style="color: white;"></i> Products</a>
                        <a href="{{url('dashboard/showAllCategories/delete/'.$category->id)}}" onclick="return confirm('Are you sure, you want to delete all products inside if any, along with this Category ?')" class="btn btn-danger" style="width: 97%; margin-top: 5px;"><i class="fas fa-trash-alt" style="color: white;"></i> Delete</a>
                    </div>
                    </div>
            </div>
            @endforeach
        @else
            <div id="centerDiv">
                <h2>No categories to show!</h2>
                <p style="color: dodgerblue;">Add one now, from top right corner.</p>
            </div>
        @endif
        </div>
    </div>
    </div>
@endsection
