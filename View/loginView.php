<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
  
    <link href="style.css" rel="stylesheet" />
    <?php $title = 'login'; ?>

    <?php ob_start(); ?>
</head>

<body>
    <h1>Welcome to our website !</h1>

<
    <a href="../index.php">inscription</a>



    <form method="post" class="form-group">
        <div class="form-floating mb-3">
            <label for="floatingInput">pseudo</label><br>
            <input type="text" class="form-control" name="pseudo" placeholder="user1">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label><br>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="submit" value="envoyer" />

    </form>


</body>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
</html>