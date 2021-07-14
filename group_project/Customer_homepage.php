<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="urf-8">
    <meta name="viewpoint" content="width=device-width,initial-scale=1">
    <title>Eat.lk</title>

    <link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="Js/jquery.min.js" type="text/javascript"></script>
    <script src="Js/popper.min.js" type="text/javascript"></script>

    <style>
    .card {

        background-color: green;
        padding: 5px;

    }

    .card-image {

        padding: 5px;

    }

    .footer {

        padding: 15px;
        background-color: #F8F9FA;
        color: #22262A;

    }

    .footer a {

        text-decoration: none;

    }


    .footer a:hover {

        color: #0056B3;

    }
    </style>

</head>

<body>

    <!--Nav Bar-->
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
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Customer_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Terms_&_Conditions.php" tabindex="-1" aria-disabled="true">Terms and
                            Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact_us.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit"><a
                            href="Customer_Login.php">Login</button></a>
                </form>
            </div>
        </div>
    </nav>
    <!--Main Image-->
    <img src="Images/coffee_foam_beverage_cup_saucer_creative_continents_84944_1920x1080.jpg" class="img-fluid"
        alt="...">

    <div class="container">

        <div class="col-md-12"><br></div>


        <div class="col-md-4 card">


            <div class="row">

                <div class="col-md-6">

                    <p>Chinese Dragon </p>

                </div>

                <div class="col-md-6" align="right">

                    <p>Price <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></p>

                </div>

            </div>

            <div class="col-md-12 card-image">

                <img src="Images/300.jpg" class="img-fluid" alt="...">

            </div>


            <div class="col-md-12 card-footer">

                <div class="row">

                    <div class="col-md-6">

                        <p>Fried rice, Prawns, Chill Paste and Hot Butter Cuttlefish</p>

                    </div>

                    <div class="col-md-6" align="right">

                        <p>Prawn Nasi Goreng</p>

                    </div>

                </div>

            </div>


        </div>

        <div class="col-md-12"><br></div>

    </div>

    <div class="col-md-12 footer">

        <div class="row">

            <div class="col-md-6">

                <h3>Admin</h3>
                <a href="Admin_Login.php">Login</a>

            </div>

            <div class="col-md-6" align="right">

                <h3>Restaurant</h3>
                <a href="Register_restaurant.php">Registration</a>
                <br>
                <a href="Restaurant_login.php">Login</a>

            </div>

        </div>

    </div>

</body>

</html>