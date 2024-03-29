<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{route('dashboard')}}">
                <img src="{{asset("$basicInfo->website_logo")}}" height="40px" width="40px">
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li  class="has-sub expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="fas fa-window-restore"></i>
                      <span class="nav-text">Website</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllBasicInfos')}}">
                                <span class="nav-text"><i class="fas fa-barcode"></i> Basic Info</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllHeroOverlays')}}">
                                <span class="nav-text"><i class="fas fa-image"></i> Hero Overlays</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllWhies')}}">
                                <span class="nav-text"><i class="fas fa-question-circle"></i> WhyShop</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllArrivals')}}">
                                <span class="nav-text"><i class="fas fa-skiing"></i> Arrival</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllSubscribes')}}">
                                <span class="nav-text"><i class="fas fa-thumbs-up"></i> Subscribe</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllTestimonials')}}">
                                <span class="nav-text"><i class="fas fa-smile"></i> Testimonials</span>

                                <span class="badge badge-success">new</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Organize Data</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllBrands')}}">
                                <span class="nav-text"><i class="fas fa-briefcase"></i> Brands</span>

                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllCategories')}}">
                                <span class="nav-text"><i class="fas fa-stream"></i> Categories</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllProducts')}}">
                                <span class="nav-text"><i class="fas fa-box-open"></i> Products</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{route('showAllSubscribers')}}">
                                <span class="nav-text"><i class="fas fa-user-check"></i> Subscribers</span>
                              </a>
                            </li>

                            <li >
                              <a class="sidenav-item-link" href="{{route('showAllMessages')}}">
                                <span class="nav-text"><i class="fas fa-envelope"></i> Messages</span>
                              </a>
                            </li>

                      </div>
                    </ul>
                  </li>

                  <!-- Simple Sidebar with internal options -->
                  <!-- <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">UI Elements</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                            <li >
                              <a class="sidenav-item-link" href="{{url('dashboard/showAllTestimonials')}}">
                                <span class="nav-text"><i class="fas fa-smile"></i> Testimonials</span>

                                <span class="badge badge-success">new</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li> -->

                  <!-- Complex structured sidebar with complex options -->
                  <!-- <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">UI Elements</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                            aria-expanded="false" aria-controls="components">
                            <span class="nav-text">Components</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="components">
                            <div class="sub-menu">

                              <li >
                                <a href="alert.html">Alert</a>
                              </li>

                              <li >
                                <a href="badge.html">Badge</a>
                              </li>

                              <li >
                                <a href="breadcrumb.html">Breadcrumb</a>
                              </li>

                              <li >
                                <a href="button-default.html">Button Default</a>
                              </li>

                              <li >
                                <a href="button-dropdown.html">Button Dropdown</a>
                              </li>

                              <li >
                                <a href="button-group.html">Button Group</a>
                              </li>

                              <li >
                                <a href="button-social.html">Button Social</a>
                              </li>

                              <li >
                                <a href="button-loading.html">Button Loading</a>
                              </li>

                              <li >
                                <a href="card.html">Card</a>
                              </li>

                              <li >
                                <a href="carousel.html">Carousel</a>
                              </li>

                              <li >
                                <a href="collapse.html">Collapse</a>
                              </li>

                              <li >
                                <a href="list-group.html">List Group</a>
                              </li>

                              <li >
                                <a href="modal.html">Modal</a>
                              </li>

                              <li >
                                <a href="pagination.html">Pagination</a>
                              </li>

                              <li >
                                <a href="popover-tooltip.html">Popover & Tooltip</a>
                              </li>

                              <li >
                                <a href="progress-bar.html">Progress Bar</a>
                              </li>

                              <li >
                                <a href="spinner.html">Spinner</a>
                              </li>

                              <li >
                                <a href="switcher.html">Switcher</a>
                              </li>

                              <li >
                                <a href="table.html">Table</a>
                              </li>

                              <li >
                                <a href="tab.html">Tab</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                            aria-expanded="false" aria-controls="icons">
                            <span class="nav-text">Icons</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="icons">
                            <div class="sub-menu">

                              <li >
                                <a href="material-icon.html">Material Icon</a>
                              </li>

                              <li >
                                <a href="flag-icon.html">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                            aria-expanded="false" aria-controls="forms">
                            <span class="nav-text">Forms</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="forms">
                            <div class="sub-menu">

                              <li >
                                <a href="basic-input.html">Basic Input</a>
                              </li>

                              <li >
                                <a href="input-group.html">Input Group</a>
                              </li>

                              <li >
                                <a href="checkbox-radio.html">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href="form-validation.html">Form Validation</a>
                              </li>

                              <li >
                                <a href="form-advance.html">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                            aria-expanded="false" aria-controls="maps">
                            <span class="nav-text">Maps</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="maps">
                            <div class="sub-menu">

                              <li >
                                <a href="google-map.html">Google Map</a>
                              </li>

                              <li >
                                <a href="vector-map.html">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                            aria-expanded="false" aria-controls="widgets">
                            <span class="nav-text">Widgets</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="widgets">
                            <div class="sub-menu">

                              <li >
                                <a href="general-widget.html">General Widget</a>
                              </li>

                              <li >
                                <a href="chart-widget.html">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                      </div>
                    </ul>
                  </li> -->

              </ul>

            </div>
          </div>
        </aside>
