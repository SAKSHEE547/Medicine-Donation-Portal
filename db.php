<?php
    $uname= "root";
    $dbpass= "";
    $host= "localhost";
    $db= "medicine";

    $conn = mysqli_connect("$host","$uname","$dbpass","$db") or die("DB connection Error");
    if(!$conn){
        die("Connection to this database failed due to".mysqli_connect_error());
    }
    // echo "Success";

?>