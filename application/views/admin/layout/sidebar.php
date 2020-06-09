
        <div class="col-md-3 left_col custom-sidebar-col">
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
            <?php if($_SESSION["user_type"]=='admin'){ ?>
            <!--Super Admin sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
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
                      <li><a href="<?php echo base_url('admin/vendors'); ?>">List</a></li>
                      <li><a href="<?php echo base_url('admin/vendor_add'); ?>">Add</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home Module <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="sub-item" href="<?php echo base_url('admin/category_list'); ?>">Home Category</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/subcategory_list'); ?>">Sub Category</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/home_banners'); ?>">Ad Banners</a></li>
                    </ul>

                  </li>
                  <li><a><i class="fa fa-eraser"></i> Inventory<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a class="sub-item" href="<?php echo base_url('admin/home_category'); ?>">Home Module</a></li> -->
                      <li><a class="sub-item" href="<?php echo base_url('admin/category_list'); ?>">Product Category</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/brand_list'); ?>">Brands</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/manufacturer_list'); ?>">Manufacturer</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/addSingleProduct'); ?>">Add Product</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/product_form_list'); ?>">Product Form</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/all_product'); ?>">All Product</a></li>
                      <li><a class="sub-item" href="#">Linking</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('admin/saltComposition_list'); ?>">Salt Composition</a></li>
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

            <?php }
            elseif($_SESSION["user_type"]=='vendor'){ ?>
            <!--Vendor sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">                
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('vendor/vendor_dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Staff <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">List </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-eraser"></i> Inventory<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('vendor/addSingleProduct'); ?>">Add Product</a></li>
                      <li><a class="sub-item" href="<?php echo base_url('vendor/subcategory_list'); ?>">Sub Category</a></li>
                      <li><a href="<?php echo base_url('vendor/category_list'); ?>">Product Category</a></li>
                      <li><a href="<?php echo base_url('vendor/vendor_bulk_upload'); ?>">Bulk Upload</a></li>
                      <li><a href="<?php echo base_url('vendor/manufacturer_list'); ?>">Manufacturer</a></li>
                      <li><a href="<?php echo base_url('vendor/product_form_list'); ?>">Product Form</a></li>
                      <li><a href="<?php echo base_url('vendor/all_product'); ?>">All Product</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Orders</a>                   
                  </li>
                  <li><a><i class="fa fa-cog"></i>Settings</a>                  
                  </li>
                </ul>
              </div>
            </div>
            <?php } ?>
            <!-- /Vendor sidebar menu -->

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