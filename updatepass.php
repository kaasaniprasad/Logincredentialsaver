<?php
$con=mysqli_connect('localhost','root','','prasad_1');
if(isset($_POST['submit'])){
 $username=$_POST['useremail'];
 $appname=$_POST['appname'];
 $pasword=$_POST['password'];
 $update_query="update data set pasword='$password' where user_eid='$username' and app_name='$password' ";
 
 echo "password updated succefully";

}
?>