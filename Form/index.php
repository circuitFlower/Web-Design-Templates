<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css" >
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Philosopher" rel="stylesheet">
</head>
<script>
<?php
//parts of this example are from https://www.tutorialspoint.com/mysqli/mysqli_insert_query.htm
          $name= ($_POST['name']);
          $address= ($_POST['address']);
          $phone= ($_POST['phone']);
          echo($name . "<br>");
          echo($address . "<br>");
          echo($phone . "<br>");

         if(isset($_POST["submit"])){
            echo("submit pressed");
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "formMod";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO formMod(name,address,phone) VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
</script>
<form action="index.php" method="POST">
  <input type="field" name="name">Name</input><br>
  <input type="field" name="address">Address</input><br>
  <input type="field" name="phone">Phone</input><br>
  <input type="submit" name="submit"></input>
</form>
