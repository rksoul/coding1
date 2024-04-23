<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet"  href="login_css">
    <title>로그인</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <form method="POST" action="login_proc.php">
        <h1>Login</h1>
            <div class="input-box">
                <label for="">User ID</label>
                <input type="text" name="id" placeholder="User ID"/>
                <i class="bi bi-person"></i>
            </div>
            <div class="input-box">
                <label for="">Password</label>
                <input type="password" name="pass" placeholder="User password"/>
                <i class="bi bi-lock"></i>
            </div>

                <input type="submit" class="submit-btn" value="login"/>

             </div>



            </form>
    
</body>
</html>





