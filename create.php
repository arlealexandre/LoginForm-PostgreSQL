<?php

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
        
        include 'database.php';
        
        if ($connexion) {

            if (!empty($_GET['name'])) {

                $name = htmlentities($_GET['name']);

                $req1 = "select count(*) from users where email='".strtolower($_GET['email'])."'";
                $rep1 = pg_query($connexion, $req1);
                        
                while ($row = pg_fetch_row($rep1)) {
                    $counter = $row[0];
                }
                
                if (!empty($_GET['email']) && $counter==0) {
                    $email = strtolower(htmlentities($_GET['email']));
        
                    if (!empty($_GET['password']) && strlen($_GET['password']) >= 8) {
                        $password = htmlentities($_GET['password']);
        
                        $requete = "insert into users values(default,'$name','$email',crypt('$password', gen_salt('bf')));";
                        $result = pg_query($connexion, $requete);
                            
                        if ($result) { header('Location: index.php?succ=1'); pg_close($connexion);}

                    } else {
                        header('Location: signin.php?error=3');
                    } 
                } else {
                    header('Location: signin.php?error=2');
                }
            } else {
                header('Location: signin.php?error=1');
            }
        } else {
            header("Location: connect.php");
        }
    }

?>