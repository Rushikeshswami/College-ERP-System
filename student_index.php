 <?php

   include('config.php');

    session_start();
    if ($_SESSION['student_id']) {
    } else {
        header("location:student_login.php");
    }
    ?>
 <html lang="en">

 <head>
     <title>College Attendance System</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA.Compatible" content="IE=edge">
     <!-- <link rel="stylesheet" href="collegeattendance.css"> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <style>
         .main {
             height: auto;
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
           justify-content: space-evenly;
            

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

         .logout {
            
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
             padding-top: 15px;
             font-size: 15px;
             width: auto;
             border-style: solid;
             border-color: black;


         }

         .logout1 {
             text-decoration: none;
             font-size: 15px;
             color: black;
            
         }

         .logout1:hover {
             color: red;
             font-size: 18px;
             font-weight: bold;
             cursor: pointer;

         }

         .container1 {
             height: 100%;
             width: 100%;
             
             display: flex;
             color: black;
             margin-top: 10px;

         }

         .div1 {
             width: 25%;
             background-color: 330066;
             height: 100%;
             border-style: solid;
             border-color: black;
             border-right: 3px;
             text-align: center;
         }

         .button {
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-color: white;
             border-radius: 15px;
             margin: 10px;
             color: whitesmoke;
             border-color: white;
             background-color: 990033;



         }

         .attendance {
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-radius: 15px;
             margin: 10px;
             border-color: white;
             color: whitesmoke;
             background-color: 990033;

         }
         .marks {
            
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-color: white;
             border-radius: 15px;
             margin: 10px;
             color: whitesmoke;
             border-color: white;
             background-color: 990033;



         
         }

         .timetable {
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-radius: 15px;
             margin: 10px;
             border-color: white;
             color: whitesmoke;
             background-color: 990033;


         }

         .notices {
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-radius: 15px;
             margin: 10px;
             border-color: white;
             color: whitesmoke;
             background-color: 990033;

         }
         .syllabus{
             display: block;
             justify-content: center;
             padding: 30px;
             font-size: 20px;
             font-weight: bold;
             cursor: pointer;
             border-style: solid;
             border-radius: 15px;
             margin: 10px;
             border-color: white;
             color: whitesmoke;
             background-color: 990033;

         }

         .div2 {

             height: 100%;
             width:100%;
             border-style: solid;
             border-color: black;
             border-width: 3px;
             margin-left: 5px;
             overflow-y: scroll;
             background-color: white;
             background-image: url("tae_campus_blur.jpg");
             background-size: 100% 100%;

         }

         .container {
             width: 100%;
             height: fit-content;
             color: white;
             font-weight: bold;
             font-size: 20px;

         }



         

        

         .prn {
           
             width: 200px;
             height: 30px;
             background-color: transparent;
             color: black;
             /* margin-left:70%; */
             margin-top: 40px;
             margin-bottom: 30px;

         }

         .text {
             font-weight: bold;
             font-size: 15px;
             margin-left: 400px;
             background-color: transparent;

         }

         .submit {
             margin-left: 450px;
             display: grid;
             padding-left: 30px;
             padding-right: 30px;
             margin-top: 15px;
             cursor: pointer;
         }

         .submit:hover {
             background-color: black;
             color: white;
             font-weight: bold;
             font-size: 15px;
         }


         .table {
             width: 100%;
             display: flex;
             border-style: solid;
             border-width: 3px;
             border-color: black;
             margin-right: 50%;
             background-color: maroon;
             color: white;
             margin-top: 30px;
             font-weight: bolder;


         }

         .table1 {
             padding-right: 50px;
             padding-bottom: 10px;
             padding-left: 40px;


         }

         .table2 {
             padding-right: 70px;





         }

         .table3 {

             padding-right: 200px;




         }

         .table4 {
             padding-left: 170px;
             padding-right: 50px;



         }

         .table5 {
             padding-left: 30px;
             padding-right: 20px;


         }
         .table55 {
             padding-left: 260px;
             padding-right: 20px;


         }

         .row {
             display: flex;
             border-style: solid;
             border-width: 3px;
             border-color: black;
             padding-right: 30px;
             border-top: transparent;
             padding-top: 10px;
             padding-bottom: 10px;
             height: fit-content;
             font-weight: bolder;
             background-color: white;




         }

         

         .row1 {
             display: flex;
             width: 10%;
             justify-content: center;



         }

         .row2 {
             display: flex;
             width: 20%;
             justify-content: center;
             padding-left: 10px;
             padding-right: 170px;
             


         }

         .row3 {
            width: 30%;
            padding-left:140px;
            /* padding-right: 60px; */

         }

         .row4 {
            display: flex;
             justify-content: left;
            


         }

         .row5 {
             display: flex;
             
             justify-content: center;
             padding-left: 10px;


         }
         .row11 {
             display: flex;
             width: 10%;
             justify-content: center;



         }

         .row22 {
             display: flex;
             width: 50px;
             justify-content: center;
             padding-left: 90px;
             padding-right: 80px;
             


         }

         .row33 {
            width: 200px;
            padding-left:20px;
            /* padding-right: 60px; */

         }

         .row44 {
            
             justify-content: center;
             padding-left: 300px;


         }

         .row55 {
             display: flex;
             
             justify-content: center;
             padding-left: 160px;


         }
         .row6 {
             display: flex;
             width: auto;
             border-top: transparent;

             height: auto;
             font-weight: bolder;

             border-style: solid;
             text-align: center;
             padding-left: 35%;

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
         .name{
                color:red;
                font-weight: bolder;

            }
        .logout_grid{
          display: grid;
          
        }
     </style>
 </head>

 <body>
     <div class="main">
         <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2">
             <button class="logout">
                 <?php
                    if ($_SESSION['student_id']) {
                        echo "Welcome " ?><span class="name"><?php echo $_SESSION['student_id'];?></span><?php
                    }
                    ?>
                 <span class="logout_grid"><a href="student_logout.php" class="logout1" > LogOut</a></span> </button>
         </nav>

         <div class="container1">
             <div class="div1">

                 <span class="attendance">Student Attendance</span>

                 <span class="marks">Student Marks</span>


                 <span class="timetable">Timetable</span>


                 <span class="notices">Notices</span>


                 


                 <span class="syllabus">SCHEDULED SYLLABUS</span>


                 <span class="button">EXTRA CURRICULAR </span>


             </div>
             <div class="div2">
                 <?php
                  
//attendance view
               
                    if ($_SESSION['student_id']) {
                        if (isset($_POST['update'])) {
                            $PRN_NUMBER = $_POST['prn_number'];
                            $TOTAL;
                            $ROLL_NUMBER;
                            
                            $ATTENDANCE_PERCENTAGE;
                            $TOTAL_CLASSES;
                            $STUDENT_NAME = $_SESSION['student_id'];
                              $sql = "SELECT * FROM webtechnology_attendance_marking_db WHERE PRN_NUMBER= '$PRN_NUMBER' AND STUDENT_NAME='$STUDENT_NAME' ORDER BY TOTAL_CLASSES DESC LIMIT 1";
                              $result = mysqli_query($con, $sql);
                              $row1 = mysqli_num_rows($result);
                              
                            

                    ?>

                         <div class="table">
                             <div class="table1">Roll_number</div>
                             <div class="table2"> PRN_number</div>
                             <div class="table3">Student_name</div>
                             <div class="table4">Total_Attended</div>
                             <div class="table5">Attendance_percentage</div>
                         </div>
                         <?php
                            ?>
                         <div class="row6"> <?php if ($row1 == 0) {
                                                echo ($message);
                                            }
                                            ?>
                         </div>
                         <?php
                              
                            while ($row = mysqli_fetch_array($result)) {


                            ?>

                             <div class="row">

                                 <div class="row11"> <?php echo $row['ROLL_NUMBER'] ?></div>
                                 <div class="row22"> <?php echo $row['PRN_NUMBER'] ?></div>
                                 <div class="row33"> <?php echo $row['STUDENT_NAME'] ?></div>
                                 <div class="row44"> <?php echo $row['TOTAL'] ?></div>
                                 <div class="row55"> <?php echo $row['ATTENDANCE_PERCENTAGE'] ?></div>


                             </div>
                         <?php

                            }
                            ?>



                 <?php


                        }

                }

                //marks

               
                 $query="SELECT *  FROM webtechnology_marks_marking";
                 $query_run=mysqli_query($con,$query);
                 if ($_SESSION['student_id']) {
                 if(isset($_POST['submit'])){ 
                   if(isset($_POST['Roll'])){
                    $STUDENT_NAME = $_SESSION['student_id'];

                    $roll=$_POST['Roll'];
                    $sql = "SELECT * FROM webtechnology_marks_marking WHERE ROLL_NUMBER='$roll' and STUDENT_NAME='$STUDENT_NAME'";
                    $result1 = mysqli_query($con, $sql);
                    $row1 = mysqli_num_rows($result1);

            ?>

                 <div class="table">
                     <div class="table1">Roll_number</div>
                     <div class="table3">Student_name</div>
                     <div class="table4">UT1</div>
                     <div class="table55">UT2</div>
                     
                 </div>
                 <?php
                    ?>
                 <div class="row6"> <?php if ($row1 == 0) {
                                        echo ($message);
                                    }
                                    ?>
                 </div>
                 <?php

                 $row2 = mysqli_fetch_array($result1);
                   if($row2!=null){

                    ?>
                   
                     <div class="row">

                         <div class="row1"> <?php echo $row2['ROLL_NUMBER'] ?></div>
                         <div class="row2"> <?php echo  $row2['STUDENT_NAME']?></div>
                         <div class="row3"> <?php echo  $row2['UT1']?></div>
                         <div class="row4"> <?php echo $row2['UT2'] ?></div>
                         


                     </div>
                 <?php
                   }
                  
                              
                   }
                   
                 
                }
              
        }
                 

                    ?>
                    

             </div>


         </div>



     </div>




     </div>
     <script>
         $(document).ready(function() {
             $('.attendance').click(function() {
                 $('.div2').load('student_attendance_view.php')
             });
         });
         $(document).ready(function() {
             $('.marks').click(function() {
                 $('.div2').load('student_marks_view.php')
             });
         });
         $(document).ready(function() {
             $('.timetable').click(function() {
                 $('.div2').load('te_timetable.php')
             });
         });
         $(document).ready(function() {
             $('.notices').click(function() {
                 $('.div2').load('notices.php')
             });
         });
         $(document).ready(function() {
             $('.syllabus').click(function() {
                 $('.div2').load('scheduled_syllabus_student.php')
             });
         });
     </script>
     <br>
     <footer class="footer">
         <b>COLLEGE ATTENDANCE SYSTEM © 2023</b>
     </footer>

 </body>

 </html>