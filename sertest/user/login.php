<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container shadow-lg mt-5 py-5">
        <h2 class="text-center">Login As Admin</h2>
        <form action="../process/login.php" class="form" method="post">
            <div class="mx-5 my-5">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"> 
            </div>
            <div class="mx-5 my-5">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="pw">
            </div>
            <div class="mx-5">
                <button class="btn btn-outline-success" type="submit" name="submit">Login</button>
            </div>

        </form>
    </div>
</body>

</html>