@extends('layouts.website')
@section('home')

@include('layouts.websiteBody.header')
<body onload="setfilterParams()">
<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Products</h3>
                  </div>
               </div>
            </div>
         </div>
</section>
</body>

@include('layouts.websiteBody.all_products')

@endsection('home')