<head>
    <link rel = "stylesheet" href = "css/bootstrap.css" />
</head>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="teacher_set_email_db.php">
                                <div class="form-group">
                                    <label for="uname1">Email Id</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" id="uname1" required="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name= "password">
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">UPDATE</button>
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
