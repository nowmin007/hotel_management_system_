<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelos Enterprises</title>
   <link href="style.css" rel="stylesheet">
</head>
<body>
<header> <img src="images/accommodation.png" alt="Accommodation">
    <h1>Sunnyspot Accomodation</h1>
  </header>

    
    <main>
        <h1>Insert new cabin</h1>
        <form name ="myForm" action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="cabinType">Cabin Type:</label>
                <input type="text" id="cabinType" name="cabinType" required>
            </div>
            <div>
                <label for="cabinDescription">Cabin Description:</label>
                <input type="text" id="cabinDescription" name="cabinDescription" required>
            </div>
            <div>
                <label for="pricePerNight">Price Per Night:</label>
                <input type="number" id="pricePerNight" name="pricePerNight" required>
            </div>
            <div>
                <label for="pricePerWeek">Price Per Week:</label>
                <input type="number" id="pricePerWeek" name="pricePerWeek" required>
            </div>
            <div>
                <label for="photo">Photo Name:</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div>
                <button type="submit" name="submit" value="upload">Insert</button>
            </div>
        </form>
    </main>
    <footer> 
    <a href="#">Admin</a> 
    <a href="adminlogin.php">Login</a>
    <a href="adminMenu.php">Admin Menu</a>
  </footer>

</body>
</html>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
 $cabinType = $_POST['cabinType'];
  $cabinDescription = $_POST['cabinDescription'];
  $pricePerNight = $_POST['pricePerNight'];
  $pricePerWeek = $_POST['pricePerWeek'];
 //$photo= "images/".basename($_FILES['photo']['name']);
 if($pricePerWeek > $pricePerNight*5){
    echo "price per week can not be greater than 5 times of price per night";
}else{
  
  //$photo = $_FILES['photo'];
  //$folder = "./image/" . $photo;
  if(empty($_POST['photo'])){
    $image_name = 'deluxCabin.jpg';   
}else{
    $image_name = $_FILES['photo']['name'];
  $tmp_name=$_FILES['photo']['tmp_name'];
  $folder="images/".$image_name;
  move_uploaded_file($tmp_name, $folder);
}
  $query = "INSERT INTO cabin VALUES('','$cabinType','$cabinDescription','$pricePerNight',' $pricePerWeek','$image_name')";
 
 // $sql = "INSERT INTO image (photo) VALUES ('$photo')";
mysqli_query($conn, $query);



echo"<script>alert('data');</script>";}



}
?>

