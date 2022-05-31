<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Successfully</title>
</head>
<body>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpform";

    $connectWithDataBase = mysqli_connect($servername, $username, $password, $dbname);

    if ($connectWithDataBase->connect_error){
        die("Have problem with connection".$connectWithDataBase.connect_error);
    }

    $id = null;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sendingDataToMysql = "INSERT INTO form_data values(null, '$name', '$email', '$password')";

    if (mysqli_query($connectWithDataBase, $sendingDataToMysql)){
        echo "Successfully";
    }else{
        echo "Have problem on connection".mysqli_error($connectWithDataBase);
    }


?>
</body>
</html>
