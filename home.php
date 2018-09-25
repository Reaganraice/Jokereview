<?php
    require 'dbh.php';
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }


?>
 <style>
 h2{
    text-align: center;
     font-size:60px;
     margin-top:60px;
     background-color: lightgrey;
 }
 body {
   background-color:gray;
 }
 .wrapper{
    display:grid;
     grid-template-columns:48% 48%;
    grid-gap:3em; 
     height:500px;
     
 }
 .wrapper> div{
    background-color:#E6CCBE;
    padding:1em;
    border-radius:20%;
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
