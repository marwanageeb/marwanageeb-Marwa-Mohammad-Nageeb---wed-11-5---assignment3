
<?php

function calculate( $num1,$num2,$operator)
{
    switch ($operator) {

        case 'Add':
            return  $num1 + $num2;
            break;
        case 'Subtract':
            return $num1 - $num2;
            break;
        case 'Multiply':
            return $num1 * $num2;
            break;
        case 'Divide':
            if($num2 !=0){
                return  $num1 / $num2;

            }else{
                return " math error cant divide on zero"; 
            }
            break;

    default: 
    return "enter valid operation";
}
}

if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    $result= calculate( $num1 ,$num2 ,$operator);

    header("location: calcuolator.php?result=$result");

}
else{
    header("location: calcuolator.php");
}