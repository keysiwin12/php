<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
    <input type="number" name = "numero">
    <input type="submit" value = " ">
    </form>
    <?php
        if($_POST) {
            // $num = $_POST['numero'];

            // switch ($num) {
            //     case 0 : 
            //         echo "num es igual a 0 ";
            //         break;
            
            //     case 1 : 
            //         echo "num es igual a 1 ";
            //         break;
            
            //     case 2 :
            //         echo "num es igual a 2";
            //         break;
            
            //     default:
            //         echo "no se a que es igual";
            //         break;
            // }

            // $i =1;
            // while ($i < 10) {
            //     echo $i++;
            // }

            for($i = 0 ; $i <=10 ; $i++) {
                echo "$i \n";  
            }         
        }
    ?>
</body>
</html>