<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="urf-8">
    <meta name="viewpoint" content="width=device-width,initial-scale=1">
    <title>Restaurant Login</title>

    <script src="Js/jquery.min.js" type="text/javascript"></script>
    <script src="Js/popper.min.js">
    type = "text/javascript" >
    </script>
    <link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="Customer_homepage.php">Eat.lk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Customer_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Terms_&_Conditions.php" tabindex="-1" aria-disabled="true">Terms
                            and
                            Conditions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Contact_us.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!--
    <div class="login">
        <form id="login">
            <label><b>Email</b></label>
            <input type="email" name="Ename" id="Ename" placeholder="" required>
            <br><br>

            <label><b>Password</b></label>
            <input type="Password" name="Pass" id="Pass" placeholder="" required>
            <br><br>

            <input type="submit" name="signin" id="signin" value="Sign in">

        </form>
    </div>

-->


    <form id="login">

        <div class="col-md-12">

            <div class="row">

                <div class="col-md-3"><br></div>
                <div class="col-md-6">

                    <div class="row">

                        <div class="btn-group btn-group-lg col-md-12">

                            <button class="btn btn-dark disabled" type="button">Login</button>
                            <button class="btn btn-light disabled" type="button">Welcome</button>

                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-12">

                            <label class="form-label">Username</label>
                            <input type="email" class="form-control" id="Ename" name="Ename"
                                placeholder="name@example.com" required>

                        </div>

                        <div class="col-md-12">

                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="Pass" name="Pass" required>

                        </div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-5 d-grid">

                            <button type="submit" class="btn btn-dark">Login</button>

                        </div>

                        <div class="col-md-2"><br></div>

                        <div class="col-md-5 d-grid">

                            <button type="button" class="btn btn-dark" onclick='window.location="Register_restaurant.php"'>Create Account</button>

                        </div>

                    </div>

                </div>
                <div class="col-md-3"><br></div>

            </div>

        </div>

    </form>


</body>

<script>
$(document).ready(function(e) {

    $("#login").on('submit', (function(e) {

        e.preventDefault();

        $.ajax({

            url: "Controllers/resturantLogin.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {

                if (data == "Done") {
                    alert("Login Success");
                    window.location.replace('Restaurant_dashboard.php');
                } else {
                    alert(data);
                }

            }

        });

    }));

});
</script>

</html>