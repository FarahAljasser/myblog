
<!-- Connection in the data base -->
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'myblog';

$conn = mysqli_connect($host,$user,$password,$dbname);

/*
if(isset($conn)){
    echo 'connected';
}else{
    echo 'not connected';
}
?>
*/