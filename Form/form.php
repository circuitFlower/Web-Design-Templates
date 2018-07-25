<?php
$name= ($_POST['name']);
$address= ($_POST['address']);
$phone= ($_POST['phone']);
echo($name . "<br>");
echo($address . "<br>");
echo($phone . "<br>");

$link = mysqli_connect("localhost", "root", "root", "formMod");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$sql_statement = "INSERT INTO `formMod`(`name`, `address`, `phone`) VALUES ($name,$address,$phone)";
$result = $mysqli -> prepare($sql_statement);
        $result -> execute();
        $result -> store_result();
echo($result);
mysqli_close($link);
?>

?>
