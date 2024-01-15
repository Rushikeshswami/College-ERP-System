

<?php
    session_start();
    if ($_SESSION['admin_id']) {
       
    } else {
        header("location:admin_login.php");
    }
    ?>
 <html lang="en">

 <head>
     <title>College Attendance System</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA.Compatible" content="IE=edge">
     <!-- <link rel="stylesheet" href="collegeattendance.css"> -->
     <style>
         .main {
             height: 100%;
             display: block;
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
             border-style: solid;
             border-color: black;
             border-width: 3px;
            padding-left: 30%;
             
            
         }

         .logo1 {
             padding-right: 30px;
             padding-bottom: 10px;
             margin-left: 10px;
            
         }

         .logo2 {
             padding-left: 30px;
             padding-bottom: 10px;
             margin-right: 40px;
             
         }
         .logout{
            margin-left: 30px;
            display:inline-flexbox;
            padding-top: 15px;
           font-size: 15px;
           width: fit-content;
           border-style: solid;
          border-color: black;
          
           
         }
         .logout1{
             text-decoration: none;
             font-size: 15px;
             color: red;
             font-weight: bolder;
         }
         .logout1:hover{
            color: red;
            font-size: 18px;
            font-weight:bold;
            cursor: pointer;
            
           }

         .container {
             height: 80%;
             display: inline-flexbox;
         }

         .container1 {
             width: 25%;
             height: 100%;
             background-color: rgb(44, 118, 127);
             margin-top: 3px;
             border-style: solid;
             border-top-width: 2px;
             border-bottom-width: 2px;
             border-right-width: 5px;
             border-left-width: 5px;
             display: block;
             justify-items: center;
             float: left;
         }

         .button {
             width: max-content;
             border-style: solid;
             border-color: rgb(23, 14, 14);
             border-radius: 12px;
             padding-left: 25px;
             padding-right: 25px;
             padding-top: 10px;
             padding-bottom: 10px;
             background-color: rgb(88, 56, 56);
             color: white;

         }

         .div_space1 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             margin-bottom: 5px;
             display: flex;
             justify-content: center;
             margin-bottom: 10px;
             cursor: pointer;
         }

         .div_space2 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             margin-bottom: 5px;
             display: flex;
             justify-content: center;
             margin-bottom: 10px;
             cursor: pointer;
         }

         .div_space3 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             margin-bottom: 5px;
             display: flex;
             justify-content: center;
             margin-bottom: 10px;
             cursor: pointer;
         }

         .div_space4 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             margin-bottom: 5px;
             display: flex;
             justify-content: center;
             margin-bottom: 10px;
             cursor: pointer;
         }

         .div_space5 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             margin-bottom: 5px;
             display: flex;
             justify-content: center;
             margin-bottom: 10px;
             cursor: pointer;
         }

         .div_space6 {
             background-color: rgb(242, 249, 238);
             padding: 15px 10px 30px 40px;
             display: flex;
             justify-content: center;
             cursor: pointer;
         }

         .container2 {
             width: 70%;
             height: 100%;
             display: inline-flex;
             background-color: rgb(255, 255, 255);
             border-bottom: 5px black;
             border-style: solid;
             border-width: 2px;
             float: right;
             margin: 5px;


             justify-content: center;
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
     <div class="main">
         <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2">
             <button class="logout">
                 <?php
                    if ($_SESSION['admin_id']) {
                        echo "Welcome " . $_SESSION['admin_id'];
                    }
                    ?>
                 <a href="admin_logout.php" class="logout1"> LogOut</a> </button>
         </nav>
         <div class="container">
             <div class="container1">
                 <div class="div_space1">
                     <span class="button">STUDENT ATTENDANCE</span>
                 </div>
                 <div class="div_space2">
                     <span class="button">TIMETABLE</span>
                 </div>
                 <div class="div_space3">
                     <span class="button">NOTICES</span>
                 </div>
                 <div class="div_space4">
                     <span class="button">STUDENT ASSESSMENT</span>
                 </div>
                 <div class="div_space5">
                     <span class="button">SCHEDULED SYLLABUS</span>
                 </div>
                 <div class="div_space6">
                     <span class="button">EXTRA CURRICULAR ACTIVITIES</span>
                 </div>
             </div>
             <div class="container2">
                 <img src="timetable_TE.jpeg" height="100%" width="100%">
             </div>
         </div>
         <div class="footer">
             <footer>
                 <b>COLLEGE ATTENDANCE SYSTEM © 2023</b>
             </footer>
         </div>
     </div>

 </body>

 </html>