<html>
<head>
  <title>php</title>
</head>
<body>
  <?php
    $std = array("Virat Kohli", "Rohit Sharma", "Jasprit Bumrah", "Ravindra Jadeja", "KL Rahul");
    foreach($std as $value){
      echo '<table border="1" cellpadding="5" cellspacing="0">';
      echo '<tr><th>SI No</th><th>Players</th></tr>';
      echo '<tr><td>';
      foreach($std as $i => $p){ echo ($i+1) . '<br>'; }
      echo '</td><td>';
      foreach($std as $p){ echo ($p) . '<br>'; }
      echo '</td></tr></table>';
      break;
    }
  ?>
</body>
</html>