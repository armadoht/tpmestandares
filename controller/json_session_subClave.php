<?php

if(isset($_POST['campo'])){
   $con = new mysqli('localhost','root','tic2020!','grupak_hgo');
   if($con){
       $query = "SELECT * FROM ".$_POST['campo']."";
       $result=$con->query($query);
       if ($result->num_rows > 0) {
           while ($row = $result->fetch_array()) {
                $resultSet[] = $row;
            }
           echo json_encode($resultSet);
       }else{
           echo 0;
       }
   }
}

?>
