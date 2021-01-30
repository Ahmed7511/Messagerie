<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>signup</title>
</head>

<body>

    <a href="controller/login.php">Login</a>

    <form method="post" class="input-group mb-3 px-5">

            <label for="floatingInput">pseudo</label><br>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" name="pseudo" placeholder="user1">
        </div>
        <label for="floatingInput">Email address</label><br>
        <div class="input-group mb-3 ">
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        
            <label for="floatingPassword">Password</label><br>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
            <label for="floatingPassword">Confirme Password</label>
        <div class="input-group mb-3 ">
            <input type="password" class="form-control" name="confirmePassword" placeholder="confirme Password">
        </div>

        <input type="submit" value="envoyer" />

    </form>
</body>

</html>