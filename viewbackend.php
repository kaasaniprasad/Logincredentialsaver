<?php
 $con=mysqli_connect('localhost','root','','prasad_1');
 if(isset($_POST['submit'])){
 $usemail=$_POST['usemail'];
 $select_query="select * from data";
 $result=mysqli_query($con,$select_query);
  $row=mysqli_fetch_assoc($result);
  echo "<table style='margin-left:200px; background-color: aquamarine;'  width='1300px' height='50px' >
        <tr>
        <th  width='400px'>App Name</th>
        <th width='400px'>Password</th>
        <th width='400px'>e_mail</th>
        </tr>
    </table>";
  while($row=mysqli_fetch_assoc($result)){
    if($usemail==$row['user_eid']){
    $appname=$row['app_name'];
$email=$row['e_id'];
$password=$row['pasword'];
echo "<table style='margin-left:200px;'  width='1300px' height='50px'>
        <tr>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$appname</td>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$password</td>
            <td style='border:1px solid; margin-left:20px;' width='400px'>$email</td>
        </tr>
    </table>

";
    }

  }
}
 ?>