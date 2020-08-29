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
    $email = $job = $name = $password1 = $password2 = $jobErr = $nameErr = $password1Err = $password2Err = $emailErr = "";
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if e-mail address is well-formed
        if (strlen($name) < 4) {
            $nameErr = "Full Name Must be 6 digits";
        }
    }

    
    if (empty($_POST["job"])) {
        $jobErr = "Job is required";
    }

    if (empty($_POST["password1"])) {
        $password1Err = "Password is required";
       
    }else{
         $password = test_input($_POST["password1"]);
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $password1Err = 'Password must be at least 8 characters <br>* at least one upper case<br>* one letter<br>* one number<br>* one special character.';
        } else {
            $password1Err = 'Strong password.';
        }
    }
    if (test_input(($_POST["password1"])) != test_input($_POST["password2"])) {
        $password1Err = "Oops! Password did not match! Try again.";
        $password2Err = "Oops! Password did not match! Try again.";
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

    <div class="container">

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input name="name" class="form-control" placeholder="Full Name">
                        <span class="error">* <?php echo $nameErr; ?></span>
                    </div>

        
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </div> 

            <div class="form-group">

                <select name="job" class="form-control">
                    <option selected=""> Select job type</option>
                    <option>Student</option>
                    <option>Job Holder</option>
                    <option>Business</option>
                </select>
                <span class="error">* <?php echo $jobErr; ?></span>
            </div>

            <div class="form-group">
                <input class="form-control" name="password1" placeholder="Create password" type="password">
                <span class="error">* <?php echo $password1Err; ?></span>
            </div>

            <div class="form-group">
                <input class="form-control" name="password2" placeholder="Repeat password" type="password">
                <span class="error">* <?php echo $password2Err; ?></span>
            </div> 

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
            </div>

    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
    </form>
    </article>
    </div> <!-- card.// -->

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