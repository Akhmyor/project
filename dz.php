<?php
// введите возраст
$a = 24;

if($a > 6 && $a <= 12){
   echo "Спортсен находится на этапе 'Начинающий'.";
} elseif ( $a >= 14 && $a <=17){
    echo "Спортсемен находится на этапе'Средний уровень'.";
} elseif ($a >= 18 && $a <=100){
    echo "Спортсем находится на уровне 'Профессионал'.";
} else {
    echo  "введите число от 6 до 100.";
}
?>