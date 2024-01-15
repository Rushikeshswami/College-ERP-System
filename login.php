<?php
define('db_server','localhost');
define('db_username','root');
define('db_password','');
define('db_name','student_login');

$conn=mysqli_connect(db_server,db_username,db_password,db_name);
// if(isset($_POST['submit'])){
//     $student_id =mysqli_real_escape_string($conn,$_POST['student_id']);
//     $password=md5($_POST['password']);
//     $select="SELECT * FROM student_login_data WHERE student_id='$student_id' && password='$password'";
//     $result=mysqli_query($conn,$select);

   
// }
if($conn==false){
    dir("cannot connect");
}
?>