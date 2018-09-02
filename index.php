<?php

include 'autoload.php';



$user1 = new \Src\Tariffs\BaseTariff(22, 40, 30,true, true);
echo "Сумма \"Базового\" = ";
echo $user1->isValidateAge(); //проверка на диапазон возроста
echo $user1->total().' ₽';
echo '<br>';

$user2 = new \Src\Tariffs\HourlyTariff(21, 75, 30,false, false);
echo "Сумма \"Почасового\" = ";
echo $user2->isValidateAge();
echo $user2->total().' ₽';
echo '<br>';

$user3 = new \Src\Tariffs\DaylyTariff(21, 24, 30,false, false);
echo "Сумма \"Суточного\" = ";
echo $user3->isValidateAge();
echo $user3->total().' ₽';
echo '<br>';

$user4 = new \Src\Tariffs\StudentTariff(24, 60, 30,false, false);
echo "Сумма \"Студенческого\" = ";
echo $user4->isValidateAge();
echo $user4->total().' ₽';
echo '<br>';




