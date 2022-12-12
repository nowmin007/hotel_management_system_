<?php
require 'connection.php';
error_reporting();
$id= $_GET['id'];
$ty=$_GET['ty'];
$ds=$_GET['ds'];
$pn=$_GET['pn'];
$pw=$_GET['pw'];
$img=$_GET['img'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header> <img src="images/accommodation.png" alt="Accommodation">
    <h1>Sunnyspot Accomodation</h1>
  </header>
<main>
        <h1>Update cabin</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div>
                <label for="cabinID">Cabin ID:</label>
                <input type="text" value = "<?php echo "$id" ?>"id="cabinID" name="cabinID" required>
            </div>    
        <div>
                <label for="cabinType">Cabin Type:</label>
                <input type="text" value = "<?php echo "$ty" ?>"id="cabinType" name="cabinType" required>
            </div>
            <div>
                <label for="cabinDescription">Cabin Description:</label>
                <input type="text" value = "<?php echo "$ds" ?>" id="cabinDescription" name="cabinDescription" required>
            </div>
            <div>
                <label for="pricePerNight">Price Per Night:</label>
                <input type="number" value = "<?php echo "$pn" ?>" id="pricePerNight" name="pricePerNight" required>
            </div>
            <div>
                <label for="pricePerWeek">Price Per Week:</label>
                <input type="number" value = "<?php echo "$pw" ?>" id="pricePerWeek" name="pricePerWeek" required>
            </div>
            <div>
                <label for="photo">Photo Name:</label>
                <input type="file" value = "<?php echo "$img" ?>" id="photo" name="photo">
                
            </div>
            <div>
                <button type="submit" id='submit' name="submit">Submit</button>
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
if(isset($_POST['submit'])){
    $cabinID = $_POST['cabinID'];
    $cabinType = $_POST['cabinType'];
    $cabinDescription = $_POST['cabinDescription'];
    $pricePerNight = $_POST['pricePerNight'];
    $pricePerWeek = $_POST['pricePerWeek'];
    $photo = $_FILES['photo']['name'];

    $query= "UPDATE `cabin` SET `cabinType`='".$cabinType."',`cabinDescription`='". $cabinDescription."',`pricePerNight`='".$pricePerNight."',`pricePerWeek`='".$pricePerWeek."',`photo`='".$photo."' WHERE `cabinID`=".$cabinID."";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('data updated successfully');</script>";
    }else{
        echo "not updated";

    }



}



?>