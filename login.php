<?php
  include '_dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> GreenBus </title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  
  <div class="main-fl">
    <div class="title-web">
      <h1 >Welcome to the  <span>AjaymerU</span></h1>
      <h2 style="color: white;">The only place for public transport in Ajmer</h2>
    </div>
    <div>
      <div class="wrapper">
        <div class="form-wrapper sign-up" id="create">
          <form method="post">
            <h2>Sign Up</h2>
            <div class="input-group">
              <input type="text" id="username" name="username" required>
              <label for="username">Username</label>
            </div>
            <div class="input-group">
              <input type="email" id="email" name="email" required>
              <label for="email">Email</label>
              
            </div>
            <div class="input-group">
              <input type="password" id="password" name="password" required>
              <label for="password">Password</label>
            </div>
            <button type="submit" class="btn" name="sub">Sign Up</button>
            <div class="sign-link">
              <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
            </div>
          </form>
        </div>
<?php
if(isset($_POST['sub'])==true){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql="select * from usersinfo where email = '$email' ";
  $result = mysqli_query($conn , $sql);
  
  if(mysqli_num_rows($result)>0){
    echo "<script>alert('Email Already Exist');</script>";
  }
  else {
    $str="INSERT INTO usersinfo (username ,email,pass) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn , $str);
    echo "<script>alert('Account Created Successfully');</script>";
    echo "<script>document.location='login.php';</script>";
  }

  }
?>

        <div class="form-wrapper sign-in">
          <form method="post">
            <h2>Login</h2>
            <div class="input-group">
              <input type="email" required name="username">
              <label for="">Email</label>
            </div>
            <div class="input-group">
              <input type="password" required name="password">
              <label for="">Password</label>
            </div>
            <div class="forgot-pass">
              <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" name="sub2">Login</button>
            <div class="sign-link">
              <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
            </div>
          </form>
          <?php
          if(isset($_POST['sub2'])==true){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql="select * from usersinfo where email = '$username' AND pass = '$password' ";
            $result = mysqli_query($conn , $sql);
            
            if(mysqli_num_rows($result)>0)
            {
              echo "<script>alert('Logged In Successfully');</script>";
              echo "<script>document.location='Bootslander/index.php';</script>";
            }
            else {
              echo "<script>alert('Incorrect Username or Password');</script>";
            }
          

          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script>
    const wrapper = document.querySelector('.wrapper');
    const signUpLink = document.querySelector('.signUp-link');
    const signInLink = document.querySelector('.signIn-link');

    signUpLink.addEventListener('click', () => {
      wrapper.classList.add('animate-signIn');
      wrapper.classList.remove('animate-signUp');
    });

    signInLink.addEventListener('click', () => {
      wrapper.classList.add('animate-signUp');
      wrapper.classList.remove('animate-signIn');
    });
  </script>
</body>

</html>