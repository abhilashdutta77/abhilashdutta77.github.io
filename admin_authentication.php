<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "/project/css/bootstrap.css"/>
        <link rel = "stylesheet" href = "/project/css/admin_authentication.css"/>
    </head>
    <body>
        <section class="backimg">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        session_start();
                        $hostname = "localhost";
                        $username = "root";
                        $password = "avirup20121997";
                        $database = "project";
                        $nc = 0;
                        $conn = mysqli_connect($hostname, $username, $password, $database);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $email = $_POST["email"];
                        $pass = $_POST["password"];

                        $sql = "SELECT * FROM admin";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die(mysqli_error($conn));
                        }

                        while ($row = mysqli_fetch_array($result)) {
                            $nc++;
                            if ($email == $row['email'] && $pass == $row['password']) {
                                $name = $row['name'];
                                break;
                            }
                        }

                        if (!$name) {
                            echo '<h2 class="text-center text-white mb-4">WRONG EMAIL OR PASSWORD !</h2>';
                            echo '<div style="text-align:center">
  <a class=".font-weight-bold text-white mb-4" href="/project/admin_login.php">CLICK HERE TO RETURN TO LOGIN PAGE</a>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
</div>';
                        } else {

                            echo '<h2 class="text-center text-white mb-4">  WELCOME ADMIN ! </br></br></h2>';
                            echo '<div style="text-align:center">'
                            . '<a class=".font-weight-bold text-white mb-4" href = "teacher_set_email.php"> Click Here to register new teacher.</a> </div>';
                        }

                        mysqli_close($conn);
                        ?>
                        <?php
                        if (!empty($_POST["remember"])) {
                            setcookie("email", $_POST["email"], time() + 3600);
                            setcookie("password", $_POST["password"], time() + 3600);
                        } else {
                            setcookie("username", "");
                            setcookie("password", "");
                        }
                        ?>
                    </div>
                </div> 
            </div>
        </section>
    </body>
</html>
