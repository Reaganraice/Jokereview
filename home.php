<?php
    require 'dbh.php';
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }


?>
 <style>
 h2{
    text-align: center;
     margin-top:60px;
 }
 body {
   background-color:white;
 }
 .wrapper{
    display:grid;
     grid-template-columns:49% 49%;
    grid-gap:1em; 
     height:500px;
     margin-left:10px;;
     
 }
 .wrapper> div{
    background-color:#71A9F7;
    padding:1em;
    border-radius:5px;
    border: solid gray;
 }
.wrapper> div:nth-child(old){
    background-color:#ddd;

}
 h1{
     text-align:center;
     margin-top:200px;
    font-size: 60px;
}
h3{
    text-align:center;
}
h1 a{
    color: white;
    text-decoration-line:none;
    border: solid gray;
    padding:5px;
    border-radius:5px;
    background-color:gray;
    
}
 </style>
    <section class = "main-container">
        <div class = "main-wrapper">
            <h2>Welcome Reagan Matunga!</h2>
        </div>
    </section>

<body>
    <div class="wrapper">
     <div>
         <h1><a href="top10.php">Top Ten</a></h1>
     </div>
     <div>
         <h1><a href="view-rate.php">View Joke Rate</a></h1>
     </div>
    </div>
</body>
