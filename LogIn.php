<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy's Treasure Boutique | Login</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
        $msg = '';
        
        if (isset($_POST['login']) && !empty($_POST['username']) 
           && !empty($_POST['password'])) {

           if ($_POST['username'] == 'lucy' && $_POST['password'] == 'nicky'){
              $_SESSION['valid'] = true;
              $_SESSION['timeout'] = time();
              $_SESSION['username'] = 'lucy';
              
            header("Location: http://localhost/Website/create.php");
           }
           else{
              $msg = 'Wrong username or password';
           }
        }
    ?>
        
    <div class = "container">
      <img src = "Lucy 2.1.png"></div>

      <form class = "form-signin" role = "form" 
        action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
        ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "text" class = "form-control" 
           name = "username" placeholder = "Username" 
           required autofocus></br>
        <input type = "password" class = "form-control"
           name = "password" placeholder = "Password" required></br>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
           name = "login">Login</button>
      </form> 
    </div> 

  </body>

</html>