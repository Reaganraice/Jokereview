<?php
require 'dbh.php';
$sql=" SELECT*
from Jokes
ORDER BY rating DESC
limit 10";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print '<pre>';
        echo "id:".$row["id"]."type:".$row["type"]."setup:".$row["setup"]."punchline:".$row["punchline"]."rating:".$row["rating"]."<br>";
        print '<pre>';
    }
}
if(isset($_POST['back'])){
    header('Location: home.php');

} 

?>
<style>
body{
    background-color: #F5F3F5;
    font-size:15px;
    color:#302B27;
    margin-left:40px;
    margin-top:60px;
}


</style>
<form action="" method="POST">
<button id="topback" name= "back">Back</button>
</form>
<?php


?>
