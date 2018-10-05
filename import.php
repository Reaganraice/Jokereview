<?php
// connecting to the database
require 'dbh.php';

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
   );
// fetching jokes from the api
    $jokesToInsert = [];
    while(count($jokesToInsert) < 56) {
        $filename = "https://08ad1pao69.execute-api.us-east-1.amazonaws.com/dev/random_joke";
        $data = file_get_contents($filename,false,stream_context_create($arrContextOptions));
        $data = json_decode($data,true);
      

        if(!array_search($data, $jokesToInsert)) {
            array_push($jokesToInsert,$data);
        }
    }
    print '<pre>';
    print_r($jokesToInsert);
    print '<pre>';

// Insert into database
foreach ($jokesToInsert as $joke) {
    $setup= $joke['setup'];
    $punchline = $joke['punchline'];
    $joke_id = $joke['id'];
    $sql= "INSERT INTO Jokes(setup,punchline,joke_id)VALUES('$setup','$punchline','$joke_id')";
    print '<pre>';
    echo ($sql);
    print '<pre>';

    //printing jokes from API 
    $result= mysqli_query($conn,$sql);
    print '<pre>';
    echo 'jokes data insert';
    print '<pre>';
}
?>