<html>
<head>
  <title>Simple Form</title>
  <style>
    body{background:#f5f5f5;font-family:Arial,Helvetica,sans-serif;color:#222;padding:20px}
    .c{width:640px;margin:20px auto;background:#fff;border:1px solid #ccc;padding:20px;box-sizing:border-box}
    h2{text-align:center;margin:6px 0 18px 0;font-size:20px}
    form{font-size:14px}
    .row{margin-bottom:12px;display:flex;align-items:center}
    label{display:inline-block;width:140px;font-weight:600;color:#333;text-align:right;margin-right:12px}
    input[type="text"],input[type="tel"],textarea{border:1px solid #bbb;padding:6px;flex:1;box-sizing:border-box;background:#fff;color:#000}
    textarea{height:80px}
    .g{display:flex;align-items:center;gap:12px}
    .g label{font-weight:400;text-align:left;width:auto;margin:0}
    input[type="submit"]{background:#007bff;color:#fff;border:1px solid #0069d9;padding:8px 14px;cursor:pointer;font-weight:600}
    .submit{flex:1}
    @media(max-width:700px){.c{width:95%}.row{display:block}label{display:block;width:auto;margin-bottom:6px;text-align:left}input[type="text"],textarea,input[type="tel"]{width:100%}.submit{text-align:left}}
  </style>
</head>
<body>
<?php
$name = $email = $gender = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name   = test_input($_POST["name"] ?? "");
  $email  = test_input($_POST["email"] ?? "");
  $mobile = test_input($_POST["mobile"] ?? "");
  $gender = test_input($_POST["gender"] ?? "");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="c">
  <h2>Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="row">
      <label for="name">Name:</label>
      <input id="name" type="text" name="name" value="<?php echo $name; ?>">
    </div>

    <div class="row">
      <label for="email">E-mail:</label>
      <input id="email" type="text" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="row">
      <label for="mobile">Mobile:</label>
      <input id="mobile" type="tel" name="mobile" value="<?php echo $mobile; ?>">
    </div>

    <div class="row">
      <label>Gender:</label>
      <div class="g">
        <label><input type="radio" name="gender" value="female" <?php if ($gender === "female") echo "checked"; ?>> Female</label>
        <label><input type="radio" name="gender" value="male" <?php if ($gender === "male") echo "checked"; ?>> Male</label>
        <label><input type="radio" name="gender" value="other" <?php if ($gender === "other") echo "checked"; ?>> Other</label>
      </div>
    </div>

    <div class="row">
      <label></label>
      <div class="submit">
        <input type="submit" name="submit" value="Submit">
      </div>
    </div>
  </form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
?>
</div>
</body>
</html>
