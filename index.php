<?php 
error_reporting(-1);
//Получить  все  четырехзначные  числа,  сумма  цифр  
//которых  равна заданному числу  n.

$n = 8;  

for ($i = 1000; $i < 9999; $i++){
    $value = $i;
    $res = 0;
    $num = 0;
    while($value != 0){
        $num = ($value / 10 - floor($value / 10) )*10;
        $value = floor($value / 10);
        $res += $num;
    }   
   
    if($res == $n){
        echo ($i."<br>");
    }
  
  
}

