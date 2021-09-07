<?php

    $host = null;         /* HOST */                /* ex.: $host='localhost' */
    $dbname = null;       /* DATABASE NAME */       /* ex.: $dbname='mydb' */
    $user = null;         /* USERNAME */            /* ex.: $user='myname' */
    $password = null;     /* PASSWORD */            /* ex.: $password='mypassword' */

    $connexion = pg_connect("host=$host dbname=$dbname user=$user password=$password");

?>