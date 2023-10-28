<?php
include('config.php');

$result = mysqli_query($connection, "SELECT * from `ajaxtbl`");
if($result){
    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_assoc($result)){
            echo  '<tr>
            <th scope="row">'.$row['ID'].'</th>
            <th scope="row">'.$row['Name'].'</th>
            <th scope="row">'.$row['email'].'</th>
            <th scope="row">'.$row['pass'].'</th>
            
          </tr>';
}
    }
}


?>