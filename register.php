<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("head.html")
?>


<div id="register">
      <form action="connect.php" method="post">
        <label>Name</label>
        <input type="text" size="30" placeholder="username" name="n"><br><br>
        <label>Age</label>
        <input type="number"  name="a"><br><br>
        <label>Email</label>
        <input type="email"  name="e"><br><br>

        <input type="submit" value="register">
      </form>
    </div>

    <?php include("footer.html")
?>
</body>
</html>