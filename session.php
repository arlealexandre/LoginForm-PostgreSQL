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
    
    <?php
        session_start();

        if (isset($_GET['logoff'])) {
            if ($_GET['logoff']==true) {
                session_unset();
                header('Location: index.php');
            }
        } else if ($_SESSION['email'] !== "") {
            $email = $_SESSION['email'];
        }

    ?>

    <div id="panel-center2">
        <h1>You are connected to your session<br><?php echo $email ?> !</h1>
        <a href='session.php?logoff=true'><span>Log off</span></a>
    </div>
    
</body>
</html>