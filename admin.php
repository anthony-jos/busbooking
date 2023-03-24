<?php
include 'header.php';
include 'dbconnection.php';

$query = "SELECT * FROM booking order by seat_no asc ";
$result1 =mysqli_query($conn,$query);

$query = "SELECT * FROM booking2 order by seat_no asc ";
$result2 =mysqli_query($conn,$query);

$query = "SELECT * FROM booking3 order by seat_no asc ";
$result3 =mysqli_query($conn,$query);
?>

<table>
  <tr>
    <h2>Bus No:1</h2>
    <th>Seat No:</th>
    <th>Name</th>
    <th>Contact</th>
  </tr>
  <tr>
    <?php
      while($row=mysqli_fetch_assoc($result1))
      {

    ?>  
    <td><?php echo $row['seat_no'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['ph'];?></td>
    <td>    <form action="bus.php" method="post">
      <td><button type="submit" class="delete" name="delete1" value="<?=$row['seat_no'];?>">Delete</button></td>
    </form></td>
  </tr>
  <?php
      }
      ?>
</table>
<table>


<table>
  <tr>
    <h2>Bus No:2</h2>
    <th>Seat No:</th>
    <th>Name</th>
    <th>Contact</th>
  </tr>
  <tr>
    <?php
      while($row=mysqli_fetch_assoc($result2))
      {

    ?>  
    <td><?php echo $row['seat_no'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['ph'];?></td>
    <td>    <form action="bus.php" method="post">
      <td><button type="submit" class="delete" name="delete2" value="<?=$row['seat_no'];?>">Delete</button></td>
    </form></td>
  </tr>
  <?php
      }
      ?>
</table>
<table>


  <tr>
    <h2>Bus No:3</h2>
    <th>Seat No:</th>
    <th>Name</th>
    <th>Contact</th>
  </tr>
  <tr>
    <?php
      while($row=mysqli_fetch_assoc($result3))
      {

    ?>  
    <td><?php echo $row['seat_no'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['ph'];?></td>
    <td>    <form action="bus.php" method="post">
      <td><button type="submit" class="delete" name="delete3" value="<?=$row['seat_no'];?>">Delete</button></td>
    </form></td>
  </tr>
  <?php
      }
      ?>
</table>