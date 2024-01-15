<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | TRINITY ERP SYSTEM</title>
   <link rel="stylesheet" href="home.css">
<style>
    body {
    height: 100%;
    width: 100%;
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
    width: auto;
    height: 100%;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    padding: 5% 0px;

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    justify-content: center;
   border-style: solid;
    border-width: 3px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin:0px 5px;
}
.student {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.student img{
    height:250px ;
    width:300px;
}
.student_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 10px;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 30px;
    margin-top: 20px;
    cursor: pointer;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.teacher img{
    height:270px ;
    width:380px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
}
.teacher_btn {
    display: flex;
    justify-content: center;
    align-items: center;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 30px;
    width: 280px;
    cursor: pointer;
    padding-left: 10px;
   
    padding-top: 12px;
    padding-bottom: 10px;
    margin-bottom: 5px;


}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.admin img{
    height:250px ;
    width:300px;
}
.admin_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 10px;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 30px;
    margin-top: 20px;
    cursor: pointer;

}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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
    /* body {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 15%;
    font-size: 85px;
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
    width: 160px;
    height: 160px;
}

.logo2 {
    padding-left: 30px;
    padding-bottom: 10px;
    width: 160px;
    height: 160px;
}

.container {
    width: 100%;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size: 100% 100%;
    padding-top: 30px;
   

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height: auto;
    margin-left: 50px;
    margin-right: 50px;
    padding: 2% 1%;
    justify-content: space-between;
    height: fit-content;
}

.student {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.student img{
    height:750px ;
    width:800px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
}
.student_btn {
   display: flex;
    justify-content: center;
    align-items: center;
     padding: 30px 200px;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 50px;
    width: 280px;
    cursor: pointer;
    
    text-align: center;
   
    margin-top: 70px;
    width: fit-content;
}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.teacher img{
    height:820px ;
    width:950px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.teacher_btn {
    display: flex;
    justify-content: center;
    align-items: center;
     padding: 30px 200px;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 50px;
   
    cursor: pointer;
    
    text-align: center;
   
    margin-bottom: 5px;
    width: fit-content;

}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.admin img{
    height:750px ;
    width:800px
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
}
.admin_btn {
    display: flex;
    justify-content: center;
    align-items: center;
     padding: 30px 200px;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 50px;
    width: 280px;
    cursor: pointer;
    margin-top: 70px;
    text-align: center;
   width: fit-content;

}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}



.footer {
    width: 100%;
    height: 8%;
    font-size: 40px;
    
    background-color: aliceblue;
    margin-top: 1px;
    border-style: solid;
    border-top-color: 3px black;
    padding-top: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
} */

@media screen and (max-width: 1200px) {
    body {
    height: 100%;
    width: 100%;
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
    width: 100%;
    height: 75%;
    background-image: url('tae_campus_blur.jpg');
    background-size: 100% 100%;
    padding-top: 30px;

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height: 380px;
    margin-left: 50px;
    margin-right: 50px;
    padding: 2% 1%;
    justify-content: space-between;
}

.student {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.student img{
    height:210px ;
    width:250px;
}
.student_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: 20px;
    cursor: pointer;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.teacher img{
    height:240px ;
    width:390px;
    margin-left: 5px;
}
.teacher_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
   padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
  
    cursor: pointer;

}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.admin img{
    height:210px ;
    width:250px;
}
.admin_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: 20px;
    cursor: pointer;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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
  @media screen and (max-width: 1024px) {
    body {
    height: 100%;
    width: 100%;
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
    width: 100%;
    height: 75%;
    background-image: url('tae_campus_blur.jpg');
    background-size: 100% 100%;
    padding-top: 30px;

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height: 380px;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 0;
}

.student {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.student img{
    height:210px ;
    width:250px;
}
.student_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: 20px;
    cursor: pointer;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.teacher img{
    height:250px ;
    width:390px;
    margin-left: 5px;
    margin-top: -10px;
}
.teacher_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
   padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: -10px;
    cursor: pointer;

}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.admin img{
    height:210px ;
    width:250px;
}
.admin_btn {
    display: flex;
    justify-content: center;
    padding-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: 20px;
    cursor: pointer;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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

  @media screen and (max-width: 960px) {
    body {
    height: 100%;
    width: 100%;
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
    width: auto;
    height: 75%;
    background-image: url('tae_campus_blur.jpg');
    background-size: 100% 100%;
    padding-top: 30px;

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height: 380px;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 0;
}

.student {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.student img{
    height:180px ;
    width:220px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 40px;
   
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 28px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.teacher img{
    height:220px ;
    width:360px;
    margin-left: 15px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -30px;
}
.teacher_btn {
    padding: 5px 40px;
   
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: -10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    flex-direction: column;
    margin-top: 3%;
}
.admin img{
    height:180px ;
    width:220px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 40px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 28px;
  cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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

  @media screen and (max-width:850px) {
    body {
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 100px;
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
    width: auto;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    flex-direction: column;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 1px;
}

.student {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;

}
.student img{
    height:180px ;
    width:220px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 40px;
   
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 28px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 10px 0px;

}
.teacher img{
    height:220px ;
    width:360px;
    margin-left: 15px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -30px;
}
.teacher_btn {
    padding: 5px 40px;
   
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 28px;
    margin-top: -10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;


}
.admin img{
    height:180px ;
    width:220px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 40px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 28px;
  cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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
  @media screen and (max-width:680px) {
    body {
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 100px;
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


}

.logo1 {
    padding-right: 30px;
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

.logo2 {
    padding-left: 30px;
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

.container {
    width: auto;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    flex-direction: column;
    border-style: solid;
    border-width: 4px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 1px;
}

.student {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;

}
.student img{
    height:140px ;
    width:160px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 30px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 25px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 10px 0px;

}
.teacher img{
    height:190px ;
    width:300px;
    margin-left: 15px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -30px;
}
.teacher_btn {
    padding: 5px 30px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 25px;
    margin-top: -10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;


}
.admin img{
    height:140px ;
    width:160px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 30px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 25px;
  cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}



.footer {
    width: 100%;
    height: 5%;
    font-size: 14px;
    
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

  @media screen and (max-width:560px) {
    body {
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 100px;
    font-size: 19px;
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
    padding-right: 10px;
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

.logo2 {
    padding-left: 10px;
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

.container {
    width: auto;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    flex-direction: column;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 1px;
}

.student {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;

}
.student img{
    height:140px ;
    width:160px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 30px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 25px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 10px 0px;

}
.teacher img{
    height:190px ;
    width:300px;
    margin-left: 15px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -30px;
}
.teacher_btn {
    padding: 5px 30px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 25px;
    margin-top: -10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;


}
.admin img{
    height:140px ;
    width:160px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 30px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 25px;
  cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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

  @media screen and (max-width:430px) {
    body {
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 100px;
    font-size: 16px;
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
    padding-right: 10px;
    padding-bottom: 10px;
    width: 50px;
    height: 50px;
}

.logo2 {
    padding-left: 10px;
    padding-bottom: 10px;
    width: 50px;
    height: 50px;
}

.container {
    width: auto;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    flex-direction: column;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 1px;
}

.student {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;

}
.student img{
    height:120px ;
    width:140px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 20px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 20px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 10px 0px;
    margin: 40px 0px;
}
.teacher img{
    height:160px ;
    width:275px;
    margin-left: 12px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 12px;
}
.teacher_btn {
    padding: 5px 20px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 20px;
    margin-top: -10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;


}
.admin img{
    height:120px ;
    width:140px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 20px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 20px;
   cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}



.footer {
    width: 100%;
    height: 5%;
    font-size: 14px;
    
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
    height: auto;
    width: 100%;
    margin: 0;
    padding: 0;
}

.nav {
    background-color: rgb(0, 0, 120);
    color: white;
    padding-top: 1%;
    height: 100px;
    font-size: 15px;
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
    padding-right: 2px;
    padding-bottom: 2px;
    width: 40px;
    height: 40px;
}

.logo2 {
    padding-left: 2px;
    padding-bottom: 2px;
    width:40px;
    height: 40px;
}

.container {
    width: auto;
    height: auto;
    background-image: url('tae_campus_blur.jpg');
    background-size:auto 100%;
    

}

.btn_link {
    text-decoration: none;


}

.link_div {
    display: flex;
    align-items: center;
    flex-direction: column;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    height:auto ;
    padding: 2% 3%;
    justify-content: space-between;
    width: auto;
    margin: 1px;
}

.student {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;

}
.student img{
    height:120px ;
    width:140px;
}
.student a{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.student_btn {
    padding: 5px 20px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 20px;
   cursor: pointer;
   width:fit-content;


}

.student_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;

}

.teacher {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 10px 0px;
    margin: 40px 0px;
}
.teacher img{
    height:160px ;
    width:275px;
    margin-left: 12px;
    margin-top: -10px;
}
.teacher a{
    display: flex;
    justify-content: center;
    align-items: center;

}
.teacher_btn {
    padding: 5px 20px;
    border-style: solid;
    border-width: 2px;
    border-color: black;
    border-radius: 10px;
    background-color: white;
    color: black;
    text-align: center;
    font-size: 20px;
    margin-top: 10px;
    cursor: pointer;
    width:fit-content;
    margin-left: 50px;
}

.teacher_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
}

.admin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 3%;
    border: 1px solid black;
    padding: 15px 75px;
    width: fit-content;


}
.admin img{
    height:120px ;
    width:140px;
}
.admin a{
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.admin_btn {
    padding: 5px 20px;
   border-style: solid;
   border-width: 2px;
   border-color: black;
   border-radius: 10px;
   background-color: white;
   color: black;
   text-align: center;
   font-size: 20px;
   cursor: pointer;
   width:fit-content;
}

.admin_btn:hover {
    font-weight: bold;
    background-color: black;
    color: white;
    border-color: gray;
    border-width: 8px;
    border-radius: 25px;
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

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Nunito', sans-serif;
    font-weight: 400;
    font-size: 100%;
    background: #273c66;
}

*, html {
   --primaryGradient:#273c66;
    --secondaryGradient: #273c66;
    --primaryBoxShadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    --secondaryBoxShadow: 0px -10px 15px rgba(0, 0, 0, 0.1);
   --primary: #581B98;


}
.container img{
background-size:100% 100%;
width:100%;
height:100%;
}

/* CHATBOX
=============== */
.chatbox {
    position: absolute;
    bottom: 40px;
    right: 60px;
}

/* CONTENT IS CLOSE */
.chatbox__support {
    display: flex;
    flex-direction: column;
    background: #eee;
    width: 400px;
    height: 450px;
    z-index: -123456;
    opacity: 0;
    transition: all .5s ease-in-out;
}

/* CONTENT ISOPEN */
.chatbox--active {
    transform: translateY(-40px);
    z-index: 123456;
    opacity: 1;

}

/* BUTTON */
.chatbox__button {
    text-align: right;
}

.send__button {
    padding: 6px;
    background: transparent;
    border: none;
    outline: none;
    cursor: pointer;
}


/* HEADER */
.chatbox__header {
    background: var(--primaryGradient);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content:flex-start;
    padding: 15px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    box-shadow: var(--primaryBoxShadow);
}

.chatbox__image--header {
    margin-right: 20px;
}

.chatbox__heading--header {
    font-size: 1.2rem;
    color: white;
}

.chatbox__description--header {
    font-size: .9rem;
    color: white;
}
 .chatbox__content--header{
display:flex;
flex-direction: row;
margin-left:30px;
 }
.chatbox__header .chatbox__content--header div{
display:flex;
margin:5px 20px;
justify-content:center;
align-items:center;
}
 .chatbox__content--header div .dot{

width:10px;
height:10px;
background-color:#0FFF50;
border-radius:50%;
margin:3% 5px;
}
/* MESSAGES */
.chatbox__messages {
    margin-top: auto;
    display: flex;
    overflow-y: scroll;
    flex-direction: column-reverse;
}

.messages__item {
    background: orange;
    max-width: 60.6%;
    width: fit-content;
}

.messages__item--operator {
    margin-left: auto;
}

.messages__item--visitor {
    margin-right: auto;
}

/* FOOTER */
.chatbox__footer {
    position: sticky;
    bottom: 0;
}

.chatbox__support {
    background: #f9f9f9;
    height: 450px;
    width: 350px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}



/* Messages */
.chatbox__messages {
    padding: 0 20px;
}

.messages__item {
    margin-top: 10px;
    background: #E0E0E0;
    padding: 8px 12px;
    max-width: 70%;
}

.messages__item--visitor,
.messages__item--typing {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.messages__item--operator {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    background: var(--primary);
    color: white;
}

/* FOOTER */
.chatbox__footer {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 20px 20px;
    background: var(--secondaryGradient);
    box-shadow: var(--secondaryBoxShadow);

    margin-top: 20px;
}

.chatbox__footer input {
    width: 80%;
    border: none;
    padding: 10px 10px;
    border-radius: 30px;
    text-align: left;
}

.chatbox__send--footer {
    color: white;
}

.chatbox__button button,
.chatbox__button button:focus,
.chatbox__button button:visited {
    padding: 10px;
    background: white;
    border: none;
    outline: none;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-left-radius: 50px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.chatbox__button img{
width:50px;
height:50px;
}

/*form*/

  .form_container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width:80%;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  }

  form {
    display: flex;
    flex-direction: column;
    margin-top:15px;
  }

  label {
    margin-bottom: 5px;
  }

  input, textarea {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }


  .pre_msg{
   background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width:80%;
    margin-top:15px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
    .pre_msg div{
    text-align:center;
    margin:12px 0px;
    }
    .pre_msg div a{
    text-decoration:none;
    color:black;
    font-weight:bold;
    cursor:pointer;
    transition: color 0.3s ease;
    }
    .pre_msg div a:hover{
     color: #3498db;
    }




    .pre_msg_resp{
   background-color: white;
    padding: 20px 20px;
    border-radius: 8px;
   width:80%;
    margin-top:15px;
    text-align:center;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
     display: flex;
     align-items: center;
    justify-content: center;

    }
     .dept-info {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius:5px;

        margin:5px 0px;
        font-size:12px;
         background-color:white;
         font-weight:200;
    }
.dept-info:hover{
background-color:#273c66;
color:white;
}
    .dept-info h3 {
        margin-top: 0;

    }
   .dept-info h3 a{
    text-decoration:none;
    font-weight:bold;
    color:black;

    }
.dept-info h3 a:hover{
    color:white;
     cursor:pointer;
    transition: color 0.3s ease;
    }

 .pre_msg_1{
   background-color: white;
    padding: 20px;
    border-radius: 8px;
   width:auto;
    margin-top:15px 15px;
    text-align:center;


    }

    .pre_msg_2{
   background-color: white;
    padding: 20px;
    border-radius: 8px;
    width:80%;
    margin:15px 15px;
    text-align:center;


    }
     .pre_msg_2 p{
     text-align:center;

     }



       .pre_msg_3{
   background-color: white;
    padding: 20px;
    border-radius: 8px;
   width:80%;
    margin:15px 15px;
    text-align:center;


    }
     .pre_msg_3 p{
     text-align:center;
     }


       .pre_msg_4{
   background-color: white;
    padding: 20px;
    border-radius: 8px;
   width:80%;
    margin:15px 15px;
    text-align:center;


    }
     .pre_msg_4 p{
     text-align:center;
     }




}



  
</style>
</head>

<body>
    <div class="main">
        <nav class="nav"><img src="trinity logo.png" class="logo1">COLLEGE ATTENDANCE SYSTEM<img src="trinity logo.png" class="logo2"></nav>
        <div class="container">

            <div class="link_div">
                <span class="student">
                    <img src="student-boy-icon.png" alt="student" >
                    <a href="student_login.php" class="btn_link">
                        <div class="student_btn">Student</div>
                    </a>
                </span>
                <span class="teacher">
                    <img src="teacher-icon.jpg" alt="teacher" >
                    <a href="teacher_login.php" class="btn_link">
                        <div class="teacher_btn">Teacher</div>
                    </a>
                </span>
                <span class="admin">
                    <img src="admin.png" alt="admin" >
                    <a href="admin_login.php" class="btn_link">
                        <div class="admin_btn">Admin</div>
                    </a>
                </span>
            </div>



            <div class="chatbox">
            <div class="chatbox__support">
                <div class="chatbox__header">
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header">TAE Assist</h4>
                        <div>
                            <p class="chatbox__description--header">online</p>
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
                <div class="chatbox__messages">
                    <div>
                        <div class="form_container">
                            <p>
                                Hi there,Welcome to Trinity Academy Of Engineering, Pune
                            </p>

                            <form id="contactForm" method="post" name="contactForm">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>

                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>

                                <label for="mobile">Mobile No:</label>
                                <input type="tel" id="mobile" name="mobile" minlength="10" maxlength="10" required>

                                <button type="submit">Submit</button>

                            </form>
                        </div>
                        <div class="pre_msg" style="display: none;">
                            <div class="dept">
                                <p><a href="#" class="dept-link" >Courses</a></p>
                            </div>
                            <div class="Fee">
                                <p><a href="#" class="Fees" >Fees</a></p>
                            </div>
                            <div class="Cutoff">
                                <p><a href="#" class="Cutoffs" >Cutoffs</a></p>
                            </div>
                            <div class="TNP">
                                <p><a href="#" class="placement" >placement</a></p>
                            </div>

                        </div>
                        <div class="pre_msg_resp" style="display: none;">
                            <div class="pre_msg_1">
                            <p>Click On Department Which you are interested In</p>
                            <div class="dept-info" id="computer-department">
                                <h3><a href="https://www.kjei.edu.in/tae/comp_about_dept.php" target="_blank">Computer Department</a></h3>

                            </div>
                            <div class="dept-info" id="it-department">
                                <h3><a href="https://www.kjei.edu.in/tae/it_about_dept.php" target="_blank">IT Department</a></h3>

                            </div>
                            <div class="dept-info" id="entc-department">
                                <h3><a href="https://www.kjei.edu.in/tae/entc_about_dept.php" target="_blank">ENTC Department</a></h3>

                            </div>
                            <div class="dept-info" id="civil-department">
                                <h3><a href="https://www.kjei.edu.in/tae/civil_about_dept.php" target="_blank">CIVIL Department</a></h3>

                            </div>
                            <div class="dept-info" id="mechanical-department">
                                <h3><a href="https://www.kjei.edu.in/tae/mechanical_about_dept.php" target="_blank">Mechanical Department</a></h3>

                            </div>
                            <div class="dept-info" id="firstyear-department">
                                <h3><a href="https://www.kjei.edu.in/tae/fe_about_dept.php" target="_blank">First-Year Department</a></h3>

                            </div>
                            <div class="dept-info" id="mca-department">
                                <h3><a href="https://www.kjei.edu.in/tae/mca_about_dept.php" target="_blank">MCA Department</a></h3>

                            </div>
                            <div class="dept-info" id="me-mechanical-department">
                                <h3><a href="https://www.kjei.edu.in/tae/mech_me_about_dept.php" target="_blank">ME Mechanical Department</a></h3>

                            </div>
                            <div class="dept-info" id="me-civil-department" >
                                <h3><a href="https://www.kjei.edu.in/tae/civil_me_about_dept.php" target="_blank">ME Civil Department</a></h3>

                            </div>
                            </div>


                        <div class="pre_msg_2" style="display: none;">
                            <p> this is the fess section</p>
                        </div>
                        <div class="pre_msg_3" style="display: none;">
                            <p> this is the cutoffs section</p>
                        </div>
                        <div class="pre_msg_4" style="display: none;">
                            <p> this is the placement section</p>
                            

                        </div>
                      </div>
                    </div>
                </div>
                <div class="chatbox__footer" style="display: none;">
                    <input type="text" placeholder="Write a message...">
                    <button class="chatbox__send--footer send__button">Send</button>
                </div>
            </div>
            <div class="chatbox__button">
                <button><img src="chatbox-icon.svg" /></button>
            </div>
        </div>



        </div>



        <script>
document.addEventListener('DOMContentLoaded', function() {
    const departmentLink = document.querySelector('.dept-link'); // Select the Courses link

    departmentLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the link from navigating

        const responseDiv = document.querySelector('.pre_msg_resp');
        const subResponseDiv = document.querySelector('.pre_msg_1');

        // Hide other sub response divs
        const otherSubResponseDivs = document.querySelectorAll('.pre_msg_resp > div:not(.pre_msg_1)');
        otherSubResponseDivs.forEach(div => {
            div.style.display = 'none';
        });

        // Show the response div and sub response div
        responseDiv.style.display = 'block';
        subResponseDiv.style.display = 'block';

        // Scroll to the response div
        responseDiv.scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const feesLink = document.querySelector('.Fees'); // Select the Fees link

    feesLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the link from navigating

        const responseDiv = document.querySelector('.pre_msg_resp');
        const subResponseDiv = document.querySelector('.pre_msg_2');

        // Hide other sub response divs
        const otherSubResponseDivs = document.querySelectorAll('.pre_msg_resp > div:not(.pre_msg_2)');
        otherSubResponseDivs.forEach(div => {
            div.style.display = 'none';
        });

        // Show the response div and sub response div
        responseDiv.style.display = 'block';
        subResponseDiv.style.display = 'block';

        // Scroll to the response div
        responseDiv.scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const cutoffsLink = document.querySelector('.Cutoffs'); // Select the Cutoffs link

    cutoffsLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the link from navigating

        const responseDiv = document.querySelector('.pre_msg_resp');
        const subResponseDiv = document.querySelector('.pre_msg_3');

        // Hide other sub response divs
        const otherSubResponseDivs = document.querySelectorAll('.pre_msg_resp > div:not(.pre_msg_3)');
        otherSubResponseDivs.forEach(div => {
            div.style.display = 'none';
        });

        // Show the response div and sub response div
        responseDiv.style.display = 'block';
        subResponseDiv.style.display = 'block';

        // Scroll to the response div
        responseDiv.scrollIntoView({ behavior: 'smooth' });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const placementLink = document.querySelector('.placement'); // Select the Placement link

    placementLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the link from navigating

        const responseDiv = document.querySelector('.pre_msg_resp');
        const subResponseDiv = document.querySelector('.pre_msg_4');

        // Hide other sub response divs
        const otherSubResponseDivs = document.querySelectorAll('.pre_msg_resp > div:not(.pre_msg_4)');
        otherSubResponseDivs.forEach(div => {
            div.style.display = 'none';
        });

        // Show the response div and sub response div
        responseDiv.style.display = 'block';
        subResponseDiv.style.display = 'block';

        // Scroll to the response div
        responseDiv.scrollIntoView({ behavior: 'smooth' });
    });
});






















        const scriptURL = 'https://script.google.com/macros/s/AKfycbyl4oTzY1_Y7vlwHwHUxmTKvWHb5YAoN5cAk5MoKbOoic1okYeNr5yBfVufxNqq9RHCjA/exec';
        const form = document.forms['contactForm'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            fetch(scriptURL, { method: 'POST', body: new FormData(form) });

            // Show the 'pre_msg' div
            const preMsgDiv = document.querySelector('.pre_msg');
            preMsgDiv.style.display = 'block';

            // Hide the form
            const contactForm = document.getElementById('contactForm');
            contactForm.style.display = 'none';

            // Show the message box
            const chatboxFooter = document.querySelector('.chatbox__footer');
            chatboxFooter.style.display = 'block';
        });

    </script>
        <script type="text/javascript" src="app.js"></script>

        <div class="footer">
            <footer>
                <b>COLLEGE ATTENDANCE SYSTEM © 2023</b>
            </footer>
        </div>
    </div>
</body>

</html>