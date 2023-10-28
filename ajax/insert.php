<?php
include('config.php');

$name = $_POST['name']; 
$email = $_POST['email']; 
$pass = $_POST['password']; 

$result = mysqli_query($connection,"INSERT INTO `ajaxtbl`(`name` ,`email` ,`pass`) VALUES ('$name' , '$email' , '$pass')");

if($result){
echo "regesteration Successfull" ;

}else{
    echo "query failed";
}

?>