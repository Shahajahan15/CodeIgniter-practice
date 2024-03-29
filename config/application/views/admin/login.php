<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Personal Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h3>SCSE</h3>
                                </div>
                                <?php
                                    if ($this->session->flashdata('err_msg')) {
                                        $err_msg = $this->session->flashdata('err_msg');
                                        echo "<p class='alert alert-danger' id='myData'>$err_msg</P>";
                                    }
                                ?>

                                <form method="post" action="<?php echo base_url(); ?>Home/Login/login_check">

                                    <div class="form-group mb-3">
                                        <label for="email">Email address</label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-white-50 ml-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? 
                                    <a href="<?php echo base_url(); ?>welcome/registration" class="text-white ml-1"><b>Sign Up</b>
                                    </a>
                                </p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2018 - <?php echo date("Y"); ?> &copy; SCSE theme by <a href="#" class="text-white-50">Shahajahan</a> 
        </footer>

        <script>
            setTimeout(function(){
                $('#myData').hide()
            },3000)
        </script>

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/app.min.js"></script>
        
    </body>

</html>