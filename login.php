<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("Location: users.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="manifest.json"/>  
    <title>Chat App</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper">
            <section class="form login">
              <header>Realtime Chat App</header>
              <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                  <label>Email Address</label>
                  <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Enter your password" required>
                  <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                  <input type="submit" name="submit" value="Continue to Chat">
                </div>
              </form>
              <div class="link">Not Yet sign up? <a href="index.php">Sign Up Now</a></div>
            </section>
          </div>
          <script src="javascript/pass-show-hide.js"></script>
          <script src="javascript/login.js"></script>
</body>
</html>