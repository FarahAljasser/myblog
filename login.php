<?php
  session_start();
  include('include/connection.php');

  $adminMail = $_POST['email'];
  $adminPass = $_POST['password'];
  $login = $_POST['log'];

 ?>
 
<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/dashboard.css">
    <title> تسجيل الدخول  </title>
    <style>
    .login{
      width: 300px;
      margin: 80px auto;
    }
    .login h5{
      color: #555;
      margin-bottom: 30px;
      margin-top: 10px;
      text-align: center;
    }
    .login button{
      margin-right: 80px;
    }

    </style>
    
    </head>
    <body>
        
        <div class="login">
        <?php
        if (isset($login)) {
          if(empty($adminMail) || empty($adminPass)){
            echo "<div class='alert alert-danger'>" . "الرجاء إدخال البريد الإلكتروني وكلمة السر" . "</div";
          }
          else {
            $query = "SELECT * FROM admin WHERE email='$adminMail' AND password='$adminPass'";
            $resutl = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($resutl);

            if (in_array($adminMail,$row) && in_array($adminPass,$row)) {
              echo "<div class='alert alert-success'>" . "مرحباً , سيتم تحويلك الى لوحة التحكم" . "</div";
              $_SESSION['id'] = $row['id'];
              header('REFRESH:5;URL=categories.php');
            }
            else {
              echo "<div class='alert alert-danger'>" . "البيانات غير متطابقة" . "</div";
            }

          }
        }
     ?>
        
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <h5>تسجيل الدخول</h5>
      <div class="form-group">
        <label for="mail">البريد الإلكتروني</label>
        <input type="text" class="form-control"  id="mail" name="email"/>
      </div>
      <div class="form-group">
        <label for="pass">كلمة السر</label>
        <input type="text" class="form-control"  id="pass" name="password"/>
      </div>
      <button class="custom-btn" name="log">تسجيل الدخول</button>
    </form>
  </div>
    
    
    
    
    
    
    



<?php include('include/footer.php'); ?>