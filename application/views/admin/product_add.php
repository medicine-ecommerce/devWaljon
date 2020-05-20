      <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700");

$color: #80868b;
$active-color: #1a73e8;
$input-value-color: #202124;
$border-color: 1px solid #dadce0;

$border-color-active: 2px solid $active-color;
$default-background: #fff;

/* Buttons */
$btn-default-bg-color: #fff;
$btn-default-bgh-color: #ddd;
$btn-default-text-color: #333;

$btn-primary-bg-color: #1a73e8;
$btn-primary-bgh-color: #287ae6;
$btn-primary-boxshadow-color: 0 1px 1px 0 rgba(66, 133, 244, 0.45),
  0 1px 3px 1px rgba(66, 133, 244, 0.3);
$btn-primary-text-color: #fff;

body {
  font-family: "open sans", roboto, arial, sans-seif;
  background: $default-background;
}
input {
  background: $default-background;
}
#form {
  width: 40vw;
  margin: 0 auto;
  margin-top: 50px;
}
.input-box.active-grey {
  .input-1 {
    border: $border-color;
  }
  .input-label {
    color: $color;
    top: -8px;
    background: $default-background;
    font-size: 11px;

    transition: 250ms;

    svg {
      position: relative;
      width: 11px;
      height: 11px;
      top: 2px;
      transition: 250ms;
    }
  }
}
.input-box {
  position: relative;
  margin: 10px 0;
  .input-label {
    position: absolute;
    color: $color;
    font-size: 16px;
    font-weight: 400;
    max-width: calc(100% - (2 * 8px));
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    left: 8px;
    top: 13px;
    padding: 0 8px;
    transition: 250ms;
    user-select: none;
    pointer-events: none;
    svg {
      position: relative;
      width: 15px;
      height: 15px;
      top: 2px;
      transition: 250ms;
    }
  }
  .input-1 {
    box-sizing: border-box;
    height: 50px;
    width: 100%;
    border-radius: 4px;
    color: $input-value-color;
    border: $border-color;
    padding: 13px 15px;

    transition: 250ms;
    &:focus {
      outline: none;
      border: 2px solid #1a73e8;
      transition: 250ms;
    }
  }
}
.input-box.focus,
.input-box.active {
  .input-label {
    color: $active-color;
    top: -8px;
    background: $default-background;
    font-size: 11px;

    transition: 250ms;

    svg {
      position: relative;
      width: 11px;
      height: 11px;
      top: 2px;
      transition: 250ms;
    }
  }
}
.input-box.active {
  .input-1 {
    border: 2px solid #1a73e8;
  }
}
.btn {
  background: $btn-default-bg-color;
  color: $btn-default-text-color;
  cursor: pointer;
  border: none;
  white-space: normal;
  letter-spacing: 0.25px;
  font-weight: 400;
  font-size: 14px;
  padding: 8px 16px;
  border-radius: 4px;
  line-height: 20px;
  min-width: 88px;
  transition: 250ms;

  &:hover {
    background: $btn-default-bgh-color;
    transition: 250ms;
  }
  &:focus {
    outline: none;
  }
}
.btn-primary {
  background: $btn-primary-bg-color;
  color: $btn-primary-text-color;
  transition: 250ms;
  &:hover {
    background: $btn-primary-bgh-color;
    box-shadow: $btn-primary-boxshadow-color;
    transition: 250ms;
  }
}

.pull-right {
  float: right;
}
.clear {
  clear: both;
}

      </style>
        <div class="right_col" role="main">

<div class="row">
<div class="col-md-6 ">
<div class="x_panel">
<div class="x_title">
<h2>Form Design <small>different form elements</small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Settings 1</a>
<a class="dropdown-item" href="#">Settings 2</a>
</div>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<br>
<form class="form-label-left input_mask">
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
</div>
<div class="form-group row">
<label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
<div class="col-md-9 col-sm-9 ">
<input type="text" class="form-control" placeholder="Default Input">
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
<div class="col-md-9 col-sm-9 ">
<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
<div class="col-md-9 col-sm-9 ">
<input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
</label>
<div class="col-md-9 col-sm-9 ">
<input class="date-picker form-control" required="required" type="text">
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group row">
<div class="col-md-9 col-sm-9  offset-md-3">
<button type="button" class="btn btn-primary">Cancel</button>
<button class="btn btn-primary" type="reset">Reset</button>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
  function setFocus(on) {
  var element = document.activeElement;
  if (on) {
    setTimeout(function () {
      element.parentNode.classList.add("focus");
    });
  } else {
    let box = document.querySelector(".input-box");
    box.classList.remove("focus");
    $("input").each(function () {
      var $input = $(this);
      var $parent = $input.closest(".input-box");
      if ($input.val()) $parent.addClass("focus");
      else $parent.removeClass("focus");
    });
  }
}

</script>