<?php
require 'dbh.php';
$sql=" SELECT*
from Jokes
ORDER BY rating DESC
limit 10";
$result = mysqli_query($conn,$sql);
if(isset($_POST['back'])){
    header('Location: home.php');
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        background-color: #F5F3F5;
        font-size:15px;
        color:#302B27;
        margin-left:40px;
        margin-top:60px;
    }
    #topback{
    font-size: 20px;
    border-radius:5px;
    padding: 5px;
    color: #71A9F7;
    border: solid gray ;
    margin: auto;
    margin-left:-120px;
    }
    .topblock{
        text-align: center;
    }
    </style>
</head>
<body>
     <div class="topblock">

         <form action="" method="POST">
         <?php if($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     print '<pre>';
                     echo "<div>setup:</div>".$row["setup"]."<div>punchline:</div>".$row["punchline"]."<div>rating:<div>".$row["rating"]."<br>";
                     print '<pre>';
                 }
             }
             ?>
             <button id="topback" name= "back">Back</button>
         </form>
     
     </div>
</body>
</html>

<?php


?>
