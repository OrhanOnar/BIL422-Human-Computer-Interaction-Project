<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" style="width: 100%;    height: 100vh;    overflow-x: hidden; background: url(http://icerik.market/assets/images/jungle-river.jpg ) no-repeat center center fixed; -webkit-background-size: cover;    -moz- background-size: cover;    -o-background-size: cover;    background-size: cover;"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo ASSETS; ?>global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>admin/pages/css/login3.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo ASSETS; ?>global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo ASSETS; ?>admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo ASSETS; ?>admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login" style="background-color: transparent !important ;">
<!-- BEGIN LOGO -->
<div class="logo">
  <a href="<?php echo base_url(); ?>">
    <img src="<?php echo IMAGE; ?>e22.png" alt="tto_logo"/>
  </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
  <!-- BEGIN LOGIN FORM -->
  <form class="login-form" action="<?php echo base_url(); ?>Login" method="post">
    <h3 class="form-title">Giriş yapın!</h3>
    <div class="alert alert-danger display-hide">
      <button class="close" data-close="alert"></button>
      <span>
      Bir kullanıcı adı ve şifre girin. </span>
    </div>
    <?php if($this->session->flashdata('error') != ""){ ?>
      <div class="alert alert-danger">
        <button class="close" data-close="alert"></button>
        <span>
        <?php echo $this->session->flashdata('error'); ?> </span>
      </div>
    <?php } ?>
    <div class="form-group">
      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
      <label class="control-label visible-ie8 visible-ie9">Kullanıcı Adı</label>
      <div class="input-icon">
        <i class="fa fa-user"></i>
        <input class="form-control placeholder-no-fix"  autocomplete="off" placeholder="Kullanıcı Adı" name="email"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Şifre</label>
      <div class="input-icon">
        <i class="fa fa-lock"></i>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Şifre" name="password"/>
      </div>
    </div>
    <div class="form-actions" style="height: 50px;">
      <button type="submit" class="btn green-haze pull-right" >
      Giriş <i class="m-icon-swapright m-icon-white"></i>
      </button>
    </div>
  <!--  <div class="login-options">
      <h4>Veya giriş yapın</h4>
      <ul class="social-icons">
        <li>
          <a class="facebook" data-original-title="facebook" href="#">
          </a>
        </li>
        <li>
          <a class="twitter" data-original-title="Twitter" href="#">
          </a>
        </li>
        <li>
          <a class="googleplus" data-original-title="Goole Plus" href="#">
          </a>
        </li>
        <li>
          <a class="linkedin" data-original-title="Linkedin" href="#">
          </a>
        </li>
      </ul>
    </div>-->
    <!--<div class="create-account">
      <p>
         Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
        Create an account </a>
      </p>
    </div>-->
  </form>
  <div>
    <a href="">Yeni Hesap Oluşturun!</a>
  </div>
  <!-- END LOGIN FORM -->
  <!-- BEGIN FORGOT PASSWORD FORM -->

  <!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
   <a href="">ETUGETHERTEAM</a> © 2019. All Rights Reserved
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo ASSETS; ?>global/plugins/respond.min.js"></script>
<script src="<?php echo ASSETS; ?>global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo ASSETS; ?>global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo ASSETS; ?>global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo ASSETS; ?>global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo ASSETS; ?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>