<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelos Enterprises</title>
    
</head>
<body>
    
    <main>
        <h1>logout</h1>
        <?php
     
      session_start();
      unset($_SESSION["username"]);
      unset($_SESSION["password"]);
      header("Location:adminlogin.php");
     

      

 
        ?>
    </main>
    
</body>
</html>