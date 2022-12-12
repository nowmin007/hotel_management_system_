<?php
require 'connection.php';
$query1= "select * from cabin";
$result = mysqli_query($conn, $query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Gelos Enterprises</title>
    
</head>
<body>
<header> <img src="images/accommodation.png" alt="Accommodation">
    <h1>Sunnyspot Accomodation</h1>
  </header>
    
    <main>
        <h1>Delete existing cabin</h1>
        <table border="1px solid black" style="width:600px; line-height:40px;">
            <tr>
            <td>cabin id</td>
            <td>cabin type</td>
            <td>cabin desccription</td>
            <td>price per night</td>
            <td>price per week</td>
            <td>Operations</td>
        </tr>
        <tr>
          <?php
          while($row= mysqli_fetch_assoc($result))
          { 
          echo"
          <td>".$row['cabinID']."</td>
          <td>".$row['cabinType']."</td>
          <td>".$row['cabinDescription']."</td>
          <td>" .$row['pricePerNight']." </td>
          <td>" .$row['pricePerWeek']." </td>
          <td> <a href='delete1.php? id=$row[cabinID]'>delete</a></td>
          </tr>";
          
          }
          ?>
        
            
        </table>
        
    </main>
    <footer> 
    <a href="#">Admin</a> 
    <a href="adminlogin.php">Login</a>
    <a href="adminMenu.php">Admin Menu</a>
  </footer>
</body>
</html>