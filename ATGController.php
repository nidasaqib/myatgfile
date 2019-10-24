
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $pinErr = "";
$name = $email = $gender = $comment = $pin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    if(empty($_POST["pin"])) {
    $pinErr = "PIN is required";
  } else {
    $pin = test_input($_POST["pin"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]{6}$/",$pin)) {
      $pinErr = "Need 6 digit number-Pincode!";
    }
  }
  
}


  if(($nameErr == "" && $pinErr == "" && $emailErr == "" ))
  {
    


     mysql_connect("localhost","root","");
     mysql_select_db("ATG");
     $check=mysql_query("select * from info");
     $email;
     $check['email'];
     if(($check['email']==$email))
     {
       echo $email;
       echo $check['email'];
       echo "User already regsitered with the same email. Try to log in or use another email.";
     }
     else
     {
       $status=mysql_query("insert into info(name,email,pin) values ('$name','$email',$pin)");
       if($status)
       {
        echo "employee added";
       }
       else
       {
       echo mysql_error();
       }
     }
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Pincode: <input type="text" name="pin">
  <span class="error">*<?php echo $pinErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>