<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
    <select name="color" id="color">
        <option type="submit"  value="rojo" >rojo</option>
        <option type="submit" value="verde" selected >verde</option>
        <option type="submit" value="azul">azul</option>
    </select>
        <input type="submit" value = "s">

    </form>
    <?php
        if($_POST) {
        $col= $_POST['color'];
        echo $col;
        }   
    ?>
</body>
</html>