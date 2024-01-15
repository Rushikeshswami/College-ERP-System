<?php
session_start();
include('config.php');

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
            margin-left: 30px;
            display: inline-flexbox;
            padding-top: 15px;
            font-size: 15px;
            width: fit-content;
            border-style: solid;
            border-color: black;


        }

        .logout1 {
            text-decoration: none;
            font-size: 15px;
            color: black;
            font-weight: bolder;
        }

        .logout1:hover {
            color: red;
            font-size: 18px;
            font-weight: bold;
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

        .button1 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

        }

        .button2 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

        }

        .button3 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

        }

        .button4 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

        }

        .button5 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

        }

        .button6 {
            width: fit-content;
            border-style: solid;
            border-color: rgb(23, 14, 14);
            border-radius: 12px;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: rgb(88, 56, 56);
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 18px;

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
            height: 100%;
            width: auto;
            border-style: solid;
            border-color: black;
            border-width: 3px;
            margin-left: 5px;
            margin-bottom: 10px;
            overflow: scroll;

            background-image: url("tae_campus_blur.jpg");
            background-size: 100% 100%;

        }

        .message {
            margin: 30%;
            background-color: white;
            color: red;
            font-size: 25px;
            text-align: center;
            font-weight: 600;
            border-style: solid;
            border-width: 3px;
            border-radius: 10px;
            border-color: black;
            padding: 20px;

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

        .name {
            color: red;
            font-weight: bolder;

        }

        .logout_grid {
            display: grid;

        }
    </style>
</head>

<body>
    <div class="main">
        <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2">
            <button class="logout">
                <?php
                if ($_SESSION['teacher_id']) {
                    echo "Welcome " ?> <span class="name"><?php echo $_SESSION['teacher_id']; ?></span><?php
                                                                                                        }
                                                                                                            ?>
                <span class="logout_grid"><a href="teacher_logout.php" class="logout1"> LogOut</a> </span></button>
        </nav>
        <div class="container">
            <div class="container1">
                <div class="div_space1">
                    <span class="button1">
                        STUDENT ATTENDANCE MARK
                    </span>
                </div>
                <div class="div_space2">
                    <span class="button2">
                        STUDENT ATTENDANCE VIEW
                    </span>
                </div>
                <div class="div_space3">
                    <span class="button3">STUDENT MARKING </span>
                </div>
                <div class="div_space4">
                    <span class="button4">TIMETABLE</span>
                </div>
                <div class="div_space5">
                    <span class="button5">NOTICES</span>
                </div>
                <div class="div_space6">

                    <span class="button6">SCHEDULED SYLLABUS</span>
                </div>


            </div>
            <div class="container2">
                <?php
             if ($_SESSION["teacher_id"]) {
                //  error_reporting(0);
                  $sql = "SELECT * FROM te_student_database";
                  $sql_1 = "SELECT teacher_name FROM WebTechnology_attendance_marking_db ";
                  $sql_2 = "SELECT 'ROLL_NUMBER' FROM WebTechnology_attendance_marking_db WHERE `ROLL_NUMBER`=1 ";



                  $result = mysqli_query($con, $sql);
                  $result1 = mysqli_num_rows($result);
                  $result2 = mysqli_query($con, $sql_1);
                  $result3 = mysqli_num_rows($result2);
                  $result4 = mysqli_fetch_array($result2);
                  $result5 = mysqli_query($con, $sql_2);
                  $result6 = mysqli_num_rows($result5);











                  $absenty[] = 'a';



                  if ($_SESSION["teacher_id"]) {
                    //  error_reporting(0);
                      $sql = "SELECT * FROM te_student_database";
                      $sql_1 = "SELECT teacher_name FROM webtechnology_attendance_marking_db ";
                      $sql_2 = "SELECT 'ROLL_NUMBER' FROM webtechnology_attendance_marking_db WHERE `ROLL_NUMBER`=1 ";
  
  
  
                      $result = mysqli_query($con, $sql);
                      $result1 = mysqli_num_rows($result);
                      $result2 = mysqli_query($con, $sql_1);
                      $result3 = mysqli_num_rows($result2);
                      $result4 = mysqli_fetch_array($result2);
                      $result5 = mysqli_query($con, $sql_2);
                      $result6 = mysqli_num_rows($result5);
  
  
  
  
  
  
  
  
  
  
  
                      $absenty[] = 'a';
  
  
  
                      if ($_SESSION['teacher_id'] == $result4['teacher_name']) {
  
                         for ($i = 0; $i < $result1; $i++) {
                              $sql3 = "SELECT `presenty` FROM webtechnology_attendance_marking_db where ROLL_NUMBER=$i+1 and presenty='P' ";
  
                              $result7 = mysqli_query($con, $sql3);
                              $result8 = mysqli_num_rows($result7);
  
                            
                              $row = mysqli_fetch_array($result);
                              if (isset($_POST['submit_attendance']) ) {
                              
                                  $DATE = $_POST['DATE'];
  
  
                                  $ROLL_NUMBER = $row['ROLL_NUMBER'];
                                  $STUDENT_NAME = $row['STUDENT_NAME'];
                                  $TOTAL_CLASSES = $result6 + 1;
                                  $PRN = $row['PRN_NUMBER'];
  
  
  
  
                                  $select1 = $_POST['presenty'];
  
                                  $select3 = "";
                                  $select4 = "";
                                  $select = "";
  
  
  
                                  if (isset($_POST['presenty'])) {
                                      if (!empty($select1[$i]) and $select1[$i] == 'P' or $select1[$i] == 'p') {
                                          $select3 = implode("", $select1);
                                          $arr = explode("-", $select3);
                                          $arr1 = $select3[$i];
                                          $TOTAL1 = $result8 + 1;
                                      } elseif (!empty($select1[$i]) and $select1[$i] == 'A' or $select1[$i] == 'a') {
  
                                          $select3 = implode("", $select1 = $absenty);
                                          $arr = [$select3];
                                          $arr1 = $select3[$i];
                                          $TOTAL1 = $result8;
                                      } else {
                                          $select3 = implode("", $select1 = $absenty);
                                          $arr = [$select3];
                                          $arr1 = $select3[$i];
                                          $TOTAL1 = $result8;
                                      }
                                  }
                                  $percentage = ($TOTAL1 / $TOTAL_CLASSES) * 100;
  
  
  
  
  
  
  
  
                                  $sql4 = "INSERT INTO webtechnology_attendance_marking_db(`ROLL_NUMBER`,`STUDENT_NAME`,`DATE`,`TOTAL`,`TOTAL_CLASSES`,`presenty`,`PRN_NUMBER`,`ATTENDANCE_PERCENTAGE`)VALUES('$ROLL_NUMBER','$STUDENT_NAME','$DATE','$TOTAL1','$TOTAL_CLASSES','$arr1','$PRN','$percentage') ";
                                  $run = mysqli_query($con, $sql4);
                                  if ($run) {
                                  
                                  ?> 
                                  <script>
                                 
  
  
  
                                      alert(
                                          "Attendance Submitted Succesfully!"
              
                                      );
                                      window.location = "teacher_index.php";
              
              
              
                                  
                              </script>
                         <?php
                         }
                              }
                          }
                          
                      } else {
                          echo ($message);
                      }
                  }
                }
                      //end of attendance marking
                    
                    ?>
                    <?php

if ($_SESSION['teacher_id']) {
                    //start of marks view

                    $sql1 = "SELECT teacher_name FROM webtechnology_marks_marking ";
                    $sql2 = "SELECT * FROM webtechnology_marks_marking";

                    $marks_result = mysqli_query($con, $sql1);
                    $result_3 = mysqli_num_rows($marks_result);
                    $result_4 = mysqli_fetch_array($marks_result);
                    $result_5 = mysqli_query($con, $sql2);
                    $result_6 = mysqli_fetch_array($result_5);
                    $result_7 = mysqli_num_rows($result_5);
                    if ($_SESSION['teacher_id'] == $result_6['teacher_name']) {
                        for ($i = 0; $i < $result_7; $i++) {


                            if (isset($_POST['Submit_marks'])) {
                                $result_6 = mysqli_fetch_array($result_5);

                                $UT1 = $_POST['UT1'];
                                $UT2 = $_POST['UT2'];
                                $INSEM = $_POST['INSEM'];
                                $ORAL = $_POST['ORAL'];
                                $PRACTICAL = $_POST['PRACTICAL'];
                                $TW = $_POST['TW'];
                                $a = $i + 1;
                                $STUDENT_NAME = $result_6['STUDENT_NAME'];
                                $ROLL_NUMBER = $result_6['ROLL_NUMBER'];
                                $display = "";
                                $even = $i % 2;
                                $odd = $i % 2;
                                $TEMP = "00";
                                if (isset($_POST['UT1'])) {

                                    if (!empty($UT1[$i])) {

                                        $UN1 = implode("", $UT1);

                                        if ($i == 0) {
                                            $display1 = $UN1[$i];
                                            $display2 = $UN1[$i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT1 = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $UN1[$i + $i];
                                            $display2 = $UN1[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT1 = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $UN1[$i + $i];
                                            $display2 = $UN1[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT1 = $display;
                                        }
                                    } else {
                                        $TEMP = "00";
                                        $UNIT1 = $TEMP;
                                    }
                                }







                                if (isset($_POST['UT2'])) {
                                    if (!empty($UT2[$i])) {
                                        $UN2 = implode("", $UT2);
                                        if ($i == 0) {
                                            $display1 = $UN2[$i];
                                            $display2 = $UN2[$i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT2 = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $UN2[$i + $i];
                                            $display2 = $UN2[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT2 = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $UN2[$i + $i];
                                            $display2 = $UN2[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $UNIT2 = $display;
                                        }
                                    } else {
                                        $TEMP = 0;
                                        $UNIT2 = ($TEMP);
                                    }
                                }
                                if (isset($_POST['INSEM'])) {
                                    if (!empty($INSEM[$i])) {

                                        $INSEM_EXAM = $INSEM[$i];
                                        if ($i == 0) {
                                            $display1 = $INSEM_EXAM[$i];
                                            $display2 = $INSEM_EXAM[$i + 1];
                                            $display = $display1 . $display2;
                                            $IN = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $INSEM_EXAM[$i + $i];
                                            $display2 = $INSEM_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $IN = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $INSEM_EXAM[$i + $i];
                                            $display2 = $INSEM_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $IN = $display;
                                        }
                                    } else {
                                        $TEMP = 0;
                                        $IN = ($TEMP);
                                    }
                                }
                                if (isset($_POST['ORAL'])) {

                                    if (!empty($ORAL[$i])) {
                                        $ORAL_EXAM = implode("", $ORAL);
                                        if ($i == 0) {
                                            $display1 = $ORAL_EXAM[$i];
                                            $display2 = $ORAL_EXAM[$i + 1];
                                            $display = $display1 . $display2;
                                            $ORAL_MARKS = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $ORAL_EXAM[$i + $i];
                                            $display2 = $ORAL_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $ORAL_MARKS = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $ORAL_EXAM[$i + $i];
                                            $display2 = $ORAL_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $ORAL_MARKS = $display;
                                        }
                                    } else {
                                        $TEMP = 0;
                                        $ORAL_MARKS = ($TEMP);
                                    }
                                }
                                if (isset($_POST['PRACTICAL'])) {

                                    if (!empty($PRACTICAL[$i])) {
                                        $PRACTICAL_EXAM = implode("", $PRACTICAL);
                                        if ($i == 0) {
                                            $display1 = $PRACTICAL_EXAM[$i];
                                            $display2 = $PRACTICAL_EXAM[$i + 1];
                                            $display = $display1 . $display2;
                                            $PRACTICAL_MARKS = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $PRACTICAL_EXAM[$i + $i];
                                            $display2 = $PRACTICAL_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $PRACTICAL_MARKS = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $PRACTICAL_EXAM[$i + $i];
                                            $display2 = $PRACTICAL_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $PRACTICAL_MARKS = $display;
                                        }
                                    } else {
                                        $TEMP = 0;
                                        $PRACTICAL_MARKS = ($TEMP);
                                    }
                                }
                                if (isset($_POST['TW'])) {

                                    if (!empty($TW[$i])) {
                                        $TW_EXAM = implode("", $TW);
                                        if ($i == 0) {
                                            $display1 = $TW_EXAM[$i];
                                            $display2 = $TW_EXAM[$i + 1];
                                            $display = $display1 . $display2;
                                            $TERMWORK = $display;
                                        } elseif ($even == 0) {
                                            $display1 = $TW_EXAM[$i + $i];
                                            $display2 = $TW_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $TERMWORK = $display;
                                        } elseif ($odd != 0) {
                                            $display1 = $TW_EXAM[$i + $i];
                                            $display2 = $TW_EXAM[$i + $i + 1];
                                            $display = $display1 . $display2;
                                            $TERMWORK = $display;
                                        }
                                    } else {
                                        $TEMP = 0;
                                        $TERMWORK = ($TEMP);
                                    }
                                }



                                $query = "UPDATE webtechnology_marks_marking SET UT1='$UNIT1',UT2='$UNIT2',INSEM='$IN',ORAL='$ORAL_MARKS',PRACTICAL='$PRACTICAL_MARKS',TW='$TERMWORK' WHERE ROLL_NUMBER='$a'";


                                $result_query = mysqli_query($con, $query);
                                if ($result_query) {

                    
                                    ?>
                                <script>
                                                    alert(
                                                        "Marks Submitted Succesfully!"
                        
                                                    );
                                                    window.location = "teacher_index.php";
                                                
                               </script>
                                 <?php
                                   }     
                            }
                        }
                    }

                }
                    //end of marks submission


                    //START OF SCHEULED SYLLABUS
                   
                    $query_1 = "SELECT * FROM webtechnology_attendance_marking_db";
                    $run_query_1 = mysqli_query($con, $query_1);
                    $fetch_array = mysqli_fetch_array($run_query_1);
                    $value=$fetch_array['UPDATE_CLASS'];
                   
                    if (isset($_POST['add_value'])||isset($_POST['update'])) {
                        $update = $_POST['update'];
                        $query_2 = "UPDATE webtechnology_attendance_marking_db SET `UPDATE_CLASS`='$update' where ROLL_NUMBER=0";
                        $RUN_QUERY_2=mysqli_query($con, $query_2);
                        if($RUN_QUERY_2){
                            ?>
                            <script>
                                alert("added!");
                            window.location = "teacher_index.php";
                            </script>
                            <?php
                        }
                    }


                    if (isset($_POST['submit_syllabus'])) {
                        for ($j = 0; $j < $value; $j++) {

                            $index = $j + 1;
                            $date_of_syllabus = $_POST['date_syllabus'][$j];

                            $text_1 = $_POST['text1'][$j];

                            $text_2 = $_POST['text2'][$j];

                            $query_update = "UPDATE webtechnology_attendance_marking_db SET `DATE_OF_SYLLABUS`='$date_of_syllabus',`ESTIMATED`='$text_1',`COMPLETED`='$text_2'  where ROLL_NUMBER=$index";

                            
                            $run_query3 = mysqli_query($con, $query_update);
                       
                    if ($run_query3) {
                    ?>
                        <script>
                            alert("updated!");
                            window.location = "teacher_index.php";
                        </script>
                    <?php

                    } 
                }
          }
 


                    
                    //end of scheduled syllabus


                    //start of attendance view
                      

                    
          

         




                    //end of attendance view

               

                

                ?>
                <script>
                    $(document).ready(function() {
                        $('.button1').click(function() {
                            $('.container2').load('teacher_attendance_marking.php')

                        });
                    });
                    $(document).ready(function() {
                        $('.button2').click(function() {
                            $('.container2').load('teacher_attendance_view.php')
                        });
                    });
                    $(document).ready(function() {
                        $('.button3').click(function() {
                            $('.container2').load('student_marks_marking.php')

                        });
                    });
                    $(document).ready(function() {
                        $('.button4').click(function() {
                            $('.container2').load('te_timetable.php')
                        });
                    });
                    $(document).ready(function() {
                        $('.button5').click(function() {
                            $('.container2').load('notices.php')
                        });
                    });

                    $(document).ready(function() {
                        $('.button6').click(function() {
                            $('.container2').load('scheduled_syllabus_teacher.php')
                        });
                    });

                  
                </script>

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