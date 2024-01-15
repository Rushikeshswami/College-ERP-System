<?php
session_start();



include('config.php');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Attendance marking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    .container {
        height: 100%;
        width: 50%;
        border-style: solid;
        border-width: 2px;
        border-color: transparent
        
        ;
        background-color:transparent ;
        display: flex;
            justify-content: center;
           
            
        
        /* background-color: #F5F5DC; */


    }

    .selectall {
        display: flex;

    }

    .selectall1 {
        border-style: solid;
        border-color: black;
        border-width: 3px;
        border-radius: 10px;
        margin-left: 71%;
        padding-left: 15px;
        padding-right: 15px;
        cursor: pointer;
        background-color: gray;
        color: white;
        font-size: 18px;



    }

    .selectall1:hover {
        background-color: white;
        color: black;
        font-weight: bold;
    }

    .table {
        
         
        
        border-style: solid;
        border-width: 3px;
        border-color: black;

        background-color: maroon;
        color: white;
        font-weight: bolder;
        margin-top: 5px;
        width: 500px;
        margin-left:350px;
        margin-top: 15%;
        height:30px;



    }

    .table1 {
        padding-right: 40px;
        padding-bottom: 10px;
        padding-left: 30px;
        /* margin-left: 150px; */
        



    }

    .table2 {
        padding-right: 20px;
        




    }
    .table3 {
        padding-right: 20px;
        padding-left: 20px;




    }
   
   




    .row {
        
        border-style: solid;
        border-width: 3px;
        border-color: black;
        background-color: whitesmoke;
        color: black;
        font-weight: bolder;
        width: 470px;
        border-style: solid;
        border-color: black;
        margin-left:350px;
        height:20px;





    }


    .row1 {
        
        justify-content: left;
        padding-right: 80px;
        padding-left: 45px;
        margin-left: 10px;
        margin-right:10px;
        font-size: 25px;
        color: red;
        font-weight: bold;
        margin-left: 50px;
        border: solid;
       border-color: transparent;
       border-left-color: black;
       
       



    }


    .row2 {
        font-size:18px;
       font-weight: bold;
      
        padding-left: 80px;
        padding-right:75px;
        border: solid;
       border-color: transparent;
       border-left-color: black;



    }
    .row3{
        padding-left: 10px;
        padding-right:20px;   
    }

    


    .submit {
        display: flex;

        margin: 20px;
        margin-left: 71%;
    }

    .input {
        display: flex;
        padding: 20px;
        background-color: darkblue;
        color: white;
        font-size: 20px;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        padding-left: 30%;
        margin-bottom: 10px;





    }

    .input1 {
        justify-content: center;
        width: fit-content;
        height: 35px;
        background-color: whitesmoke;
        border-style: solid;
        border-color: black;
        border-width: 3px;
        border-radius: 15px;
        padding: 10px;
        color: darkslateblue;
        margin-top: 5px;
        margin-left: 40px;
        font-weight: bold;
        font-size: 18px;

    }
</style>

<body>


    <div class="container">
        <form method="POST" action="">

            <!-- <div class="input">
                <span class="DATE"> <input type="datetime-local" name='DATE' class="DATE"></span>

            </div> -->

            <div class="table">
                <div class="table3">
                   subject
                </div>
                <div class="table1">
                    Classes Conducted
                </div>
                <div class="table2">
                    Total Classes
                </div>





            </div>





            <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "te_attendance_db";
            $message = "not found your attendance Data!";

            $con = mysqli_connect($host, $user, $password, $db);
            $sql = "SELECT * FROM webtechnology_attendance_marking_db where ROLL_NUMBER=0 ";
            $sql1 = "SELECT TOTAL_CLASSES FROM webtechnology_attendance_marking_db WHERE ROLL_NUMBER=1 ORDER BY TOTAL_CLASSES DESC LIMIT 1 ";




            $result = mysqli_query($con, $sql);
            $result1 = mysqli_fetch_array($result);
            $result2=mysqli_query($con, $sql1);
            $result3= mysqli_fetch_array($result2);

        






           
            ?>
                    <table class="table_result">
                        <tr class="row">
                            <td class='row3'>
                                <?php echo $result1['subject'];
                                ?>
                            </td>
                            <td class="row1"> <?php
                                                echo $result3['TOTAL_CLASSES'];
                                                ?> 
                            </td>
                            <td class="row2"><b> <?php echo $result1['UPDATE_CLASS'] ?></b>
                            </td>
                           
                           

                        </tr>
                        
                            
                        
                    </table>




                    <!-- <div class="submit"><input type="submit" name="submit"></div> -->
        </form>
<?php

            

?>

    </div>
</body>

</html>