@extends('layouts.website')
@section('home')

<div class="hero_area">

<!-- header section strats -->

@include('layouts.websiteBody.header')

<!-- end header section -->

<!-- slider section -->

@include('layouts.websiteBody.slider')

<!-- end slider section -->

</div>

<!-- why section -->

  @include('layouts.websiteBody.why')

<!-- end why section -->

<!-- arrival section -->

  @include('layouts.websiteBody.arrival')

<!-- end arrival section -->

<!-- product section -->

  @include('layouts.websiteBody.products')

<!-- end product section -->

<!-- subscribe section -->

  @include('layouts.websiteBody.subscribe')

<!-- end subscribe section -->

<!-- client section -->

  @include('layouts.websiteBody.client')

<!-- end client section -->

<!-- Brands section -->

  @include('layouts.websiteBody.brands')

<!-- end Brands section -->

@endsection('home')