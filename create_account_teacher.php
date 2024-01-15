<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "teacher_login";
$con = mysqli_connect($host, $user, $password, $db);
if (isset($_POST['teacher_id'])) {
    $teach_id = $_POST['teacher_id'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $sql = "SELECT * FROM teacher_login_data WHERE teacher_id='" . $teach_id . "' AND password='" . $pass . "' ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

        echo ("user already exist");
    } else {
        if ($pass != $cpass) {
            echo ("password not matched");
            exit();
        } else {
            $insert = "INSERT INTO teacher_login_data(teacher_id,password,cpassword) values('" . $teach_id . "' ,'" . $pass . "','" . $cpass . "')";
            mysqli_query($con, $insert);
            echo ("Account Created Succesfully!");
            echo header('location:teacher_login.php');
        }
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Login for ERP system</title>
    <style>
        .container {
            height: 100%;
            background-color: rgb(228, 226, 226);
            padding-left: 5px;
            padding-right: 5px;
            background-color: aliceblue;
            display: flex;



        }

        .nav {
            background-color: rgb(0, 0, 120);
            color: white;
            padding-top: 1%;
            height: 10%;
            font-size: 35px;
            border-style: solid;
            border-color: azure;
            border-width: 5px;
            display: flex;
            justify-content: center;
            border-style: solid;
            border-color: black;
            border-width: 3px;

        }

        .logo1 {
            padding-right: 30px;
            padding-bottom: 10px;
        }

        .logo2 {
            padding-left: 30px;
            padding-bottom: 10px;
        }


        .background {
            background-image: url("tae_campus_blur.jpg");
            background-repeat: no-repeat;
            display: flexbox;
            justify-content: center;
            width: 100%;
            background-size: 100% 100%;

        }

        .login {
            text-align: center;
            padding-top: 3%;
            font-size: 30px;
            font-weight: bolder;


        }

        .login_block {
            display: block;
            margin-left: 35%;
            height: 350px;
            width: 450px;
            background-color: #fff;
            margin-top: 35px;
            border-style: solid;
            border-color: black;
            border-width: 3px;
            border-radius: 5px;
            box-shadow: #fff;


        }


        .text {
            margin-left: 95px;


        }

        .text1 {
            margin-left: 15px;
            margin-bottom: 20px;
        }

        .id {
            font-size: 20px;
            font-family: sans-serif;
            text-align: center;
            padding: 20px;
            font-weight: bold;
            padding-top: 60px;
            display: flex;
            justify-content: center;
            float: left;

        }

        .password {
            font-size: 20px;
            font-family: sans-serif;
            text-align: center;
            padding: 20px;
            font-weight: bold;
            padding-top: 40px;
            display: flex;
            justify-content: center;
            float: left;


        }

        .submit {
            cursor: pointer;
            margin-top: 40px;
            background-color: rgb(196, 189, 189);
            color: black;
            border-style: solid;
            border-radius: 8px;
            border-color: aliceblue;
            font-size: 18px;
            font-weight: 400;
            width: 200px;
            margin-left: 120px;
            display: flex;
            justify-content: center;
            padding-top: 5px;
            padding-bottom: 3px;
        }

        .submit:hover {
            color: white;
            background-color: rgb(5, 5, 140);
            font-weight: bold;
        }

        .signup_underline {
            text-decoration: none;
            font-size: 19px;
            margin-top: 15px;
            cursor: pointer;
            padding: 5px;
            color: rgb(255, 255, 255);
            background-color: rgba(12, 9, 9, 0.201);

        }

        .signup_underline:hover {
            color: rgb(255, 255, 255);
            background-color: rgba(12, 10, 10, 0.792);
        }

        .signup {
            text-align: center;
            font-size: 15px;
            padding-top: 10px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            color: white;


        }



        .footer {
            width: auto;
            height: 4%;
            font-size: 15px;
            text-align: center;
            background-color: aliceblue;
            margin-top: 15px;
            border-style: solid;
            border-top-color: 3px black;
            padding-top: 5px;
        }
    </style>
</head>

<body>
    <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2"></nav>
    <div class="container">

        <div class="background">

            <div class="login"> Create Teacher's Account
                <div class="login_block">
                    <form action="#" method="post">

                        <label class="id">Teacher Id:<input type="text" name="teacher_id" class="text" required></label>
                        <label class="password">Password:<input type="password" name="password" class="text" required></label>
                        <label class="password">confirm password:<input type="text" name="cpassword" class="text1" required></label>
                        <label><input type="Submit" class="submit"></label>

                    </form>
                </div>
            </div>
            <div class="signup">
                <a href="home.php" class="signup_underline">Already have an account , Go To Home Page!</a>
            </div>
        </div>

    </div>
    <div class="footer">
        <footer>
            <b>COLLEGE ATTENDANCE SYSTEM © 2023</b>
        </footer>
    </div>
</body>

</html>