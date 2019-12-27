<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php base_url(); ?>assets/images/favicon.png">
    <title><?= $title; ?></title>
    <!-- Custom CSS -->
    <link href="<?php base_url(); ?>dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?php base_url(); ?>assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="col-lg-3 col-md-5 bg-white">
                <div class="p-3">
                    <div class="text-center p-3">
                        <img src="<?php base_url(); ?>assets/images/big/icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">Login Admin</h2>
                    <?php echo $this->session->flashdata('message'); ?>
                    <form class="mt-4" method="post" action="<?= base_url('auth'); ?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="username" name="username" type="text" placeholder="Masukkan NIK">
                                    <?php echo form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan Password">
                                    <?php echo form_error('password', '<small class="text-danger ml-2">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center p-3">
                                <button type="submit" class="btn btn-block btn-dark">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php base_url(); ?>assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?php base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>