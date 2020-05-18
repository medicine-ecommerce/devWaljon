
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view admin-side-bar">
            <!-- <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div> -->

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />
            <!--Super Admin sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-user"></i> Doctor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="sub-item" href="#">List </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Vendor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="sub-item" href="#">List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home Module <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="sub-item" href="#">Home Category</a></li>
                      <li><a class="sub-item" href="#">Ad Banners</a></li>
                    </ul>

                  </li>
                  <li><a><i class="fa fa-eraser"></i> Inventory<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="sub-item" href="#">Home Module</a></li>
                      <li><a class="sub-item" href="#">Product Category</a></li>
                      <li><a class="sub-item" href="#">Brands</a></li>
                      <li><a class="sub-item" href="#">Manufacturer</a></li>
                      <li><a class="sub-item" href="#">Product Form</a></li>
                      <li><a class="sub-item" href="#">Linking</a></li>
                      <li><a class="sub-item" href="#">Salt Composition</a></li>
                      <li><a class="sub-item" href="#">All Inventory</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Orders</a>                   
                  </li>
                  <li><a><i class="fa fa-cog"></i>Settings</a>                  
                  </li>
                </ul>
              </div>
            </div>
            <!--End Super Admin sidebar menu -->


            <!--Vendor sidebar menu -->
            <!-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  <li><a><i class="fa fa-user"></i> Doctor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">List </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Vendor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">List</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home Module <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Home Category</a></li>
                      <li><a href="index.html">Ad Banners</a></li>
                    </ul>

                  </li>
                  <li><a><i class="fa fa-eraser"></i> Inventory<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Home Module</a></li>
                      <li><a href="index.html">Product Category</a></li>
                      <li><a href="index.html">Brands</a></li>
                      <li><a href="index.html">Manufacturer</a></li>
                      <li><a href="index.html">Product Form</a></li>
                      <li><a href="index.html">Linking</a></li>
                      <li><a href="index.html">Salt Composition</a></li>
                      <li><a href="index.html">All Inventory</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Orders</a>                   
                  </li>
                  <li><a><i class="fa fa-cog"></i>Settings</a>                  
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- /Vendor sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('admin/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>        
        <script type="text/javascript">
          $(document).ready(function(){
            $(".sub-item").click(function(){              
               $(".sub-item").removeClass("active")
               $(this).addClass("active");                
              $(this).parent("li").addClass("active");                
              // alert($(this).attr("data-value"));
            });
          });
              
        </script>