<?php
        if($_POST) {
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $num3 = $_POST['numero3'];
            
        
            if($num1 > $num2 && $num1 > $num3) 
                echo "El mayor es : " . $num1;
            else
                if($num2 > $num3)
                    echo  "El mayor es : " . $num2;
                else
                    echo  "Elmayor es : " . $num3;
        }
    ?>