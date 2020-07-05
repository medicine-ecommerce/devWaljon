<script src="<?php echo base_url(); ?>assets/js/countrystatecity.js"></script>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <form id="msform" method="post" action="<?php echo base_url(''); ?>">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Product Details</strong></li>
                        <li id="payment"><strong>Delivery Address</strong></li>
                        <li id="confirm"><strong>Payment</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="table checkout-pages">
                                  <div class="layout-inline cart-heading row th ">
                                    <div class="col col-pro">Product</div>
                                    <div class="col col-price align-center "> 
                                      Price
                                    </div>
                                    <div class="col col-qty align-center">QTY</div>
                                    <div class="col">VAT</div>
                                    <div class="col">Total</div>
                                  </div>
                                  <?php       
                                  if(!empty($this->cart->contents())){ 
                                  foreach ($this->cart->contents() as $value) { ?>
                                  <div class="layout-inline cart-content row">        
                                    <div class="col col-pro layout-inline">
                                      <img style="width: 50%;" src="<?= base_url().$value['image']; ?>" alt="kitten" />
                                      <p><?= $value['name']; ?></p>
                                    </div>        
                                    <div class="col col-price col-numeric align-center ">
                                      <p><i class='fas fa-rupee-sign'></i> <?= $value['price']; ?></p>
                                    </div>
                                    <div class="col col-qty layout-inline">
                                      <div class="def-number-input number-input safari_only add-quantity cart-update-quantity">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'minus')" class="minus"></button>
                                        <input class="quantity" min="0" value="<?= $value['qty']; ?>" name="quantity" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart(<?= $value['id']; ?>,this.parentNode.querySelector('input[value]'),'plus')" class="plus"></button>
                                      </div>          
                                    </div>        
                                    <div class="col col-vat col-numeric">
                                      <p><i class='fas fa-rupee-sign'></i> 2.95</p>          
                                    </div>
                                     <div class="col col-total col-numeric">  
                                       <p><i class='fas fa-rupee-sign'></i><?= $value['subtotal'] ?></p>
                                     </div>         
                                  </div>  
                                  <?php }}else{ echo "No product in cart"; } ?>
                                  <div class="cart-total">
                                    <span class="heading-total">Total Item <span><?php  ?> </span> </span><br><br>
                                    <span class="heading-total">Total </span> 
                                  </div>   
                                </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    
                    <fieldset>
                      <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Delivery Address</h2>
                                </div>
                            </div>
                             <div id="element2">
                               <select name="address_id" id="address_id" class="form-control input-update" style="width: 50%;">
                                <option value="">Select Your Address</option>
                                <?php foreach ($user_address as $row => $value) {
                                ?>
                                <option value="<?php echo $value->id; ?>"> <?php echo $value->address.' '.$value->state.' '.$value->country; ?> </option>
                                <?php }?>
                                </select>
                            </div> 
                            <br/><br/>
                            <div >
                                <button type="button" id="btn" class="btn btn-primary add-address">Add new address</button>
                                    <br/><br/>
                                    <div id="element" class="address-div">
                                       <h4>Add a new address</h4> 
                                       <div class="col-md-4">
                                            <div class="form-group label-float-top">
                                                <label for="email" class="fieldlabels chg-psw-input">Country</label>                  
                                                <select name="country" class="form-control input-update" id="countryId" value="<?php echo set_value('country')?>">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group label-float-top find-state">
                                                <label class="fieldlabels chg-psw-input" for="country">State</label>
                                                <select name="state" class="form-control input-update" id="stateId" value="<?php echo set_value('state')?>">                      
                                                </select>       
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group label-float-top">
                                                <label for="country" class="fieldlabels chg-psw-input">City</label>
                                                <select name="city" class="form-control input-update" id="cityId" value="<?php echo set_value('city')?>">                     
                                                </select>
                                            </div>
                                        </div>
                                        <label for="password" class="fieldlabels chg-psw-input">Address</label>
                                        <input type="text" name="address" class="form-control input-update" name="Address">

                                        <!--                             
                                        <label for="password">Pincode</label>
                                        <input id="pin" name="pin" type="text" style="width: 50%;" class="form-control " minlength="6" maxlength="6">
                                        <label for="password">Full Address</label>
                                        <input id="address" name="address" style="width: 50%;" type="text" class="form-control ">  -->
                                    </div>
                            </div>                            
                        </div> 
                        <input type="button" name="next" onclick="submitAddress()" class="next action-button" value="Next" />

                          <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                      <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Payment Mode</h2>
                                </div>
                            </div> 
                            <div>
                                <label class="fieldlabels chg-psw-input">Online</label> 
                                <input type="radio"  style="margin-left: -48%;" name="payment_mode" class="form-control input-border-none" value="online" required="">
                                <label class="fieldlabels chg-psw-input">Cash On Delivery</label>
                                <input type="radio"  style="margin-left: -48%;" name="payment_mode" class="form-control input-border-none" value="cod" required=""> 
                            </div>
                        </div>
                        <!-- <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                               
                            </div> 
                            <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> 
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                            
                            <input type="button" name="next" class="next action-button" value="Submit" />

                        </div> -->
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
      $('#element2').hide();



        })
    });

    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted!");
        }
    });

    function submitAddress() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('user/SaveUserAdddress/'); ?>',
            data: $("#msform").serialize(),
            beforeSend: function(){
              $('.loading').show();
            },
            success: function(html){
                $('#address_id').val(html);
            }
        });
    }
   
</script>