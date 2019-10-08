<?php
    if(isset($_GET['submit'])){
        $r1 = $_GET['num1'];
        $r2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch($operator){
            
            case "None":
                echo "Select an operation";
            break;
            
            case "Add":
                echo $r1 + $r2;
            break;

            case "Substract":
                echo $r1 + $r2;
            break;

            case "Multiply":
                echo $r1 + $r2;
            break;

            case "Divide":
                echo $r1 + $r2;
            break;

            case "modulos":
                echo $r1 + $r2;
            break;


        }
    }

?>

