<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="{{route('home.page')}}"><img width="100" height="100" src="{{asset("$basicInfo->website_logo")}}" alt="Website Logo" style="border-radius:5px;" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS: </strong>{{$basicInfo->address}}</p>
                        <p><strong>TELEPHONE: </strong>{{$basicInfo->telephone}}</p>
                        <p><strong>EMAIL: </strong>{{$basicInfo->email}}</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Services</a></li>
                           <li><a href="#">Testimonial</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Social Links</h3>
                        <ul>
                           <li>
                                 <a href="https://wa.me/{{$socials->social_whatsapp}}" style="color: green;" target="_blank">
                                    <i class="fa fa-whatsapp"></i> Whatsapp
                                 </a>
                           </li>
                           <li>
                                 <a href="{{$socials->social_facebook}}" style="color: #4267B2" target="_blank">
                                    <i class="fa fa-facebook"></i> Facebook
                                 </a>
                           </li>
                           <li>
                                 <a href="{{$socials->social_linkedin}}" style="color: #0072b1;" target="_blank">
                                    <i class="fa fa-linkedin"></i> LinkedIn
                                 </a>
                           </li>
                           <li>
                                 <a href="{{$socials->social_twitter}}" style="color: #1DA1F2;" target="_blank">
                                    <i class="fa fa-twitter"></i> Twitter
                                 </a>
                           </li>
                           <li>
                                 <a href="{{route('contact.page')}}" style="color: #fc2017;" target="_blank">
                                    <i class="fa fa-envelope-open"></i> Contact form
                                 </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>{{$subscribe->subs_description}}</p>
                        </div>
                        <div class="form_sub">
                           <form id="smForm">
                              @csrf
                                 <div class="field">
                                    <input id="webs1" type="email" placeholder="Enter Your Mail" name="website_subscriber" />
                                    <input name="submit" type="submit" value="Subscribe" />
                                 </div>
                           </form>
                           <span id="message1" class="error" style="color: green;"></span>
                           <span id="errorMessage1" class="error" style="color: red;"></span>
                        <script src="{{asset('frontend/WebArtifacts/js/jquery-3.4.1.min.js')}}"></script>
                        <script>
                              jQuery('#smForm').submit(function(e){
                                 e.preventDefault();
                                 jQuery.ajax({
                                    url:"{{url('/home/subscribe')}}",
                                    data: jQuery('#smForm').serialize(),
                                    type:'post',
                                    success: function(result){
                                       if ($.isEmptyObject(result.error)) {
                                             $('#webs1').val('');
                                             $('#message1').delay(2).fadeIn();
                                             jQuery('#message1').html(result.success);
                                             $('#message1').delay(3500).fadeOut();
                                       }else{
                                             printErrorMsg1(result.error)
                                       }
                                    }
                                 });
                              });

                              function printErrorMsg1(error) {
                                 $('#errorMessage1').delay(2).fadeIn();
                                 jQuery('#errorMessage1').html(error);
                                 $('#errorMessage1').delay(3000).fadeOut();
                           }
                        </script>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
