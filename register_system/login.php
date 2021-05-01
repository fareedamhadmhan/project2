
<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<style>
body
{
  background-image: url("https://images.all-free-download.com/images/graphiclarge/cooking_banner_man_woman_kitchen_icons_cartoon_design_6837486.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

    <div class="header">
        <h2><B>Login</B></h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username"><B>Username</B></label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label for="password"><B>Password</B></label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn"><B>Login</B></button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>

</body>
</html>