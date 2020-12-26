<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = 'signup'; ?>

    <?php ob_start(); ?>
</head>

<body>
<h1>Welcome to our website !</h1>

    <a href="loginView.php">login</a>
    <form method="post" class="center">
        <p>
        <div class="form-floating mb-3">
            <label for="floatingInput">pseudo</label><br>
            <input type="text" class="form-control" name="pseudo" placeholder="user1">
        </div>
        <label for="floatingInput">Email address</label><br>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label><br>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Confirme Password</label><br>
            <input type="password" class="form-control" name="confirmePassword" placeholder="confirme Password">
        </div>

        <input type="submit" value="envoyer" />
        </p>
    </form>
</body>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

</html>