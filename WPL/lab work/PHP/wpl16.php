<html>

<head>
    <title>Form</title>
</head>

<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Consumer name:<input type="text" name="CName"><br>
		Consumer No:<input type="text" name="CNo"><br>
		Unit:<input type="text" name="unit"><br>
		
		<input type="submit" name="submit">
	</form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $CName = $_POST['CName'];
    $CNo   = $_POST['CNo'];
    $unit  = (float)$_POST['unit'];

    $remaining = $unit;
    $bill = 0.0;
    $breakdown = [];

    $tiers = [
      [100, 5.0],
      [100, 7.5],
      [PHP_INT_MAX, 10.0],
    ];

    foreach ($tiers as $t) {
      if ($remaining <= 0) break;
      $limit = $t[0]; $rate = $t[1];
      $u = min($remaining, $limit);
      $charge = $u * $rate;
      $bill += $charge;
      $breakdown[] = "{$u} unit(s) x Rs.{$rate} = Rs." . number_format($charge, 2);
      $remaining -= $u;
    }

    echo "Consumer Name: $CName<br>";
    echo "Consumer No: $CNo<br>";
    echo "Units: $unit<br><br>";
    echo "Bill breakdown:<br>";
    foreach ($breakdown as $line) echo $line . "<br>";
    echo "<strong>Total Amount Payable: Rs." . number_format($bill, 2) . "</strong><br>";
  }
  ?>
	
</body>
</html>