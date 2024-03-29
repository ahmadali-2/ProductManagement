<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{route('home.page')}}"><img width="100" height="100" src="{{asset("$basicInfo->website_logo")}}" alt="Website Logo" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('homePage')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="">About</a></li>
                              <li><a href="">Testimonial</a></li>
                           </ul>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('product.page')}}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('why.page')}}">Why Us?</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('testimonial.page')}}">Testimonial</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('contact.page')}}">Contact</a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
</header>
