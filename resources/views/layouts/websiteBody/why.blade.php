<section class="why_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Why Shop With Us
               </h2>
            </div>
            <div class="row">
<!-- Foreach here -->
            @foreach($whies as $why)
               <div class="col-md-4">
                  <div class="box " style="background-color: white;">
                     <div class="detail-box">
                        <h5 style="color: black;">
                           {{$why->why_heading}}
                        </h5>
                        <p style="color: black;">
                           {{$why->why_description}}
                        </p>
                     </div>
                  </div>
               </div>
            @endforeach
            </div>
         </div>
      </section>