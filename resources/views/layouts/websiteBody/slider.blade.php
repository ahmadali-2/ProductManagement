<section class="slider_section ">
            <div class="slider_bg_box">
            <img src="{{asset("$hero->hero_image")}}" alt="" style="border-radius: 5px;">
            </div>
            @php
               $check = true;
            @endphp
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner">
                  @foreach($overlays as $overlay)

                  @if($check === true)
                     <div class="carousel-item active">
                  @else
                     <div class="carousel-item">
                  @endif
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    {{$overlay->hO_silverHeading}}
                                    </span>
                                    <br>
                                    {{$overlay->hO_heading}}
                                 </h1>
                                 <p>
                                    {{$overlay->hO_description}}
                                 </p>
                                 <div class="btn-box">
                                    <a href="{{route('product.page')}}" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @php
                        $check = false;
                     @endphp
               </div>
                     @endforeach

            </div>

            <div class="container">
               @php
                  $check2 = true;
                  $i = 0;
               @endphp
                  <ol class="carousel-indicators">
                  @foreach($overlays as $overlay)
                     @if($check2 === true)
                        <li data-target="#customCarousel1" data-slide-to= "<?php echo $i; ?>" class="active"></li>
                        @php $i++; @endphp
                        @php $check2 = false; @endphp
                     @else
                        <li data-target="#customCarousel1" data-slide-to= "<?php echo $i; ?>"></li>
                        @php $i++; @endphp
                     @endif
                  @endforeach
                  </ol>
            </div>
</section>
