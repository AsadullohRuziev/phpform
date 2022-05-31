<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form</title>
</head>
<body>
<?php
/**
 *
 *
 * Author:  Asadulloh Ruziev
 * https://www.linkedin.com/in/AsadullohRuziev
 * https://github.com/AsadullohRuziev
 *
 */
?>

<form method="post" action="form.php">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>

<style type="text/css">
    body{
        background-color: lightblue;
    }
    form{
        background-color: white;
        width: 400px;
        padding: 60px;
        margin: 0 auto;
        margin-top: 200px;
        border-top-left-radius: 100px;
        border-bottom-right-radius: 100px;
        text-align: center;
        font-family: cursive;
        font-size: 20px;
    }
    form input{
        border: none;
        border-bottom: 2px solid lightblue;
        padding: 6px;
        width: 70%;
        margin-top: 20px;
        outline: none;
    }
    form button{
        background: none;
        background-color: lightblue;
        border-radius: 25px;
        border: none;
        padding: 8px 60px;
        margin-top: 30px;
        color: white;
        cursor: pointer;
        font-size: 16px;
    }
</style>

</body>
</html>
