<section class="subscribe_section">
         <div class="container-fuild">
            <div class="box" style="background-color: #002c3e;">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3 style="color: white;">{{$subscribe->subs_heading}}</h3>
                        </div>
                        <p style="color: white;">{{$subscribe->subs_description}}</p>
                        <form id="frm">
                           @csrf
                           <input id="webs" type="email" name="website_subscriber" placeholder="Enter your email">
                           <button id="subscribeSubmit" name="submit" type="submit">
                           subscribe
                           </button>
                           <span id="message" class="error" style="color: green;"></span>
                           <span id="errorMessage" class="error" style="color: red;"></span>
                        </form>
                        <!-- jQery -->
                        <script src="{{asset('frontend/WebArtifacts/js/jquery-3.4.1.min.js')}}"></script>
                        <script>
                              jQuery('#frm').submit(function(e){
                                 e.preventDefault();
                                 jQuery.ajax({
                                    url:"{{url('/home/subscribe')}}",
                                    data: jQuery('#frm').serialize(),
                                    type:'post',
                                    success: function(result){
                                       if ($.isEmptyObject(result.error)) {
                                             $('#webs').val('');
                                             $('#message').delay(2).fadeIn();
                                             jQuery('#message').html(result.success);
                                             $('#message').delay(3500).fadeOut();
                                       }else{
                                             printErrorMsg(result.error)
                                       }
                                    }
                                 });
                              });

                              function printErrorMsg(error) {
                                 $('#errorMessage').delay(2).fadeIn();
                                 jQuery('#errorMessage').html(error);
                                 $('#errorMessage').delay(3000).fadeOut();
                           }
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>