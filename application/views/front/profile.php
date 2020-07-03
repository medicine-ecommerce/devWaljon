<div class="info-tabs">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="nav nav-tabs flex-column profile-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Profile" role="tab" aria-controls="v-pills-home" aria-selected="true">Your Profile</a>
          <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#Order" role="tab" aria-controls="v-pills-profile" aria-selected="false">Your Order</a> -->
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#Password" role="tab" aria-controls="v-pills-settings" aria-selected="false">Change Password</a>
       </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="profile-tab-heading">
              <h3>Your Profile</h3>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="upload-btn-img">
                    <img src="https://tricityescaperooms.com/wp-content/uploads/2018/01/person-placeholder-male-5.jpg"
                        class="img-thumbnail p-0 m-0" style="" alt="user profile image">
                    <input type="file" name="myfile[]" onchange="showThumbnail(this)" />
                </div>
              </div>
              <div class="col-md-9">
                <div class="col-md-6">
                  <label class="fieldlabels chg-psw-input">First Name</label>
                  <input type="text" name="first_name" class="form-control input-update">
                </div>
                <div class="col-md-6">
                  <label class="fieldlabels chg-psw-input">Last Name</label>
                  <input type="text" name="Last_name" class="form-control input-update">
                </div>
                <div class="col-md-6">
                  <label class="fieldlabels chg-psw-input">Mobile Number</label>
                  <input class="form-control input-update" id="show_mobile" type="tel" name="mobile" minlength="10" maxlength="10" readonly="">
                  <a onclick="updateMobile()" data-toggle="modal" data-target="#mobileUpdate" class="update-text">Update Mobile Number</a>
                </div>
                <div class="col-md-6">
                  <label class="fieldlabels chg-psw-input">Email</label>
                  <input type="text" name="email" class="form-control input-update">
                  <a onclick="updateEmail()" data-toggle="modal" data-target="#emailUpdate" class="update-text">Update Email</a>
                </div>
              </div>
              <div class="col-md-12">
                <label class="fieldlabels">Address</label>
                <textarea name="side_effect" class="form-control" rows="6" cols="50"></textarea >
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
              <input type="text" id="txtPassportNumber" class="form-control input-update"/>
              <label class="fieldlabels chg-psw-input">Confirm Password</label>
              <input type="text" id="txtPassportNumber" class="form-control input-update"/>
            </div>
            <div class="submit-btn">
              <button class="btn btn-primary">Submit</button>
            </div>
            <div id="AddPassport">
                
            </div>
          </div> 
       </div>
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
              <input onkeyup="checkExistEmail()" id="email" type="email" class="form-control input-update" name="update_email">
              <span class="input-error-message error-position-ab" id="email-error"></span>          
            </div>
          </div>
          <div class="verification-code-section">       
            <div class="form-group">
              <input type="text" minlength="6" maxlength="6" class="form-control control-float-top" id="verification_code" name="verification_code" placeholder="Enter verification code" autocomplete="off">
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
              <input onkeyup="checkExistMobile()" id="mobile" class="form-control input-update" type="tel" name="update_mobile" minlength="10" maxlength="10">
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
    window.intlTelInput(show_mobile, {
      initialCountry: 'in',      
      onlyCountries: ['in','us','ch', 'ca', 'do'],
      preferredCountries: ["in", 'us'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
</script>