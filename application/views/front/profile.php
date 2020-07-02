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
                  <label class="fieldlabels chg-psw-input">Email</label>
                  <input type="text" name="email" class="form-control input-update">
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
</script>