

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <form id="msform" method="post" action="<?php echo base_url(''); ?>">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Delivery Address</strong></li>
                        <li id="payment"><strong>Payment</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Delivery Address</h2>
                                </div>
                            </div> 
                            <div >
                                <label class="fieldlabels"><!-- <?php echo $user_address_row->address;?> --></label> 
                                <input type="hidden" name="address_1" value="<?php // echo $user_address_row->address;?>">
                                <input type="checkbox" name="address" style="margin-left: -48%;"  placeholder="Address" class="form-control" />
                                <button type="button" id="btn" class="flex-c-m stext-101 cl0 bg1 hov-btn1 p-lr-15 trans-04 ">Add new address</button>
                                    <br/><br/>
                                    <div id="element">
                                       <h4>Add a new address</h4>                            
                                        <label for="password">Pincode</label>
                                        <input id="pin" name="pin" type="text" style="width: 50%;" class="form-control " minlength="6" maxlength="6">
                                        <label for="password">Full Address</label>
                                        <input id="address" name="address" style="width: 50%;" type="text" class="form-control "> 
                                    </div>
                            </div>
                            <div >
                               <select name="address" class="form-control" style="width: 50%;">
                                <option>Select Your Address</option>
                                <?php //foreach ($user_address as $row => $value) {
                                ?>
                                <option class="form-control"><!-- <?php echo $value->address ?> --></option>
                                <?php// }?>
                                </select>
                            </div>
                            
                        </div> 
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Payment Mode</h2>
                                </div>
                            </div> 
                            <div>
                                <label>Online</label> 
                                <input type="radio"  style="margin-left: -48%;" name="payment_mode" class="form-control" value="online" required="">
                                <label>Cash On Delivery</label>
                                <input type="radio"  style="margin-left: -48%;" name="payment_mode" class="form-control" value="cod" required=""> 
                            </div>
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                               
                            </div> <!-- <br><br>
 -->                            <!-- <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div> -->
                            <div class="table">
                              <div class="layout-inline row th">
                                <div class="col col-pro">Product</div>
                                <div class="col col-price align-center "> 
                                  Price
                                </div>
                                <div class="col col-qty align-center">QTY</div>
                                <div class="col">VAT</div>
                                <div class="col">Total</div>
                              </div>
                               <div class="layout-inline row">
                                
                                <div class="col col-pro layout-inline">
                                  <img style="width: 50%;" src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="kitten" />
                                  <p>Curious Little Begger</p>
                                </div>
                                
                                <div class="col col-price col-numeric align-center ">
                                  <p>₹59.99</p>
                                </div>

                                <div class="col col-qty layout-inline">
                                    <input type="numeric" value="3" readonly="" style="margin-top: 20px;" />
                                </div>
                                
                                <div class="col col-vat col-numeric">
                                  <p>₹2.95</p>          
                                </div>
                                 <div class="col col-total col-numeric">  
                                   <p>₹182.95</p>
                                 </div>         
                              </div>
                          
                               <div class="cart-total">
                                 <span class="heading-total">Total Item</span><br><br>
                                 <span class="heading-total">Total </span> 
                                 </div>   
                            </div>
                            <input type="button" name="next" class="next action-button" value="Submit" />

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        //opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function()
    {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep)
    {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
        .css("width",percent+"%")
        }

        $(".submit").click(function(){
        return false;
        })
    });

    $(document).ready(function()
    {
        $('#element').hide();
        $('#btn').click(function(){

             $( "#pin" ).attr("required", "true");
             $( "#address" ).attr("required", "true");
           
      $('#element').show();



        })
    });

    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });

   
</script>