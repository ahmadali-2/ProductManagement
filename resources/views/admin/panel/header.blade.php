<header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{ asset("$user->profile_photo_path") }}" class="user-image" alt="User Image" style="border-radius: 5px;"/>
                      <span class="d-none d-lg-inline-block">{{$user->name}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{ asset("$user->profile_photo_path") }}" class="img-circle" alt="User Image" style="border-radius: 5px;"/>
                        <div class="d-inline-block">
                        {{$user->name}} <small class="pt-1">{{$user->email}}</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{route('changeProfileForm')}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="{{route('changePasswordForm')}}">
                          <i class="fas fa-key"></i> Change Password
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a href="{{url('dashboard/logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
