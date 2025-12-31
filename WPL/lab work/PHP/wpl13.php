<html>
<head>
  <title>php</title>
</head>
<body>
  <?php
    $std=array("2"=>"goutham","3"=>"kumar","1"=>"reddy");
    foreach($std as $key => $value){
      echo "$value<br>";
    }
    echo "Sorting ascending using asort :<br>";
    asort($std);
    print_r($std);
    
    echo "<br>Sorting descending using asort :<br>";
    arsort($std);
    print_r($std);

  ?>
</body>
</html>