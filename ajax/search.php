<?php
include ('config.php');
$input = $_POST['input'];
$result = mysqli_query($connection , "SELECT * FROM `ajaxtbl` where `name` like '%$input%'");
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo  '<tr>
            <td>'.$row['ID'].'</td>
            <td>'.$row['Name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['pass'].'</td>
            
          </tr>';


        }
    }
}




?>