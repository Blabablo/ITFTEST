<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labitftest.mysql.database.azure.com', 'Jirayu020@labitftest', 'Jirayutest101', 'ITFtest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];

$sql = "INSERT INTO ITFTEST(Product, Price, Amount) VALUES ('$product', '$price', '$amount')";


if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
