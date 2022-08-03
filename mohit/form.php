<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone_no'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
     
      $query = "insert into customer_list(Name,Email,Phone_no) values('$name', '$email' ,'$phone_no' )";

      $run = mysqli_query($conn,$query) or die(mysqli_error());

      if($run){
        echo "

        <!DOCTYPE html>
        <head>
         <title>submitted</title>
            <style>
            body{
                background-color:black;
                color:white;
               
            }
            div{
                position:relative;
                text-align:center;
                top:320px;
                
            }
            span{
                font-size: 70px;
            }

            </style>
        </head>
        <body>
            <div><span>I will contact you soon.</span></div>
        </body>
       
      ";
        }
        else{
           echo "YoNot submitted successfully";
        }
      }

      else {
        echo"all required";
      }
    }
  
 
