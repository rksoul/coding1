<!DOCTYPE html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="login_css"/>
    
</head>
<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];


    if ($id == 'admin' && $pass == 'admin1234')
    {echo '로그인 성공하였습니다.';}
    else{
        echo "아이디와 비밀번호를 정확하게 입력바랍니다."
    ;}
    ?>
