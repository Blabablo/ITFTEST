<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitftest.mysql.database.azure.com', 'Jirayu020@labitftest', 'Jirayutest101', 'ITFtest', 3306);
$res = mysqli_query($conn, "SELECT * FROM ITFTEST WHERE ID='$id'");
$row = mysqli_fetch_array($res)
?>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 120px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 120px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<div>
<form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
    <label for="idProduct" style="margin: auto 120px">Product</label>
    <input type="text" name = "Product" id="idProduct" value="<?php echo "$row[Product]"; ?>" <br>
    <label for="idPrice" style="margin: auto 120px">Price</label>
    <input type="text" name = "Price" id="idPrice" value="<?php echo "$row[Price]"; ?>" <br>
		<label for="idAmount" style="margin: auto 120px">Amount</label>
    <input type="text" name = "Amount" id="idAmount" value="<?php echo "$row[Amount]"; ?>"> <br><br>
		<label for="idTotal" style="margin: auto 120px">Total</label>
    <input type="text" name = "Total" id="idTotal" value="<?php echo "$row[Total]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
</div>
  </form>
