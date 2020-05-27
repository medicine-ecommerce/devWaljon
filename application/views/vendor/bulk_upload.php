  			<style type="text/css">
  				@import "compass/css3";

*{margin:0;padding:0;}
#overlay{ /* we set all of the properties for our overlay */
    height:80%;
    width:80%;
    margin:0 auto;
    background:white;
    color:black;
    padding:10px;
    position:absolute;
    top:5%;
    left:10%;
    z-index:1000;
    display:none;
    /* CSS 3 */
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -o-border-radius:10px;
    border-radius:10px;
}

#mask{ /* create are mask */
    position:fixed;
    top:0;
    left:0;
    background:rgba(0,0,0,0.6);
    z-index:500;
    width:100%;
    height:100%;
    display:none;
}
/* use :target to look for a link to the overlay then we find our mask */
#overlay:target, #overlay:target + #mask{
    display:block;
    opacity:1;
}
.close{ /* to make a nice looking pure CSS3 close button */
    display:block;
    position:absolute;
    top:-20px;
    right:-20px;
    background:red;
    color:white;
    height:40px;
    width:40px;
    line-height:40px;
    font-size:35px;
    text-decoration:none;
    text-align:center;
    font-weight:bold;
    -webkit-border-radius:40px;
    -moz-border-radius:40px;
    -o-border-radius:40px;
    border-radius:40px;
}
#open-overlay{ /* open the overlay */
/*    padding:10px 5px;
*/    /*background:blue;*/
    color:white;
    text-decoration:none;
    display:inline-block;
/*    margin:20px;
*/    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    -o-border-radius:10px;
    border-radius:10px;
}
  			</style>
  			<script src="<?php echo base_url(); ?>vendor/countrystatecity.js"></script>
  			<div class="right_col" role="main">
               <div class="">
                  <div class="page-title">
                     <div class="title_left">
                        <h3> Inventory ><small>Image Upload</small></h3>
                     </div>
                     <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                           
                        </div>
                     </div>
                  </div>
                  <div class="row" style="display: block;">
                     <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                           <div class="x_title">
                              <ul class="nav navbar-right panel_toolbox">
                                 
                              </ul>
                           </div>
                           <div class="x_content">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th class="column-title">Image</th>
                                       <th>Product ID</th>
                                       <th>Product Name</th>
                                       <th>Variety</th>
                                       <th>MAnufacturer</th>
                                       <th>Product For</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><a href="#overlay" id="open-overlay"><img style="    width: 50px;" src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');  ?>"></a></td>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                       <td>@twitter</td>
                                       <td>
                                       		<div class="form-group label-float-top">
									            <select class="form-control control-float-top" >
									               <option></option>
									               <option>List 1</option>
									               <option>List 2</option>
									               <option>List 3</option>
									            </select>
									            <label for="Address">Product Category</label>
									        </div>
								     	</td>
                                    </tr>
									<tr>
                                       <td><a href="#overlay" id="open-overlay"><img style="    width: 50px;" src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');  ?>"></a></td>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                       <td>@twitter</td>
                                       <td>
                                       		<div class="form-group label-float-top">
									            <select class="form-control control-float-top" >
									               <option></option>
									               <option>List 1</option>
									               <option>List 2</option>
									               <option>List 3</option>
									            </select>
									            <label for="Address">Product Category</label>
									        </div>
								     	</td>
                                    </tr>
                                    <tr>
                                       <td><a href="#overlay" id="open-overlay"><img style="    width: 50px;" src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');  ?>"></a></td>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                       <td>@twitter</td>
                                       <td>
                                       		<div class="form-group label-float-top">
									            <select class="form-control control-float-top" >
									               <option></option>
									               <option>List 1</option>
									               <option>List 2</option>
									               <option>List 3</option>
									            </select>
									            <label for="Address">Product Category</label>
									        </div>
								     	</td>
                                    </tr>
                                    <tr>
                                       <td><a href="#overlay" id="open-overlay"><img style="    width: 50px;" src="<?php echo base_url('assets/img/imgpsh_fullsize_anim.png');  ?>"></a></td>
                                       <td>Larry</td>
                                       <td>the Bird</td>
                                       <td>@twitter</td>
                                       <td>@twitter</td>
                                       <td>
                                       		<div class="form-group label-float-top">
									            <select class="form-control control-float-top" >
									               <option></option>
									               <option>List 1</option>
									               <option>List 2</option>
									               <option>List 3</option>
									            </select>
									            <label for="Address">Product Category</label>
									        </div>
								     	</td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="">
                  
                  <div class="row" style="display: block;">
                     <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                          <div class="title_left">
                     </div>
                     <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                           
                        </div>
                     </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="overlay">
    <a href="#" class="close">&times;</a>
   
    
    <div class="home-product-tabs">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist" >
                <li class="nav-item">
                    <a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">NEW ITEMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">BEST ITEMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="old-products-tab" data-toggle="tab" href="#old-products" role="tab" aria-controls="old-products" aria-selected="false">HOT ITEMS</a>
                </li>
            </ul>
        </div><!-- End .container -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">	<div class="form-group">
				<label class="control-label col-md-3">Upload Image</label>
				<div class="col-md-8">
					<div class="row">
						<div id="coba"></div>
					</div>
				</div>
			</div>
                
            </div><!-- End .tab-pane -->
            <div class="tab-pane fade" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
            	<div class="form-group">
				<label class="control-label col-md-3">Upload Image</label>
				<div class="col-md-8">
					<div class="row">
						<div id="coba1"></div>
					</div>
				</div>
			</div>
                
            </div><!-- End .tab-pane -->
            <div class="tab-pane fade" id="old-products" role="tabpanel" aria-labelledby="old-products-tab">
            	<div class="form-group">
				<label class="control-label col-md-3">Upload Image</label>
				<div class="col-md-8">
					<div class="row">
						<div id="coba2"></div>
					</div>
				</div>
			</div>
               
            </div>
        </div><!-- End .tab-content -->
    </div>
    
</div>
<script type="text/javascript">
		$(function(){

			$("#coba").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				directUpload : {
					status: true,
					loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
					url: '../c.php',
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){
					},
					error : function(jqXHR, textStatus, errorThrown){
					}
				}
			});
		});
		$(function(){

			$("#coba1").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				directUpload : {
					status: true,
					loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
					url: '../c.php',
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){
					},
					error : function(jqXHR, textStatus, errorThrown){
					}
				}
			});
		});
		$(function(){

			$("#coba2").spartanMultiImagePicker({
				fieldName:        'fileUpload[]',
				directUpload : {
					status: true,
					loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
					url: '../c.php',
					additionalParam : {
						name : 'My Name'
					},
					success : function(data, textStatus, jqXHR){
					},
					error : function(jqXHR, textStatus, errorThrown){
					}
				}
			});
		});
	</script>