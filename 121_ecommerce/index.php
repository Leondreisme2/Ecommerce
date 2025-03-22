<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <a href="index.php"> ADD ITEM</a> |
    <a href="view_item.php"> VIEW ITEM</a>



    <h1> ADD ITEM </h1>
    <form action="process.php" method="POST"
    enctype="multipart/form-data">

    <labael> Picture  </labael>  </br>
    <input type="file" name="pic" required
    accept=".gif, .jfif, .png, .jpeg .webp"></p>
    
    <label> Item Name</label> </br>
    <input type="text" name="in" required></p>

    <input type="submit" name="add_item" value="ADD ITEM">
    </form>
</body>
</html>