<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Informasi Remunerasi Tendik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url() .'assets/images/uin_logo.png'?> "/>
<!--===============================================================================================-->
<link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/util.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(assets/images/bg-02.jpg);">
                    <span class="login100-form-title-1">
                        Sistem Informasi Kepegawaian UIN Raden Intan Lampung
                    </span>
                </div>
                    <?php echo "<br>"?>
                    <!-- br();  -->
                    <?php echo validation_errors(); ?>
                    
             <form class="login100-form validate-form" action="verifylogin" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">User</span>
                        <input class="input100" type="text" name="username" id ="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <hr>
                    
  

                </form>
               <li align="center"> <t> Copyright <i class="glyphicon glyphicon-copyright-mark"></i> PTIPD UIN Raden Intan Lampung 2018   </li>
            </div>
        </div>

    </div>

</body>
</html>