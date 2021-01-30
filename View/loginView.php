<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
  
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <h1>Welcome my messagerie !</h1>


    <a href="../index.php" >inscription</a>

    <form method="post" class="input-group mb-3 px-5">
       
            <label for="floatingInput">pseudo</label><br>
            <div class="input-group mb-3 ">
            <input type="text" class="form-control" name="pseudo" placeholder="user1">
            </div>
            <label for="floatingPassword">Password</label><br>
            <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        <input type="submit" value="envoyer"/>

    </form>


</body>
</html>