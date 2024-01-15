<?php
session_start();


include('config.php');
$sql = "SELECT * FROM webtechnology_attendance_marking_db";
$sql1 = "SELECT teacher_name FROM webtechnology_attendance_marking_db";

$result = mysqli_query($con, $sql);
$result1 = mysqli_num_rows($result);
$result2 = mysqli_query($con, $sql1);
$result3 = mysqli_num_rows($result2);
$result4 = mysqli_fetch_array($result2);




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
        height: auto;
        border-style: solid;
        border-width: 2px;
        border-color: black;

        background-color: #F5F5DC;


    }
    .selectall{
      display: flex;
       
    }
    .selectall1{
        border-style: solid;
        border-color: black;
        border-width: 3px;
        border-radius: 10px;
        margin-left: 71%;
        padding-left:15px;
        padding-right:15px;
        cursor: pointer;
        background-color: gray;
        color:white;
        font-size: 18px;
        
       
       
    }
    .selectall1:hover{
        background-color: white;
        color:black;
        font-weight: bold;
    }

    .table {

        display: flex;
        border-style: solid;
        border-width: 3px;
        border-color: black;

        background-color: maroon;
        color: white;
        font-weight: bolder;
        margin-top: 5px;



    }

    .table1 {
        padding-right: 50px;
        padding-bottom: 10px;
        float: left;



    }

    .table2 {
        padding-right: 50px;




    }

    .table3 {

        padding-left: 39%;




    }





    .row {
        display: flex;
        border-style: solid;
        border-width: 3px;
        border-color: black;
        background-color: whitesmoke;
        color: black;
        font-weight: bolder;
        width: 1080px;




    }

    .row1 {
        display: flex;
        justify-content: left;
        padding-right: 13%;
        padding-left: 25px;
        width: 1%;





    }


    .row2 {
        display: flex;
        justify-content: left;
        width: 30%;
        padding-right: 300px;

    }

    .row3 {
        display: flex;
        justify-items: center;





    }

    .checkbox {
        width: 20px;
        height: 20px;

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

            <div class="input">
                <span class="DATE"> Attendance Date And Time Of Class: <input type="date" name="DATE" class="DATE"></span>

            </div>
            <!-- <div class="selecctall"><span class="selectall1"  onclick='select()'>Select All</span></div> -->
  
            <div class="table">

                <div class="table1">
                    ROLL_NUMBER
                </div>
                <div class="table2">
                    STUDENT_NAME
                </div>

                <div class="table3">
                    ATTENDANCE MARK
                </div>

            </div>





            <?php
      
                    $sql = "SELECT * FROM te_student_database";
                    $sql1 = "SELECT * FROM webtechnology_attendance_marking_db ";
                    $sql2 = "SELECT 'ROLL_NUMBER' FROM webtechnology_attendance_marking_db WHERE `ROLL_NUMBER`=1 ";
                   
                    

                    $result = mysqli_query($con, $sql);
                    $result1 = mysqli_num_rows($result);
                    $result2 = mysqli_query($con, $sql1);
                    $result3 = mysqli_num_rows($result2);
                    $row = mysqli_fetch_array($result2);
                    $result5 = mysqli_query($con, $sql2);
                    $result6 = mysqli_num_rows($result5) ;
                    
            
            

                
                if ($_SESSION['teacher_id']) {
                    if ($_SESSION['teacher_id'] == $result4['teacher_name']) {

                        for($i=0;$i<$result1;$i++) {
                            $row = mysqli_fetch_array($result);
                            


            ?>

                            <table>
                                <tr class="row">
                                    <td class="row1"><?php echo $row['ROLL_NUMBER'] ?></td>
                                    <td class="row2"><?php echo $row['STUDENT_NAME'] ?></td>
                                    <td class="row3"><input type="text" name="presenty[]" class="checkbox" value="P"></td>
                                  <?php
                                    
                                    ?>
                                </tr>
          

                            </table>


                                <?php



                         


                        }
                   

?>
                <div class="submit"><input type="submit" name="submit_attendance"></div>
 </form>
  <?php     
       
 }
}
                
            else {
                echo ($message);
            }
         
                ?>
            <!-- <script type="text/javascript">
                function select(){  
                var ele=document.getElementsByClassName('checkbox');  
                for(var i=0; i<ele.length; i++){  
                     if(ele[i].type=='checkbox')  
                         ele[i].checked=true;  

                  } 

             }


        </script> -->
    </div>
</body>

</html>