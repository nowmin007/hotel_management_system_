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
        <h1>Admin</h1>
        <?php
        //session starts
        
        $userN = $_POST['username'];

        $passW = $_POST['password'];

        $userlist = file ('loginpass.txt');

        $error_msg = "";

if (empty($_POST['username']))
     $error_msg .= "<p>You must enter your name.</p>"; 
if (empty($_POST['password']))
     $error_msg .= "<p>You must enter your password.</p>";

    if( $userN == "admin" and $passW == "secure"  ){
        session_start();
        $_SESSION['sid']= session_id();
        echo "logged in";
        header('Location: adminMenu.php');
    }
    else{
        echo"wrong password";
    }

      

 
        ?>
    </main>
    
</body>
</html>