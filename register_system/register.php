
<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<style>
body
{
  background-image: url("https://i.pinimg.com/736x/02/7f/fc/027ffca8c68567f07c12450e20140286.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post" enctype="multipart/form-data">
     
    <?php include('errors.php'); ?>
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
    

      <!-- <label> &nbsp; Choose your profile:</label>
          <input type="file" name="file">
          <input type="submit" value="upload" name="submit">
      -->

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" value="upload" name="submit" class="btn">Register</button>
         
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    
        </form>    


</body>
</html>