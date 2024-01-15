<?php
session_start();
$message="";
$host = "localhost";
$user = "root";
$password = "";
$db = "admin_login";
$con = mysqli_connect($host, $user, $password, $db);
if (isset($_POST['admin_id'])) {
    $_SESSION ['admin_id ']= $_POST['admin_id'];
    $_SESSION['password'] = $_POST['password'];

    $sql = "SELECT * FROM admin_login_data WHERE admin_id='" . $_POST['admin_id'] . "' AND password='" . $_POST['password'] . "'
limit 1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin_id']= $_POST['admin_id'];
        $_SESSION['password'] = $_POST['password'];
        header('location:admin_index.php');
        exit();
    } 
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login for ERP system</title>
    <style>
        body {
            height: 100%;
            width:auto;
            margin: 0;
            padding: 0;
        }
        .nav {
            background-color: rgb(0, 0, 120);
            color: white;
            padding-top: 1%;
            height: 15%;
            font-size: 35px;
            border-style: solid;
            border-color: azure;
            border-width: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-style: solid;
            border-color: black;
            border-width: 3px;
            width: 100%;


        }
        .logo1 {
            padding-right: 30px;
            padding-bottom: 10px;
            width: 80px;
            height: 90px;
        }

        .logo2 {
            padding-left: 30px;
            padding-bottom: 10px;
            width: 80px;
            height: 90px;
        }
        .container {
            height: 80%;
            width: 100%;
            background-color: rgb(228, 226, 226);
            padding-left: 5px;
            padding-right: 5px;
            background-color: aliceblue;
            display: flex;



        }

       

       


        .background {
            background-image: url("tae_campus_blur.jpg");
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            background-size: 100% 100%;

        }

        .login {
           
            text-align: center;
            font-size: 30px;
            font-weight: bolder;
            
           
           

        }

        .login_block {
            
            height: 270px;
            width: 450px;
            background-color: #fff;
            margin-top: 15px;
            border-style: solid;
            border-color: black;
            border-width: 3px;
            border-radius: 5px;
            box-shadow: #fff;


        }


        .text {
            margin-left: 15px;
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

        }

        .submit {
            cursor: pointer;
            margin-top: 5px;
            background-color: rgb(196, 189, 189);
            color: black;
            border-style: solid;
            border-radius: 8px;
            border-color: aliceblue;
            font-size: 18px;
            font-weight: 400;
            width: 200px;
            margin-left: 120px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
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

        .error {
            font-size: 15px;
            color: red;
        }



        .footer {
            width: 100%;
            height: 5%;
            font-size: 18px;
            
            background-color: aliceblue;
            margin-top: 1px;
            border-style: solid;
            border-top-color: 3px black;
            padding-top: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media screen and (max-width:768px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 30px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;


            }

            .logo1 {
                padding-right: 20px;
                padding-bottom: 10px;
                width: 60px;
                height: 80px;
            }

            .logo2 {
                padding-left: 20px;
                padding-bottom: 10px;
                width: 60px;
                height: 80px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 26px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 420px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 17px;
                font-weight: 400;
                width: 180px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 17px;
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
                font-size: 14px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 14px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 16px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (max-width:630px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 26px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;
                 margin: 0;

            }

            .logo1 {
                padding-right: 5px;
                padding-bottom: 10px;
                width: 40px;
                height: 60px;
            }

            .logo2 {
                padding-left:5px;
                padding-bottom: 10px;
                width: 40px;
                height:60px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 26px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 420px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 17px;
                font-weight: 400;
                width: 180px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 17px;
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
                font-size: 14px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 14px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 16px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (max-width:500px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 24px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;
                 margin: 0;

            }

            .logo1 {
                padding-right: 5px;
                padding-bottom: 10px;
                width: 30px;
                height: 40px;
            }

            .logo2 {
                padding-left:5px;
                padding-bottom: 10px;
                width: 30px;
                height:40px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 26px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 420px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 17px;
                font-weight: 400;
                width: 180px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 17px;
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
                font-size: 14px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 14px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 16px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        @media screen and (max-width:440px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 20px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;
                 margin: 0;

            }

            .logo1 {
                padding-right: 5px;
                padding-bottom: 10px;
                width: 30px;
                height: 40px;
            }

            .logo2 {
                padding-left:5px;
                padding-bottom: 10px;
                width: 30px;
                height:40px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 22px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 360px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 17px;
                font-weight: 400;
                width: 180px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 17px;
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
                font-size: 14px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 14px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 12px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        @media screen and (max-width:375px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 18px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;
                 margin: 0;

            }

            .logo1 {
                padding-right: 2px;
                padding-bottom: 10px;
                width: 30px;
                height: 40px;
            }

            .logo2 {
                padding-left:2px;
                padding-bottom: 10px;
                width: 30px;
                height:40px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 22px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 320px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 18px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 17px;
                font-weight: 400;
                width: 120px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 17px;
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
                font-size: 14px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 14px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 12px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (max-width:320px) {
            body {
                height: 100%;
                width: auto;
                margin: 0;
                padding: 0;
            }

            .nav {
                background-color: rgb(0, 0, 120);
                color: white;
                padding-top: 1%;
                height: 15%;
                font-size: 14px;
                border-style: solid;
                border-color: azure;
                border-width: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                width: auto;
                 margin: 0;

            }

            .logo1 {
                padding-right: 2px;
                padding-bottom: 10px;
                width: 30px;
                height: 40px;
            }

            .logo2 {
                padding-left:2px;
                padding-bottom: 10px;
                width: 30px;
                height:40px;
            }

            .container {
                height: 80%;
                width: 100%;
                background-color: rgb(228, 226, 226);
                padding-left: 5px;
                padding-right: 5px;
                background-color: aliceblue;
                display: flex;
               
            

            }






            .background {
                background-image: url("tae_campus_blur.jpg");
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 100%;
                background-size: auto 100%;

            }

            .login {

                text-align: center;
                font-size: 20px;
                font-weight: bolder;




            }

            .login_block {

                height: 250px;
                width: 300px;
                background-color: #fff;
                margin-top: 15px;
                border-style: solid;
                border-color: black;
                border-width: 3px;
                border-radius: 5px;
                box-shadow: #fff;


            }


            .text {
                margin-left: 15px;
            }

            .id {
                font-size: 14px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 60px;
                display: flex;
                justify-content: center;

            }

            .password {
                font-size: 14px;
                font-family: sans-serif;
                text-align: center;
                padding: 20px;
                font-weight: bold;
                padding-top: 40px;
                display: flex;
                justify-content: center;

            }

            .submit {
                cursor: pointer;
                margin-top: 5px;
                background-color: rgb(196, 189, 189);
                color: black;
                border-style: solid;
                border-radius: 8px;
                border-color: aliceblue;
                font-size: 15px;
                font-weight: 400;
                width: 120px;
                margin-left: 120px;
                margin-top: 10px;
                display: flex;
                justify-content: center;
            }

            .submit:hover {
                color: white;
                background-color: rgb(5, 5, 140);
                font-weight: bold;
            }

            .signup_underline {
                text-decoration: none;

                font-size: 15px;
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
                font-size: 13px;
                padding-top: 10px;
                text-decoration: none;
                display: flex;
                justify-content: center;
                color: white;


            }

            .error {
                font-size: 13px;
                color: red;
            }



            .footer {
                width: 100%;
                height: 5%;
                font-size: 12px;

                background-color: aliceblue;
                margin-top: 1px;
                border-style: solid;
                border-top-color: 3px black;
                padding-top: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

    </style>
</head>

<body>
    <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2"></nav>
    <div class="container">

        <div class="background">

            <div class="login"> Admin Login
                <div class="login_block">
                    <form action="#" method="post">

                        <label class="id">Admin Id:<input type="text" name="admin_id" class="text" required></label>
                        <label class="password">Password:<input type="password" name="password" class="text" required></label>
                        <label><input type="Submit" class="submit"></label>
                        <span class="error"> <?php
                        
                                                $host = "localhost";
                                                $user = "root";
                                                $password = "";
                                                $db = "admin_login";
                                                $message = "";
                                                $con = mysqli_connect($host, $user, $password, $db);
                                                if (isset($_POST['admin_id'])) {
                                                    $student_id = $_POST['admin_id'];
                                                    $password = $_POST['password'];

                                                    $sql = "SELECT * FROM admin_login_data WHERE admin_id='" . $_POST["admin_id"] .  "' AND password='" . $_POST["password"] . "'
                    limit 1";
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) != 1) {
                                                        echo ($message = "Invalid Admin Id or Password !");
                                                        
                                                        exit();
                                                    }
                                                }
                                                ?>
                        </span>

                    </form>
                </div>
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