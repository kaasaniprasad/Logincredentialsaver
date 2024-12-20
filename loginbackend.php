<?php

$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','prasad_1');
$select_query="select * from student";
$result=mysqli_query($con,$select_query);
$row=mysqli_fetch_assoc($result);
$count=0;
while($row=mysqli_fetch_assoc($result)){
    if($email==$row['email' ] && $password==$row['password'] ){
         $count++;
    }

}
if($count>=1){
    echo "<div style='background-color:blue; height:900px; ' >
        
        <h4 style='margin-left: 700px; margin-top:-10px;'>Login successfully done go to Home</h4>
        <a href='homepr1.php' style='margin-left:800px; margin-top:500px; border:2px solid; background-color:bisque; padding:10px; text-decoration:none'>Home</a>
    </div>";
}
else{
    echo "<div style='background-color:blue; height:900px; ' >
        
        <h4 style='margin-left: 700px; margin-top:-10px;'>incorrect password or email</h4>
        <a href='loginpr1.php' style='margin-left:800px; margin-top:500px; border:2px solid; background-color:bisque; padding:10px; text-decoration:none'>Login</a>
    </div>";

}
?>