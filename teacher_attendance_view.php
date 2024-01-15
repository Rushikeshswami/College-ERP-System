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
        font-weight: bolder;
        width: fit-content;
        margin-top: 30px;

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

        padding-right: 50px;




    }

    .table4 {
        float: center;
        padding-left: 80px;
        padding-right: 10px;
        width: 30%;



    }

    .table5 {

        padding-left: 40px;
        padding-right: 20px;


    }

    .row {
        display: flex;
        width: auto;
        border-top: transparent;
        padding-top: 10px;
        padding-bottom: 10px;
        height: auto;
        font-weight: bolder;
        border-bottom-color: black;
        border-style: solid;
        border-width: 3px;
        background-color: white;


    }

    .row1 {
        display: flex;
        width: 2%;
        justify-content: center;
        padding-left: 25px;
        padding-right: 30px;


    }

    .row2 {
        display: flex;
        width: 5%;
        justify-content: center;
        padding-left: 120px;
        padding-right: 30px;


    }

    .row3 {
        display: flex;
        width: 250px;
        justify-content: left;
        padding-left: 40px;
        padding-right: 20px;
        
    }

    .row4 {
        width: 20px;
       display: flex;
        padding-left: 50px;
        justify-content: right;
        padding-left: 40px;
        padding-right: 110px;
        


    }

    .row5 {
       display: flex;
        width:30px;
        justify-content: right;
        padding-left: 30px;
        padding-right: 120px;


    }
    .row6 {
        display: flex;
        justify-content: left;
        padding-left: 30px;
        padding-right: 150px;


    }
    .download{
        margin-left:85%;
        margin-top: 10px;
        margin-bottom: 20px;
        width: 150px;
        padding-left: 20px;
        padding-right: 20px;
        padding: 5px;

    }
    .download:hover{
        background-color: darkblue;
        color:white;
        cursor: pointer;
        font-size: 15px;
        font-weight: bold;
    }
</style>

<body>
    <div class="container">
    <div class="search">
        <form method="POST" action="teacher_attendance_view"><input type="date" name="search_date"><input type="submit" name="submit_date"></form>
    </div>
        <div class="table">

            <div class="table1">
                ROLL_NUMBER
            </div>
            <div class="table2">
                PRN_NUMBER
            </div>
            <div class="table3">
                STUDENT_NAME
            </div>
            <div class="table4">
                ATTENDED
            </div>
            <div class="table4">
                TOTAL_CLASSES
            </div>
            <div class="table5">
                PERCENTAGE
            </div>

        </div>
        <?php
       

     $query='SELECT * FROM te_student_database';
     $run_query=mysqli_query($con,$query);
     $num_rows=mysqli_num_rows($run_query)+1;

        $sql = "SELECT * FROM webtechnology_attendance_marking_db  limit $num_rows";

        $result = mysqli_query($con, $sql);
        $result1 = mysqli_num_rows($result);
     
        $result4=mysqli_fetch_array($result);
       
        $sql2="SELECT * from webtechnology_attendance_marking_db  ORDER BY TOTAL_CLASSES DESC LIMIT $num_rows ";

        $run_sql2=mysqli_query($con,$sql2);
         

      
      
        if ($_SESSION['teacher_id']) {
            if ($_SESSION['teacher_id'] == $result4['teacher_name']) {
        
        
        ?>
            <table >

               
                <?php
               
                    // $sql2="SELECT * from webtechnology_attendance_marking_db  where `DATE`='$date'";
                    // $run_sql2=mysqli_query($con,$sql2);

                for($i=0;$i<$result1-1;$i++){
                
        
                      $row = mysqli_fetch_array($run_sql2);
     


                ?>

                    <tr class="row">
                        <td class="row1"><?php echo $row['ROLL_NUMBER'] ?></td>
                        <td class="row2"><?php echo $row['PRN_NUMBER'] ?></td>
                        <td ><div class="row3"><?php echo $row['STUDENT_NAME'] ?></div></td>
                        <td class="row4"><?php echo $row['TOTAL'] ?></td>
                        <td class="row5"><?php echo $row['TOTAL_CLASSES'] ?></td>
                        <td class="row6"><?php echo $row['ATTENDANCE_PERCENTAGE']?></td>
                    </tr>

            <?php
                }
                ?>
                </table>
                <button onclick="exportTableToCSV('attendance.csv');"  class="download">Download</button>
                
                <?php
            

         }
        }
            else {
                echo ($message);
            }
            

            ?>


    </div>

    <script>
        function exportTableToCSV(filename) {

  var csv = [];
  var rows = document.querySelectorAll("table tr");

  for (var i = 0; i < rows.length; i++) {
    var row = [],
      cols = rows[i].querySelectorAll("td, th");

    for (var j = 0; j < cols.length; j++)
      row.push(cols[j].innerText);

    csv.push(row.join(","));
  }

  // Download CSV file
  alert('downloading...!')
  downloadCSV(csv.join("\n"), filename);
}

function downloadCSV(csv, filename) {
  var csvFile;
  var downloadLink;

  // CSV file
  csvFile = new Blob([csv], {
    type: "text/csv"
  });

  // Download link
  downloadLink = document.createElement("a");

  // File name
  downloadLink.download = filename;

  // Create a link to the file
  downloadLink.href = window.URL.createObjectURL(csvFile);

  // Hide download link
  downloadLink.style.display = "none";

  // Add the link to DOM
  document.body.appendChild(downloadLink);

  // Click download link
  downloadLink.click();
}
</script>

</body>

</html>