<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                  <a href="{{url('home/product/detail/'.$product->id)}}">
                        <div class="box" style="background-color: #fcfcfc;">
                        <!-- <div class="option_container">
                           <div class="options">
                              <a href="" class="option1">
                                 <i class="fa fa-eye"></i>
                              </a>
                           </div>
                        </div> -->
                        <div class="img-box">
                           <img src="{{asset("$product->product_logo")}}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$product->product_name}}
                           </h5>
                           <h6>
                              Rs. {{$product->product_price}}
                           </h6>
                        </div>
                     </div>
                     </a>
                  </div>
               @endforeach
            </div>
            <div class="btn-box">
               <a href="{{route('product.page')}}">
               View All products
               </a>
            </div>
         </div>
      </section>