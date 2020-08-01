<div class="info-tabs">
  <div class="container">
    <div class="hambergar"> 
      <div class="toolbox-left">
        <h3> <a>Home</a> > <a href=""> Profile </a></h3> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="nav nav-tabs flex-column profile-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Profile" role="tab" aria-controls="v-pills-home" aria-selected="true">Your Profile</a>
          <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#Order" role="tab" aria-controls="v-pills-profile" aria-selected="false">Your Order</a> -->
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#Password" role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</a>
       </div>
      </div>      
      <div class="col-md-9">
        
        <form id="edit_user_details" method="post" action="<?php echo base_url() ?>/user/update_profile/<?= base64_encode($this->session->userdata('user_id')); ?>" enctype="multipart/form-data">    
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="profile-tab-heading">
                <h3>Your Profile</h3>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="upload-btn-img">
                      <img <?php if(!empty($edit_data->image)){ ?>src="<?php echo base_url(); ?>assets/user-profile/<?= $profile->image; ?>" <?php }else { ?>  src="https://tricityescaperooms.com/wp-content/uploads/2018/01/person-placeholder-male-5.jpg" <?php } ?>
                          class="img-thumbnail p-0 m-0" style="" alt="user profile image">
                      <input type="file" name="profile_image" onchange="showThumbnail(this)" />
                      <input type="hidden" name="edit_profile_image" value="<?php echo $edit_data->image ?>">
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="col-md-6">
                    <label class="fieldlabels chg-psw-input">First Name</label>
                    <input type="text" name="full_name" value="<?= $edit_data->full_name; ?>" class="form-control input-update">
                  </div>
                  <div class="col-md-6">
                    <label class="fieldlabels chg-psw-input">Last Name</label>
                    <input type="text" name="last_name" value="<?= $edit_data->last_name; ?>" class="form-control input-update">
                  </div>
                  <div class="col-md-6">
                    <label class="fieldlabels chg-psw-input">Mobile Number</label>
                    <input class="form-control input-update" id="show_mobile" type="tel" name="mobile" minlength="10" maxlength="10" value="<?= $edit_data->mobile; ?>" <?php if(!empty($edit_data->mobile)){ echo "readonly"; }?> >
                    <?php if(!empty($edit_data->mobile)){ ?>
                    <a onclick="updateMobile()" data-toggle="modal" data-target="#mobileUpdate" class="update-text">Update Mobile Number</a>
                    <?php } ?>
                  </div>
                  <div class="col-md-6">
                    <label class="fieldlabels chg-psw-input">Email</label>
                    <input type="text" name="email" class="form-control input-update" value="<?= $edit_data->email; ?>">
                    <?php if(!empty($edit_data->email)){ ?>
                    <a onclick="updateEmail()" data-toggle="modal" data-target="#emailUpdate" class="update-text">Update Email</a>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <label class="fieldlabels">Address</label>
                  <textarea name="address" class="form-control" rows="6" cols="50"><?= $edit_data->address; ?> </textarea >
                </div>
                <div class="submit-btn">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Password" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div id="dvPassport">
                <div class="profile-tab-heading">
                  <h3>Change Password</h3>
                </div>
                <label class="fieldlabels chg-psw-input">Password</label>
                <input type="password" id="txtNewPassword" name="password" class="form-control input-update"/>
                <label class="fieldlabels chg-psw-input">Confirm Password</label>
                <input type="password" onChange="checkPasswordMatch();" id="txtConfirmPassword" class="form-control input-update"/>
              </div>
              <span class="input-error-message"><div class="registrationFormAlert" id="divCheckPasswordMatch"></div></span>
              <div class="submit-btn">
                <button type="submit"  class="btn btn-primary submit_button">Submit</button>
              </div>
              <div id="AddPassport">
                  
              </div>
            </div> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="emailUpdate" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <form id="email_verification" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Update Email</h4>
          <button onclick="closeModel()" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class="text-red" id="error-text-otp"></p>
          <p class="text-green" id="success-text"></p>          
          <div class="email-update-section">            
            <div class="form-group label-float-top">
              <label class="fieldlabels chg-psw-input" for="email">Email</label>
              <input onkeyup="checkExistEmail()" value="<?= $edit_data->email; ?>" id="email" type="email" class="form-control input-update" name="update_email">
              <span class="input-error-message error-position-ab" id="email-error"></span>          
            </div>
          </div>
          <div class="verification-code-section">       
            <div class="form-group">
              <input type="text" minlength="6" maxlength="6" class="form-control control-float-top" id="verification_code"  name="verification_code" placeholder="Enter verification code" autocomplete="off">
            </div>    
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="submitEmailFunction(event)" class="btn btn-primary" id="email-send-button">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="mobileUpdate" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <form id="mobile_verification" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Update Mobile Number</h4>
          <button onclick="closeModel()" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class="text-red" id="error-text-otp-mobile"></p>
          <p class="text-green" id="success-text-mobile"></p>
          <div class="mobile-update-section">           
            <div class="form-group label-float-top">
              <label for="Mobile" class="fieldlabels chg-psw-input">Mobile</label>
              <input onkeyup="checkExistMobile()" value="<?= $edit_data->mobile; ?>" id="mobile" class="form-control input-update" type="tel" name="update_mobile" minlength="10" maxlength="10">
              <span class="input-error-message " id="mobile-error"></span>      
            </div>
          </div>          
          <div class="verification-code-section">       
            <div class="form-group">
              <input type="text" minlength="6" maxlength="6" class="form-control input-update" id="verification_code" name="verification_code" placeholder="Enter verification code" autocomplete="off">
            </div>    
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="submitMobileFunction(event)" class="btn btn-primary" id="mobile-send-button">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                $("#AddPassport").hide();
            } else {
                $("#dvPassport").hide();
                $("#AddPassport").show();
            }
        });
    });
  const showThumbnail = (btnHasClicked) => {
        const imgTag = btnHasClicked.parentNode.querySelector('.img-thumbnail');
        const file = btnHasClicked.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            imgTag.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imgTag.src = "";
        }
    }
    function checkPasswordMatch() {
      var password = $("#txtNewPassword").val();
      var confirmPassword = $("#txtConfirmPassword").val(); 
      
      if (password == confirmPassword && confirmPassword!=''){      
          $("#divCheckPasswordMatch").html("");
          $('.submit_button').removeClass('btn-disable');
      }
      else if(password != confirmPassword && confirmPassword!='' && password!=''){
          $("#divCheckPasswordMatch").html("Passwords do not match!");
          $('.submit_button').addClass('btn-disable');
      }else{
          $('.submit_button').removeClass('btn-disable');
          $("#divCheckPasswordMatch").html("");
      }

      $(document).ready(function () {      
         $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);       
      });
    }
    function updateEmail(){       
      $('.email-update-section').show();
    }
    function updateMobile(){    
      $('.mobile-update-section').show();
    }
    function closeModel(){
      $('.email-update-section').hide();
      $('.mobile-update-section').hide();
      $('.verification-code-section').hide();
    }
    window.intlTelInput(mobile, {
      initialCountry: 'in',      
      onlyCountries: ['in','us','ch', 'ca', 'do'],
      preferredCountries: ["in", 'us'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    window.intlTelInput(show_mobile, {
      initialCountry: 'in',      
      onlyCountries: ['in','us','ch', 'ca', 'do'],
      preferredCountries: ["in", 'us'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });

    $(document).ready(function(){
      $('#mobile-send-button').html('Update');       
      $('#email-send-button').html('Update');       


      $('.email-update-section').hide();
      $('.mobile-update-section').hide();
      $('.verification-code-section').hide();
      $('.front-end-success').hide();
      $('.front-end-error-otp').hide();



      $('.front-end-validation').hide();
      $('#submit_form').click(function(){
        var email_exist = document.getElementById("email-error").innerHTML;
        var mobile_exist = document.getElementById("mobile-error").innerHTML;
        var error = ''
        if(mobile_exist!=''){
          error += '<p>Mobile number already exist.</p>';
        }
        if(email_exist!=''){
          error += '<p>The Email already exist.</p>';
        }
        if(error!=''){
          $("#error-text").html(error);     
          $('.front-end-validation').show();
          window.scrollTo(0, 0);
        }else{
          $('#edit_personal_details').submit();
        }
      })
  }); 

    function checkExistMobile(argument) {
      var mobile        = $("#mobile").val();     
      var mobile =  $("#mobile").val();   
      event.preventDefault();
          $.ajax({
            url:"<?php echo base_url(); ?>/vendor/checkExistMobile",
            method:"POST",
            dataType: 'JSON',
            data: {mobile: mobile,user_id:"<?= $this->session->userdata('user_id');?>"},          
            success:function(data){                    
              if(data.status==1){
                $("#mobile-error").html(data.message);              
              }else{
                $("#mobile-error").html("");              
              }
              // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
            }
          })
        
    }
    function checkExistEmail(argument) {
      var email =  $("#email").val();     
      event.preventDefault();
          $.ajax({
            url:"<?php echo base_url(); ?>/vendor/checkExistEmail",
            method:"POST",
            dataType: 'JSON',
            data: {email: email,user_id:"<?= $this->session->userdata('user_id');?>"},          
            success:function(data){                    
              if(data.status==1){
                $("#email-error").html(data.message);             
              }else{
                $("#email-error").html("");             
              }
              // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
            }
          })
        
    }
    function submitEmailFunction(event) {
    var email = $("#email").val();
    var email_exist = document.getElementById("email-error").innerHTML;    
    if(email_exist==''){      
      
      event.preventDefault();
      $.ajax({
        url:"<?php echo base_url(); ?>/vendor/updateEmail",
        method:"POST",
        dataType: 'JSON',
        data: $("#email_verification").serialize(),        
        success:function(data){                    
          if(data.stage==1 || data.stage==2){            
            $('.verification-code-section').show("slow");                   
            $('.email-update-section').hide();       
            // $('.custom-add').addClass("login-block");            
            $('#email-send-button').html('Verify');                   
            $('#success-text').html(data.message);       
            $('.front-end-success').show("slow");       
            // setInterval(function () {
            //     $('#success-text').fadeOut("slow");
            // }, 5000);

          }else if(data.stage==3){
            $('#error-text-otp').html(data.message);                   
            $('#error-text-otp').show();
            $('#success-text').hide();

            setInterval(function () {
                $('#error-text-otp').fadeOut("slow");
            }, 7000);
            
          }else if(data.stage==4){
            location.reload();
            $('#emailUpdate').modal('hide');
          }else if(data.status==0){
              $("#error-text").html(data.message);                 
              $('.front-end-error').show();
              setInterval(function () {
                $('.front-end-error').fadeOut("slow");
              }, 7000);
          }
          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
        }
      })



      // $('#registratio_form').submit()
    }else{
      $("#error-text").html('Please fill required details');     
        $('.front-end-error').show();
        window.scrollTo(0, 0);
        setInterval(function () {
                $('.front-end-error').fadeOut("slow");
        }, 7000);

    }
  }
  function submitMobileFunction(event) {
    var mobile = $("#mobile").val();
    var mobile_exist = document.getElementById("mobile-error").innerHTML;    
    if(mobile_exist==''){      
      
      event.preventDefault();
      $.ajax({
        url:"<?php echo base_url(); ?>/vendor/updateMobile",
        method:"POST",
        dataType: 'JSON',
        data: $("#mobile_verification").serialize(),        
        success:function(data){                    
          if(data.stage==1 || data.stage==2){            
            $('.verification-code-section').show("slow");       
            $('.mobile-update-section').hide();                   
            $('#mobile-send-button').html('Verify');       
            $('#success-text-mobile').html(data.message);       
            $('.front-end-success').show("slow");       
            // setInterval(function () {
            //     $('#success-text-mobile').fadeOut("slow");
            // }, 5000);

          }else if(data.stage==3){
            $('#error-text-otp-mobile').html(data.message);       
            $('#error-text-otp-mobile').show();
            $('#success-text-mobile').hide();

            setInterval(function () {
                $('#error-text-otp-mobile').fadeOut("slow");
            }, 7000);
            
          }else if(data.stage==4){
              $('#mobileUpdate').modal('hide');
              location.reload();
          }else if(data.status==0){
              $("#error-text").html(data.message);                 
              $('.front-end-error').show();
              setInterval(function () {
                $('.front-end-error').fadeOut("slow");
              }, 7000);
          }
          // window.location.href = "<?php echo base_url() ?>vendor/bulk_upload";        
        }
      })



      // $('#registratio_form').submit()
    }else{
      $("#error-text").html('Please fill required details');     
        $('.front-end-error').show();
        window.scrollTo(0, 0);
        setInterval(function () {
                $('.front-end-error').fadeOut("slow");
        }, 7000);

    }
  }
    

</script>