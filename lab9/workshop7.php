<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert-member.php" method="post" >
        username :<input type="text" name="username"><br>
        password :<input type="text" name="password"><br>
        name :<input type="text" name="name"><br>
        address :<input type="text" name="address"><br>
        mobile :<input type="text" name="mobile"><br>
        email :<input type="text" name="email"><br>
        
        <input type="submit" value="สมัครสมาชิก">
    </form>
    
</body>
</html>