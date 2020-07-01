<style type="text/css">
  .upload-btn-img {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .upload-btn-img input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .img-thumbnail {
        opacity: 1;
        transition: opacity .25s ease-in-out;
        -moz-transition: opacity .25s ease-in-out;
        -webkit-transition: opacity .25s ease-in-out;
        cursor: pointer;
        width: 160px; height: 160px; 
        object-fit:cover;
        border-radius: 50%;
    }

    .upload-btn-img:hover .img-thumbnail {
        opacity: 0.7;
        cursor: pointer;
    }

    .upload-btn-img:hover input {
        cursor: pointer;
    }
    .input-update{
      height: 50px;
      border: 1px solid #ccc!important;
    }
    label.fieldlabels {
    font-size: 20px;
}
</style>
<div class="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        hello
      </div>
      <div class="col-md-9">
        <div class="row" style="margin-bottom: 20px;">
          <div class="col-md-3">
            <label class="fieldlabels">First Name</label>
            <input type="text" name="first_name" class="form-control input-update">
          </div>
          <div class="col-md-3">
            <label class="fieldlabels">Last Name</label>
            <input type="text" name="Last_name" class="form-control input-update">
          </div>
          <div class="col-md-3">
            <label class="fieldlabels">Email</label>
            <input type="text" name="email" class="form-control input-update">
          </div>
          <div class="col-md-3">
            <div class="upload-btn-img">
                <img src="https://tricityescaperooms.com/wp-content/uploads/2018/01/person-placeholder-male-5.jpg"
                    class="img-thumbnail p-0 m-0" style="" alt="user profile image">
                <input type="file" name="myfile[]" onchange="showThumbnail(this)" />
            </div>
          </div>
          <div class="col-md-12">
            <label for="chkPassport">
                <input type="checkbox" id="chkPassport" class="form-control"/>
                Do you have Passport?
            </label>
          </div>
          <div class="col-md-6">
            <div id="dvPassport" style="display: none">
                <label class="fieldlabels">Password</label>
                <input type="text" id="txtPassportNumber" class="form-control input-update"/>
                 <label class="fieldlabels">Confirm Password</label>
                <input type="text" id="txtPassportNumber" class="form-control input-update"/>
            </div>
            
            <div id="AddPassport">
                
            </div>
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