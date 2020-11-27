<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<head>
<title>ITFTEST</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitftest.mysql.database.azure.com', 'Jirayu020@labitftest', 'Jirayutest101', 'ITFtest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM ITFTEST');
?>
<table width="600" border="1" class="table table-striped table-dark">
  <tr class="bg-info">
    <th width="100"> <div align="center">Product</div></th>
    <th width="350"> <div align="center">Price </div></th>
    <th width="150"> <div align="center">Amount</div></th>
    <th width="150"> <div align="center">Total</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['ชื่อสินค้า'];?></div></td>
    <td><?php echo $Result['ราคาต่อหน่วย'];?></td>
    <td><?php echo $Result['จำนวน'];?></td>
    <td><?php echo $Result['ราคาทั้งหมด'];?></td>
    <td>
      <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-success" >EDIT</a>
      <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-danger"onclick="return confirm('Confirm data deletion?')">DELETE</a>
    </td>
  </tr>
<?php
}
?>
</table>
<button type="button" class="btn btn-outline-warning" onclick ="window.location.href='form.html'">ADD</button>                                                                                                       
<?php
mysqli_close($conn);
?>
</body>
</html>
