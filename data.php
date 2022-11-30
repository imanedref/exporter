<?php $conn = mysqli_connect("host=192.168.193.139 port=5432  user=caux password=caux dbname=caux");?>
<table border = 1>
  <tr>
    <td>id</td>
    <td>first_name</td>
    <td>last_name </td>
    <td>email</td>
    <td>birthdate</td>
  </tr>
  <?php
  $i = 1;
  $rows = mysqli_query($conn, "SELECT * FROM authors");
  foreach($rows as $row) :
  ?>
  <tr>
    <td> <?php echo $i++; ?> </td>
    <td> <?php echo $row["id"]; ?> </td>
    <td> <?php echo $row["first_name"]; ?> </td>
    <td> <?php echo $row["last_name"]; ?> </td>
    <td> <?php echo $row["email"]; ?> </td>
    <td> <?php echo $row["birthdate"]; ?> </td>
  </tr>
  <?php endforeach; ?>
</table>
