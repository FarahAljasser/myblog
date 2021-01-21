<?php
include ('include/connection.php');
include ('public/header.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST["name"];
  $email= $_POST["email"];
  $message = $_POST["message"];
$sql ="INSERT INTO cummunicate(name, email, message) VALUES ('$name', '$email',  '$message')";


}
  $nameError = $emailError = $messageError = '';
?>
<center><h1> التواصل <h1></center>
    	<br><br>

<div class="container">
<div class="row" style="text-align: right;">
  <form class="col-lg-6 col-sm-6" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    
  

      <div class="form-group">
        <label for="name"> الاسم </label>
        <input type="text" name="name" class="form-control mb-4" required>
        <span class="test-danger"><?php echo $nameError ?></span>
        </div>

      <div class="form-group">
      <label for="email"> الايميل </label>
      <input type="email" name="email" class="form-control mb-4" required>
      <span class="test-danger"><?php echo $emailError ?></span></span>
      </div>


      <div class="form-group">
      <label for="message"> الرسالة </label>
      <textarea name="message" rows="8" class="form-control mb-4" required></textarea>
      <span class="test-danger"><?php echo $messageError ?></span>
      </div>
      

      <button name="send" class="btn btn-info btn-block">إرسال !</button>
     
      

  </form>
  
  
  
    <img src="https://ontime2030.000webhostapp.com/inDawn.jpg" width="550" height="550" >
  </div>
</div>

  <?php 
    
  if ($conn->query($sql) === TRUE) {
     echo "<center><p style='color:green'>" . "تم الارسال " . "</p></center>";
} 
?>
<?php include ('include/footer.php'); ?>
