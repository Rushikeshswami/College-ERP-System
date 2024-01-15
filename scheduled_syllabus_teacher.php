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
   
        background-color:transparent ;
       
        
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

        display: flex;
        border-style: solid;
        border-width: 3px;
        border-color: black;

        background-color: maroon;
        color: white;
        font-weight: bolder;
        margin-top: 5px;
        width: 600px;
        margin-left:350px;
        margin-top: 5%;
        height:30px;



    }

    .table1 {
        padding-right: 50px;
        padding-bottom: 10px;
        padding-left: 50px;
        /* margin-left: 150px; */
        



    }

    .table2 {
        padding-right: 50px;
         padding-left: 120px;



    }
   
   




    .row {
        display: flex;
        border-style: solid;
        border-width: 3px;
        border-color: black;
        background-color: whitesmoke;
        color: black;
        font-weight: bolder;
        width: fit-content;
        border-style: solid;
        border-color: black;
        border-width: 3px;
        margin-left:350px;
        padding-top: 8px;




    }


    .row1 {
        
        justify-content: left;
        padding-right: 80px;
        padding-left: 25px;
        
        margin-right:10px;
        font-size: 25px;
        color: red;
        font-weight: bold;
        margin-left: 50px;
       



    }


    .row2 {
        font-size:23px;
       font-weight: bold;
      
        padding-left: 80px;
        padding-right:50px;
        border: solid;
       border-color: transparent;
       border-left-color: black;
      



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
    .update{
        display: flex;
        padding:5px;
        padding-bottom:15px;
        
    }
    .schedule_table{
        margin-left:20px;
        border-style: solid ;
        border-color: black;
        border-width: 2px;
        
    }
    .h1{
        padding-right:30px;
        padding:10px;
        background-color:maroon;
        color: white;
    }
    .h2{
        padding-right:30px;
        padding:10px;
        background-color:darkslategray;
        color: white;
        width: 40%;
    }
    
</style>

<body>


    <div class="container">
        

            <!-- <div class="input">
                <span class="DATE"> <input type="datetime-local" name='DATE' class="DATE"></span>

            </div> -->

            <div class="table">

                <div class="table1">
                    Classes Conducted
                </div>
                <div class="table2">
                    Total Classes
                </div>





            </div>





            <?php
            
            $sql = "SELECT * FROM webtechnology_attendance_marking_db where ROLL_NUMBER=1";
            $sql1 = "SELECT * FROM webtechnology_attendance_marking_db";




            $result = mysqli_query($con, $sql);
            $result1 = mysqli_fetch_array($result);
            $num_rows=mysqli_num_rows($result);
            $result2 = mysqli_query($con, $sql1);
            $result3 = mysqli_num_rows($result2);
            $result4 = mysqli_fetch_array($result2);






            if ($_SESSION['teacher_id']) {
                if ($_SESSION['teacher_id'] == $result4['teacher_name']) {
            ?><form method="POST" action="">
                    <table class="table_result">
                        <tr class="row">
                            <td class="row1"> <?php
                                                echo $num_rows;
                                                ?> 
                            </td>
                            <td class="row2"><b> <?php echo $result4['UPDATE_CLASS']?> </b><td class="update"><input type="number" name="update"> <input type="submit" name="add_value"></td>
                       
                            </td>
                           
                          

                        </tr> 
                        
                        
                        
                            
                        
                    </table>
                    

</form>




                    
        
<?php
 }
            
            ?>
            <form method="POST" action="">
            <table class="schedule_table" > 
            
           
          
   <tr ><th class="h1">SR.NO</th><th class="h1">DATE</th><th class="h1">COMPLETED SYLLABUS</th><th class="h1">ESTIMATED SYLLABUS</th></tr> 

<?php

 for($i=1;$i<=$result4['UPDATE_CLASS'];$i++){
    ?>
  <tr>

    <td class="h2">
      <b ><?php echo $i;?></b>
    </td>
 
    <td class="h2">
       <div> <input type="date" name="date_syllabus[]"></div>
    </td>
    <td class="h2" >
       <div><input type="text" name="text1[]"></div> 
    </td>
    <td class="h2">
        <div><input type="text"  name="text2[]"></div>
    </td>
    
 <td class="h2">
       <!-- <input type="submit" name="submit_syllabus"> -->
    </td>
</tr>

    



    <?php
}
?>
</table>
<input type="submit" name="submit_syllabus">
</form>


<?php

} else {
    echo ($message);
}
?>

    </div>
</body>

</html>