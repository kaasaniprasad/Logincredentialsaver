<?php
$con=mysqli_connect('localhost','root','','prasad_1');
if($con){
     
}
else{
    die("connection failed".mysqli_connect_error());
}
if(isset($_POST['submit'])){
$fullname=$_POST['fulname'];
$email=$_POST['email'];
$password=$_POST['password'];
$select_query="select * from student";
$result1=mysqli_query($con,$select_query);
$count=0;
while($row=mysqli_fetch_assoc($result1)){
    if($email==$row['email']){
        $count++;
    }

}
if($count>=1){
    echo " <div style='background-color: blueviolet; height:900px; ' >
        
        <h4 style='margin-left: 700px; margin-top:-10px;'>email already exisst go to Login page</h4>
        <a href='loginpr1.php' style='margin-left:800px; margin-top:500px; border:2px solid; background-color:bisque; padding:10px; text-decoration:none'>Login</a>
    </div>
     ";
}
else{

$insert_query="insert into student(studentname,email,password) values('$fullname','$email','$password')";
$result=mysqli_query($con,$insert_query);
echo "<div style='background-color:aqua; height:900px; ' >
        
        <h4 style='margin-left: 700px; margin-top:-10px;'>Registrastion successfully done go to Home</h4>
        <a href='homepr1.php' style='margin-left:800px; margin-top:500px; border:2px solid; background-color:bisque; padding:10px; text-decoration:none'>Home</a>
    </div>";
}
}
 