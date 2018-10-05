<?php
// connect to the database
    require 'dbh.php';
    $conn = mysqli_connect("localhost", "root", "root", "local");
    $sql = "SELECT * FROM Jokes order by RAND() LIMIT 1";
    $result = mysqli_query($conn,$sql);

    // check if logout it set 
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('Location: index.php');

    }
    // check if back it set
    if(isset($_POST['back'])){
        header('Location: home.php');

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jokes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="main.js"></script>
</head>
<body>
    <p class="fun">FunnyJokes</h1>
    <form action="" method="POST">
        <div class="rate">
            <h1> 
                <?php
                // counting number of rows
                if($result->num_rows > 0) {
                    //fetching data
                    while($row = $result->fetch_assoc()) {
                        $rating = $row['rating'];
                        $id = $row['id'];
                        $totalrated =$row['totalrated'];
                        echo $row['setup']. "\n". $row['punchline'];  
                    }
                }
                ?>

            </p>
            <input type="submit" value="Funny" name = "funny" id="funny">
            <input type="submit" value="Not Funny" name = "notfunny"id="notfun">
        </div>
            <button id="out" name= "logout">Log out</button>
            <button id="back" name= "back">Back</button>
   </form>
    <section>
        <form>
            
        </form>

    </section>

    <?php
        // Updating rates if is funny
    if(isset($_POST['funny'])){
        $sql= "UPDATE Jokes SET rating=$rating + 1,totalrated=$totalrated + 1 WHERE id= $id ";
        $result= mysqli_query($conn,$sql);
    }
    if(isset($_POST['notfunny'])){
        $sql= "UPDATE Jokes SET totalrated=$totalrated + 1 WHERE id= $id ";
        $result= mysqli_query($conn,$sql);
    }
    ?>
</body>
</html>