<section class="arrival_section" style="background-color: #002c3e;">
         <div class="container">
            <div class="box">
               <div class="row">
                  <div class="col-md-4 ml-auto">
                     <img src="{{asset("$arrival->arrival_image")}}" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-8 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2 style="color: white;">
                           {{$arrival->arrival_heading}}
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px; color: white;">
                        {{$arrival->arrival_description}}
                     </p>
                     <a href="{{route('product.page')}}" class="btn1">
                     Shop Now
                     </a>
                  </div>
               </div>
            </div>
         </div>
</section>