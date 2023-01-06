<?php

    //parameters for DB connection method
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "php crud";

    //DB connection
    $db_connecton=mysqli_connect($servername,$username,$password,$databasename);

    //Status of DB connection
    if(!$db_connecton){
        die("Database Connection Failed".mysqli_connect_error());
    }else{
        echo "";
    }

?>