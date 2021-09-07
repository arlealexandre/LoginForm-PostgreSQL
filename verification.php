<?php

    session_start();

    if (isset($_GET['email']) && isset($_GET['password'])) {

        include 'database.php';

        if ($connexion) {

            $req1 = "select count(*) from users where email='".strtolower($_GET['email'])."'";
            $rep1 = pg_query($connexion, $req1);
                        
            while ($row1 = pg_fetch_row($rep1)) {
                $counter1 = $row1[0];
            }
                
            if (!empty($_GET['email']) && $counter1>0) {
                $email = strtolower(htmlentities($_GET['email']));
        
                if (!empty($_GET['password']) && strlen($_GET['password']) >= 8) {
                    $password = htmlentities($_GET['password']);
                    
                    $req2 = "select count(*) from users where email='$email' and password=crypt('$password', password)";
                    $rep2 = pg_query($connexion, $req2);

                    while ($row2 = pg_fetch_row($rep2)) {
                        $counter2 = $row2[0];
                    }

                    if ($counter2==1) {
                        $_SESSION['email'] = $email;
                        header('Location: session.php?');
                    }

                } else {
                    header('Location: index.php?error=2');
                } 
            } else {
                header('Location: index.php?error=1');
            }         
        } else {
            header("Location: connect.php");
        }
    }

?>