<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginForm-PostgreSQL</title>
    <link rel="shortcut icon" href="password.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <div id="panel-center1">
        <div id="panel-center-right">
            <img src="password.png">
            <h2>Member signin</h2>

            <form action="create.php" method="GET">

                <div class="field">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="name" placeholder="Full name" required>
                </div>

                <div class="field">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="field">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <?php 

                    if (isset($_GET['error'])) {
                        $err = $_GET['error'];

                        switch($err) {
                            case 1:
                                $message = "Please enter your name.";
                                break;
                            case 2:
                                $message = "Invalid or existing email.";
                                break;
                            case 3:
                                $message = "The password is not long <br> enough (minimum 8 characters).";
                                break;
                            default:
                                $message = "";
                                break;
                        }
                        
                        echo "<p id='error'>$message</p>";
                    }

                ?>

                <div class="field" id="input-login">
                    <input type="submit" name="" id="" value="SIGN IN">
                </div>
                <a href="index.php">Already have an Account? <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                
            </form>
        </div>
    </div>

</body>
</html>