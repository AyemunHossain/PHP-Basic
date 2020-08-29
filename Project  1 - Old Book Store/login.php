<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="static/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="static/css/style.min.css" rel="stylesheet">

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href=" static/css/slick.css" />
    <link type="text/css" rel="stylesheet" href=" static/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href=" static/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href=" static/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href=" static/css/style.css" />

    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
    </style>

</head>

<body>

    <?php
    $email = $passErr = $pass = $emailErr = "";
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $pass = test_input($_POST["password"]);
        // check if e-mail address is well-formed
        if (strlen($pass) < 8) {
            $passErr = "Passowrd is more than 8 digit";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <?php include 'includes/navbar.php'; ?>

    <title>

    </title>

    <div class="row wow fadeIn " style="margin-bottom: 28rem;">
        <div class="clo-6 offset-3 mt-5">
        
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    <span class="error">* <?php echo $passErr; ?></span>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="clo-6 offset-4 mt-5">
            <ul class="list-group">
                <div class="card">
                    <div class="card-body list-group-item active">
                        Some Tranding Novel : You may interested in
                    </div>
                </div>
                <li class="list-group-item ">Transcendent Kingdom</li>
                <li class="list-group-item">The Glass Hotel</li>
                <li class="list-group-item">My Dark Vanessa</li>
                <li class="list-group-item">The Death of Vivek Oji</li>
                <li class="list-group-item">Real Life: A Novel</li>
                <li class="list-group-item ">Transcendent Kingdom</li>
                <li class="list-group-item">The Glass Hotel</li>
                <li class="list-group-item">My Dark Vanessa</li>
                <li class="list-group-item">The Death of Vivek Oji</li>
                <li class="list-group-item">Real Life: A Novel</li>

            </ul>
        </div>
    </div>





    <?php include 'includes/footer.php'; ?>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="static/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="static/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="static/js/mdb.min.js"></script>

    <script type="text/javascript" src="static/js/jquery.min.j"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="static/js/slick.min.js"></script>
    <script type="text/javascript" src="static/js/nouislider.min.js"></script>
    <script type="text/javascript" src="static/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="statjs/main.js' %}"></script>

    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>