<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="urf-8">
    <meta name="viewpoint" content="width=device-width,initial-scale=1">
    <title>Registeration to the restaurant</title>
    <script src="Js/jquery.min.js" type="text/javascript"></script>
    <script src="Js/popper.min.js" type="text/javascript"></script>
    <link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Eat.lk</a>
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

    <div class="container">
        <!--Register to the Resturent-->

<!--
        <form id="resturent_register">

            <div class="row">

                <div class="col-25">
                    <label><b>Name</label></b>
                </div>

                <div class="col-75">
                    <input type="text" placeholder="Enter your restaurant name" name="name" required>
                </div>
            </div>

            <div class="row">

                <div class="col-25">
                    <label><b>Email</label></b>
                </div>

                <div class="col-75">
                    <input type="email" placeholder="Enter your email Address" name="email" required>
                </div>
            </div>

            <div class="row">

                <div class="col-25">
                    <label><b>Address</label></b>
                </div>

                <div class="col-75">
                    <input type="text" placeholder="Enter your Address" name="address" required>
                </div>
            </div>

            <div class="row">

                <div class="col-25">
                    <label><b>Phone Number</label></b>
                </div>

                <div class="col-75">
                    <input type="tel" placeholder="Enter your phone number" name="phone" required>
                </div>
            </div>

            <div class="row">

                <div class="col-25">
                    <label><b>Password</label></b>
                </div>

                <div class="col-75">
                    <input type="password" placeholder="Enter your password" id="password" name="password" required>
                </div>

                <div class="row">

                    <div class="col-25">
                        <label><b>Confirm Password</label></b>
                    </div>

                    <div class="col-75">
                        <input type="password" placeholder="Enter the same password" id="cpassword" name="cpassword"
                            required>
                    </div>

                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>

                </div>
            </div>
        </form>

        -->

        <form id="resturent_register">

            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-3"><br></div>
                    <div class="col-md-6">

                        <div class="row">

                            

                            <div class="col-md-12"><br></div>

                            <div class="col-md-12">

                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your full name" required>

                            </div>

                            <div class="col-md-12">

                                <label class="form-label">Address</label>
                                <textarea class="form-control" placeholder="Enter your house address" rows="3"
                                    name="address" required></textarea>

                            </div>

                            <div class="col-md-12">

                                <label class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone number" required>

                            </div>

                            <div class="col-md-12">

                                <label class="form-label">E-mail Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your e-mail address" required>

                            </div>

                            <div class="col-md-12">

                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" required>

                            </div>

                            <div class="col-md-12">

                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Enter the same password" required>

                            </div>

                            
                            <div class="col-md-12">

                                <label class="form-label">Upload Logo</label>
                                <input type="file" class="form-control btn btn-dark btn-lg" value="Select Logo">

                            </div>

                            <div class="col-md-12"><br></div>

                            <div class=col-md-12>

                                <button class="btn btn-dark btn-lg" type="submit">Submit</button>

                            </div>

                            <div class="col-md-12"><br></div>
                            <div class="col-md-12"><br></div>

                        </div>

                    </div>
                    <div class="col-md-3"><br></div>

                </div>

            </div>

        </form>


    </div>
</body>

<script type="text/javascript">
$(document).ready(function(e) {

    $("#resturent_register").on('submit', (function(e) {



        if ($("#cpassword").val() == $("#password").val()) {

            e.preventDefault();

            $.ajax({

                url: "Controllers/resturentRegistration.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    if (data == "Done") {

                        alert("Resturent Creation Successfull!");
                        window.location.replace("Restaurant_dashboard.php");

                    } else {

                        alert(data);

                    }

                },
                error: function(data) {

                    alert("Error : " + data);

                }

            });

        } else {
            alert('Passwords are not matching ' + $("#cpassword").val() + ' = ' + $("#password")
                .val());
        }

    }));

});
</script>


</html>