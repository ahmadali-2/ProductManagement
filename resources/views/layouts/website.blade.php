<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset("$basicInfo->website_logo")}}" type="">
      <title>{{$basicInfo->website_title}}</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/WebArtifacts/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('frontend/WebArtifacts/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('frontend/WebArtifacts/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('frontend/WebArtifacts/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>

      @yield('home')

      <!-- footer start -->

        @include('layouts.websiteBody.footer')

      <!-- footer end -->

      <div class="cpy_" style="background-color: #002c3e;">
         <p class="mx-auto">© <?php echo(date("Y")) ?> All Rights Reserved<br>

            Developed By <a href="https://themewagon.com/" target="_blank">AuroraApps</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="{{asset('frontend/WebArtifacts/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{asset('frontend/WebArtifacts/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('frontend/WebArtifacts/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{asset('frontend/WebArtifacts/js/custom.js')}}"></script>

   </body>
</html>