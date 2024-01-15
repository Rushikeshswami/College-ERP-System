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

        padding-left: 120px;




    }
    .table4 {
     padding-left: 60px ;
        




}
.table5 {

    padding-left: 60px ;  




}
.table6 {

        
    padding-left: 50px ;  



}
.table7 {

    padding-left: 43px ;      




}
.table8 {

    padding-left: 50px ;      




}





    .row {
        display: flex;
        border-style: solid;
        border-width: 3px;
        border-color: black;
        background-color: whitesmoke;
        color: black;
        font-weight: bolder;
        width:1085px;




    }
    

    .row1 {
        display: flex;
        justify-content: left;
        padding-right: 40px;
        padding-left: 25px;
        width: 1%;
        margin-right: 30px;




    }


    .row2 {
        display: flex;
        justify-content: left;
        width:25%;
        margin-right: 80px;

      

    }

    .row3 {
        display: flex;
        justify-content: center;
        width: 40px;
        padding-right: 50px;
        margin-right: 10px;
     





    }
    .row4 {
        display: flex;
        justify-content: center;
        width: 40px;
        padding-right: 50px;
        margin-right: 10px;

    }
    .row5 {
        display: flex;
        justify-content: center;
        width: 40px;
        padding-right: 50px;
        margin-right: 10px;

    }
    .row6 {
        display: flex;
        justify-content: center;
        width: 40px;
        padding-right: 50px;
        margin-right: 10px;
    }
    .row7 {
        display: flex;
        justify-content: center;
        width: 40px;
        padding-right: 50px;
        margin-right: 10px;

    }
     .row8 {
        display: flex;
        justify-content: center;
        width:40px;
        margin-right: 60px;

        
       

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
                <span class="DATE"> <input type="datetime-local" name='DATE' class="DATE"></span>

            </div>
            
            <div class="table">

                <div class="table1">
                    ROLL_NO
                </div>
                <div class="table2">
                    STUDENT_NAME
                </div>

                <div class="table3">
                    UT1
                </div>
                <div class="table4">
                    UT2
                </div>
                <div class="table5">
                    prelim
                </div>
                <div class="table6">
                    ORAL
                </div>
                <div class="table7">
                    PRACTICAL
                </div>
                <div class="table8">
                    TW
                </div>
              

            </div>





            <?php
            
                    $sql = "SELECT * FROM te_student_database";
                    $sql1 = "SELECT * FROM webtechnology_marks_marking ";
                    $sql2 = "SELECT 'ROLL_NUMBER' FROM webtechnology_attendance_marking_db WHERE `ROLL_NUMBER`=1 ";
                  
                    

                    $result = mysqli_query($con, $sql);
                    $result1 = mysqli_num_rows($result);
                    $result2 = mysqli_query($con, $sql1);
                    $result3 = mysqli_num_rows($result2);
                    $result4 = mysqli_fetch_array($result2);
                    $result5 = mysqli_query($con, $sql2);
                    $result6 = mysqli_num_rows($result5) ;
                    
            
            


                if ($_SESSION['teacher_id']) {
                    if ($_SESSION['teacher_id'] == $result4['teacher_name']) {

                        for($i=0;$i<78;$i++) {
                            $row = mysqli_fetch_array($result2);
                              


            ?>

                            <table>
                                <tr class="row">
                                    <td class="row1"><?php echo $row['ROLL_NUMBER'] ?></td>
                                    <td class="row2"><?php echo $row['STUDENT_NAME'] ?></td>
                                  <div class="row_space"><td class="row3"><input type="number" name="UT1[]" ></td></div>
                                  <div class="row_space"><td class="row4"><input type="number" name="UT2[]"></td></div>
                                  <div class="row_space"><td class="row5"><input type="number" name="INSEM[]"></td></div>
                                  <div class="row_space"><td class="row6"><input type="number" name="ORAL[]"></td></div>
                                  <div class="row_space"><td class="row7"><input type="number" name="PRACTICAL[]"></td></div>
                                  <div class="row_space"><td class="row8"><input type="number" name="TW[]"></td></div>
                                     
                                   
                            
                                </tr>
          

                            </table>


                                <?php



                         


                        }
                   

?>
                <div class="submit"><input type="submit" name="Submit_marks"></div>
 </form>
  <?php     
       
 }
}
                
            else {
                echo ($message);
            }
         



           
                ?>
               
    </div>
</body>

</html>