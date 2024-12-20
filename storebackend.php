<?php

$con=mysqli_connect('localhost','root','','prasad_1');
 
   if(isset($_POST['submit'])){
    $useremail=$_POST['useremail'];
    $appname=$_POST['appname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
     $insert_query="insert into data(user_eid,app_name,pasword,e_id) values('$useremail','$appname','$password','$email')";
     $result=mysqli_query($con,$insert_query);
     if($result){
        echo "data inserted";
     }
      
   }
 ?>