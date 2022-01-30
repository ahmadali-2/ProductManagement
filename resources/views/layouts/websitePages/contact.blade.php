@extends('layouts.website')
@section('home')

    <!-- header section strats -->

    @include('layouts.websiteBody.header')

    <!-- end header section -->

    <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">

            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form id="frm" method="POST" action="{{route('contact')}}">
                        @csrf
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="contact_name"/>
                           <span id="errorMessage1" class="error" style="color: red;"></span>
                           <input type="email" placeholder="Enter your email address" name="contact_email"/>
                           <span id="errorMessage2" class="error" style="color: red;"></span>
                           <input type="text" placeholder="Enter subject" name="contact_subject"/>
                           <span id="errorMessage3" class="error" style="color: red;"></span>
                           <textarea placeholder="Enter your message" name="contact_message"></textarea>
                           <span id="errorMessage4" class="error" style="color: red;"></span>
                           <input type="submit" value="Submit" />
                        </fieldset>
                           <span id="message" class="error" style="color: green;"></span>
                     </form>
                     <script src="{{asset('frontend/WebArtifacts/js/jquery-3.4.1.min.js')}}"></script>
                        <script>
                              jQuery('#frm').submit(function(e){
                                 e.preventDefault();
                                 jQuery.ajax({
                                    url:"{{url('/home/contactForm')}}",
                                    data: jQuery('#frm').serialize(),
                                    type:'post',
                                    success: function(result){
                                       if ($.isEmptyObject(result.error)) {
                                             jQuery('#errorMessage1').html('');
                                             jQuery('#errorMessage2').html('');
                                             jQuery('#errorMessage3').html('');
                                             jQuery('#errorMessage4').html('');
                                             $('#message').delay(2).fadeIn();
                                             jQuery('#message').html(result.success);
                                             $('#message').delay(3500).fadeOut();
                                       }else{
                                             printErrorMsg(result)
                                       }
                                    }
                                 });
                              });
                              function printErrorMsg(result) {
                                 jQuery('#errorMessage1').html('');
                                 jQuery('#errorMessage2').html('');
                                 jQuery('#errorMessage3').html('');
                                 jQuery('#errorMessage4').html('');

                                 jQuery('#errorMessage1').html(result.error[0]);
                                 jQuery('#errorMessage2').html(result.error[1]);
                                 jQuery('#errorMessage3').html(result.error[2]);
                                 jQuery('#errorMessage4').html(result.error[3]);
                              }
                        </script>
                  </div>
               </div>
            </div>
         </div>
      </section>
    <!-- arrival section -->

        @include('layouts.websiteBody.arrival')

    <!-- end arrival section -->
@endsection('home')