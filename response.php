<?php
require 'configure.php';
if(isset($_SESSION['favcolor']))
{
	header('location:questions.php');

}

?>

<!DOCTYPE html>
<html>
<head>
     <title>Start</title>
    <style type="text/css">
         

         a{
     color: #660000;
     text-decoration: none;
     font-family: cursive;
}
#click{
margin-top: 10vw;
margin-left: 20vw;
border: 2px;


}
    </style>
</head>
<body>
     <div id="click">
     
     <a href="exam_home.php"><h1 >Click Here To START EXAM!</h1></a>

</body>
</html>