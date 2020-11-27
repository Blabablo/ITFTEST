<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitftest.mysql.database.azure.com', 'Jirayu020@labitftest', 'Jirayutest101', 'itflab', 3306);
$name=$_POST['Name'];
$comment=$_POST['Comment'];
$link=$_POST['Link'];
$sql="UPDATE ITFTEST SET Product='$product',Price='$price',Amount='$amount',Total='$total' WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
