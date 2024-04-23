<!DOCTYPE html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="login_css"/>
    
</head>
<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];


    if ($id == 'admim' && $pass == 'adim1234')
    { echo 'welcomn !!!'};
    else{
        echo "who are you??"
    };
    ?>
