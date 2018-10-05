<?php
    require 'dbh.php';
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }


?>
<link rel="stylesheet" href="css/styles.css">

    <section class = "main-container">
        <div class = "main-wrapper">
            <h2 >Welcome Reagan Matunga!</h2>
        </div>
    </section>

<body>
    <div class="wrapper">
     <div>
         <h1 class="tenrate"><a href="top10.php">Top Ten</a></h1>
     </div>
     <div>
         <h1 class="tenrate"><a href="view-rate.php">View Joke Rate</a></h1>
     </div>
    </div>
</body>
