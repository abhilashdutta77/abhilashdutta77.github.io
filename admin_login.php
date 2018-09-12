<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "/project/css/bootstrap.css"/>
        <link rel = "stylesheet" href = "/project/css/admin_login.css"/>
    </head>
    <body>
        <section class="backimg">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-white mb-4">ADMIN LOGIN !</h2>
                        <div class="row">
                            <div class="col-md-6 mx-auto">

                                <!-- form card login -->
                                <div class="card rounded-0">
                                    <div class="card-header">
                                        <h3 class="mb-0">Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="admin_authentication.php">
                                            <div class="form-group">
                                                <label for="uname1">Email Id</label>
                                                <input type="text" class="form-control form-control-lg rounded-0" name="email" id="uname1" required=""value="<?php
                                                if (isset($_COOKIE["email"])) {
                                                    echo $_COOKIE["email"];
                                                }
                                                ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name= "password" value="<?php
                                                if (isset($_COOKIE["password"])) {
                                                    echo $_COOKIE["password"];
                                                }
                                                ?>">
                                                <div class="invalid-feedback">Enter your password too!</div>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="remember"> Remember me</label>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                        </form>
                                    </div>
                                    <!--/card-block-->
                                </div>
                                <!-- /form card login -->

                            </div>


                        </div>
                        <!--/row-->

                    </div>
                    <!--/col-->
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </section>
    </body>
</html>
