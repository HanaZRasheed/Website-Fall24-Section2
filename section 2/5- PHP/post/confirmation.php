<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    print_r($_POST);
    ?>
    <h1> Hello  <?php echo $_POST['Username']. ' Your id is '. $_POST['id'];?></h1>
</body>
</html>