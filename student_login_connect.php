<?php
$host="localhost";
$user="root";
$password="";
$db="student_login";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['student_id']));
$stud_id=$_POST['student_id'];
$pass=$_POST['password'];

$sql="SELECT * FROM student_login_data WHERE student_id='".$stud_id."' AND password='".$pass."'
limit 1";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
 echo "you have succesfully looged in";
 exit();
}
 else{
    echo"you have entered wrong information!!";
    exit();
 }

?>

// define('db_server','localhost');
// define('db_username','root');
// define('db_password','');
// define('db_name','student_login');

// $conn=mysqli_connect(db_server,db_username,db_password,db_name);
// if(isset($_POST['submit'])){
//     $student_id =mysqli_real_escape_string($conn,$_POST['student_id']);
//     $password=md5($_POST['password']);
//     $select="SELECT * FROM student_login_data WHERE student_id='$student_id' && password='$password'";
//     $result=mysqli_query($conn,$select);
//  if(mysqli_num_rows($result)>0){
//     $row=mysqli_fetch_array($result);
//     if($row['student_id']=='student_id' && $row['password']=='password'){
//         $_SESSION['student_id']=$row['student_id'];
//         $_SESSION['student_id']=$row['student_id'];
//         header('location:collegeattendance.php');

//     }
//     else{
//         $error[]="try again";
//         echo($error);
//     }
//  }
   
// }


