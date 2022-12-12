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
    
    
    <main>
        <h1>Administrative menu</h1>
        <ul>
        <li class="menu"><a href="insert.php">Insert a new cabin</a></li>
        <li class="menu"><a href="update.php">Update a cabin</a></li>
        <li class="menu"><a href="delete.php">Delete a cabin</a></li>
        </ul>
        <form action="adminlogout.php" method="post">
        <div>
                <button type="submit" name="logout">LOGOUT</button>
            </div>
        </form>
        
    </main>
    

</body>
</html>