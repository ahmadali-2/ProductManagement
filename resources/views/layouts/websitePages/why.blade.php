@extends('layouts.website')
@section('home')

<!-- header section strats -->

@include('layouts.websiteBody.header')

<section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Why Us?</h3>
                  </div>
               </div>
            </div>
         </div>
</section>

@include('layouts.websiteBody.why')

@include('layouts.websiteBody.arrival')

<!-- end header section -->

@endsection('home')