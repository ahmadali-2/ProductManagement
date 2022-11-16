<style>
    .dropdown-cursor:hover{
       cursor: pointer;
    }
</style>
<!-- Website Scripting file -->
<script src="{{asset('scripting/website.js')}}"></script>

<section class="product_section layout_padding">
         <div class="container">
            <div id="products_section" class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <div class="col-sm-4" style=" padding-top: 10px; padding-bottom: 10px; background-color: #f7444e;">

               <select class="btn btn-dark dropdown-cursor" id="optionCategory1" onchange="catOp()">
                  <option value="-">All Categories</option>
                        @foreach($categories as $category)
                           <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
               </select>

               </div>
               <div class="col-sm-4" style=" padding-top: 10px; padding-bottom: 10px; background-color: #f7444e;">

               <select class="btn btn-dark dropdown-cursor" id="optionBrand1" onchange="braOp()">
                  <option value="-">All Brands</option>
                        @foreach($brands as $brand)
                           <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                        @endforeach
               </select>
               </div>
               <div class="col-sm-4" style="padding-top: 10px; padding-bottom: 10px; background-color: #f7444e;">
                  <button class="btn btn-danger" onclick="productFilter()" style="color: white; background-color: black;" >Filter Products</button>
               </div>
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
                           <img src="{{asset("$product->product_logo")}}" alt="" style="border-radius: 5px;">
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
            </div>
         </div>
</section>

<div style="
width: 100%;
  height: 100px;
  display: flex;
  flex-wrap: wrap;
  padding-left: 45%;
  align-content: center;
">
    {{$products->links('pagination::bootstrap-4')}}
</div>
