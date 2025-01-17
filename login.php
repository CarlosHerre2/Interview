<?php
    include("init.php");
    if ($session->is_signed_in()) {
        redirect('index.php');
    }
?>
<!DOCTYPE html>

<?php
    $name;
    $passwords;
    // default is unknown
    if (empty($_POST['name']) || empty($_POST['passwords'])) {
        $name = 'unknownN';
        $passwords = 'UnknownP';
    } else {

        $name = htmlentities(trim($_POST['name']));
        $passwords = htmlentities(trim($_POST['passwords']));
        // echo $name." ".$passwords;

        if (isset($_POST['submit'])) {

            $user_found = User::verify_user($name, $passwords);
            if ($user_found) {
                $session->login($name);
                // $drivedet = FileArray();
                // $_SESSION['testArrayFiles'] = $drivedet;
                redirect("index.php");
            } else {
                $the_message = "Your Password or UserName are wrong";
            }
        } else {
            $the_message = "";
            $name = "";
            $passwords = "";
        }
        // echo $_SESSION['user_id'];
    }
    echo $_SESSION['user_id'] ;
?>
<html class="login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="shortcut icon" href="assets/images/favicon.png">

    <title>Synrgise - Innovate Learning</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements.css" rel="stylesheet" type="text/css">

    <script src="assets/js/modernizr.min.js"></script>



</head>

<body>


    <div class="wrapper-page">
        <div class="panel-pages login">
            <div class="panel-body">
                <div class="logo text-center m-b-20">
                    <a href="#"><img src="assets/images/synrgise-logo-white.png"></a>
                </div>
                <form class="form-horizontal m-t-20" >

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="name" class="form-control input-lg" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="password" class="form-control input-lg" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12 col-md-8">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <button name="submit" class="btn btn-black btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="#"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="#">Create an account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        var resizefunc = [];
    </script>

    <!-- Main  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>