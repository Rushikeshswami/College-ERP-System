<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Attendance</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      .container {
             width:50%;
             height: fit-content;
             color: white;
             font-weight: bold;
             font-size: 20px;

         }



         .container1 {
             color: black;
             margin-top: 20px;
             display: flex;
            justify-content: center;
            align-items: center;
           
         }

         

         .prn {
             width: 280px;
             height: 60px;
          
             color:white;
             /* margin-left:70%; */
             margin-top: 40px;
             margin-bottom: 30px;
             

         }

         .text {
             font-weight: bold;
             font-size: 15px;
             margin-left: 430px;
             padding-left: 30px;
             padding-right: 10px;
             padding-top: 20px;
             padding-bottom: 20px;
             background-color: white;
             color: black;
           

         }

         .submit {
             margin-left: 495px;
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
             width: fit-content;
             display: flex;
             border-style: solid;
             border-width: 3px;
             border-color: black;
             margin-right: 50%;
             background-color: maroon;
             color: white;


         }

         .table1 {
             padding-right: 50px;
             padding-bottom: 10px;



         }

         .table2 {
             padding-right: 50px;




         }

         .table3 {

             padding-right: 80px;




         }

         .table4 {
             padding-left: 220px;
             padding-right: 50px;



         }

         .table5 {
             padding-left: 30px;
             padding-right: 50px;


         }

         .row {
        display: flex;
        width: auto;
        border-top: transparent;
        padding-top: 10px;
        padding-bottom: 10px;
        height: auto;
        font-weight: bolder;
        border-bottom-color:black;
        border-style: solid;
        border-width: 3px;
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
       

    }

    .row3 {
        display: flex;
        width: 30%;
        justify-content: left;
        padding-left: 10px;

    }

    .row4 {
        display: flex;
        width: 20%;
        justify-content: right;
        margin-left: 160px;


    }

    .row5 {
        display: flex;
        width: 10%;
        justify-content: right;


    }

    </style>
</head>

<body>

       
    <div class="container">
                     <div class="container1">

                         <form action="#" method="post">
                             <label class="prn"><input type="text" name="prn_number" class="text" placeholder="Enter your PRN Number" required></label>
                          
                             <label><input type="submit" name="update" class="submit"></label>

                         </form>

                     </div> 
                    
</body>

</html> 