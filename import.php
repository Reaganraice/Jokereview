<?php
require 'dbh.php';
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
   );
   function pre($x) {
       print '<pre>';
       print_r($x);
       print '</pre>';
   }
   ini_set('max_execution_time', 300);
   $range = range(0, 56);

   pre($range);
    // exit;
foreach (range(0, 56) as $row) {
    $id = $data['id'];
    $type = $data['type'];
    $setup= $data['setup'];
    $punchline = $data['punchline'];
    $filename = "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_joke";
    $data = file_get_contents($filename,false,stream_context_create($arrContextOptions));
    $data = json_decode($data,true);
    $sql= "INSERT INTO Jokes(type,setup,punchline)VALUES('$type','$setup','$punchline')";
    print '<pre>';
    echo ($sql);
    print '<pre>';

    mysqli_query($conn,$sql);
    print '<pre>';
    echo 'jokes data insert';
    print '<pre>';
}
pre();
?>