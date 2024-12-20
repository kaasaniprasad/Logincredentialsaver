<?php
$con=mysqli_connect('localhost','root','','prasad_1');
if(isset($_POST['submit'])){
 $username=$_POST['useremail'];
 $appname=$_POST['appname'];
 $email=$_POST['email'];
 $update_query="update data set pasword='$password' where user_eid='$username' and app_name='$email' ";
 echo "email updated successfully";
 

}
?>