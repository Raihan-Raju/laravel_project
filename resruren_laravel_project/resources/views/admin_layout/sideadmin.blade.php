<div class="sidebar sidebar-style-2" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{url('/')}}" class="logo">
              <img
                src="assets/img/kaiadmin/Salsabillogo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="30"
              />
            </a>

            <!-- <a href="{{url('/')}}" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Salcabil Restora</h1>
                   
                </a> -->
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="{{url('/dashbord')}}"> <i class="fas fa-home"></i> <p>Dashboard</p></a>
               
              </li>
            
             
             
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Item's</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{url('/additems')}}">
                        <span class="sub-item">Item's-add</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/manageitems')}}">
                        <span class="sub-item">Item's-manege</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-pen-square"></i>
                  <p>Seles/ Invoice</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{url('/selesadd')}}">
                        <span class="sub-item">Seles add</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/selesmanage')}}">
                        <span class="sub-item">Seles manege</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/customermanage')}}">
                        <span class="sub-item">Customer manege</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-pen-square"></i>
                  <p>Cost</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{url('/addcost')}}">
                        <span class="sub-item">Cost Add</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/managecost')}}">
                        <span class="sub-item">Cost Manege</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Booking</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{url('/booking')}}">
                        <span class="sub-item">Booking_add</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/managebooking')}}">
                        <span class="sub-item">Booking_manege</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="widgets.html">
                  <i class="fas fa-desktop"></i>
                  <p>Order_Running</p>
                  <span class="badge badge-success">4</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Company_Managment</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Staff</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="{{url('/addstaff')}}">
                              <span class="sub-item">Staff_Add</span>
                            </a>
                          </li>
                          <li>
                            <a href="{{url('/managestaff')}}">
                              <span class="sub-item">Staff_manage</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                   
                  </ul>
                </div>
              </li>
            </ul>
            
          </div>
        </div>
      </div>