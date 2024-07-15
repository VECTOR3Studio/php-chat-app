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
            <section class="form signup">
              <header>Realtime Chat App</header>
              <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                  <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First name" required>
                  </div>
                  <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last name" required>
                  </div>
                </div>
                <div class="field input">
                  <label>Email Address</label>
                  <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Enter new password" required id="pswrd">
                  <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                  <label>Select Image</label>
                  <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                  <input type="submit" name="submit" value="Continue to Chat">
                </div>
              </form>
              <div class="link">Already signed up? <a href="login.php">Login now</a></div>
            </section>
          </div>

          <script src="javascript/pass-show-hide.js"></script>
          <script src="javascript/signup.js"></script>
</body>
</html>