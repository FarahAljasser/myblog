<?php
include ('include/connection.php');?>

<!doctype html>
        <html lang="ar" dir="rtl">
          <head>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
*{
    font-family: 'Cairo', sans-serif;
    box-sizing: border-box;
    direction: rtl;
}
.logo{
    text-align: center;
    margin: 40px 0;
}
.logo img{
    width: 100px;
}
.logo h2{
    font-size: 30px;
    font-weight: 500;
    color: #00a9b0;
}
.book{
    text-align: center
}
.book p{
    font-size: 24px;
}
.book input{
    width: 50%;
    margin-bottom: 10px;
    padding: 10px;
}
.book input[type="submit"]{
    font-size: 16px;
    color: #fff;
    background: #00a9b0;
    border: none;
}
table{
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    font-size: 20px;
}
th{
    background: #00a9b0;
    color: #fff;
    padding: 5px 0;
}
            </style>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <!-- Bootstrap CSS -->
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <title> المراسلون </title>
            
          </head>
          <body>
            

    <!-- Start navbar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <a class="navbar-brand" href="index.php"> مدونتي </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="menu">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   <a class="nav-link" href="aboutblog.php"> عن المدونة  </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="categories.php" target="_blank"> لوحة التحكم  </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="communicate.php">التواصل</a>
                </li>
             </ul>
          </div>
        </nav>
        <!-- End navbar -->
    <br><br>    
    <table>
    <th>الرقم</th>
    <th> اسم المرسل</th>
    <th>البريد الإلكتروني</th>
    <th>الرسالة</th>
    
   <?php 
    $query = "SELECT * FROM cummunicate";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['message'] . "</td></td>";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }

?>

