<?php

include 'autoload.php';



$user1 = new \Src\BaseTariff(22, 40, 30,true, true);
echo "Сумма \"Базового\" = ";
echo $user1->testYears(); //проверка на диапазон возроста
echo $user1->total().' ₽';
echo '<br>';

$user2 = new \Src\HourlyTariff(21, 75, 30,false, false);
echo "Сумма \"Почасового\" = ";
echo $user2->testYears();
echo $user2->total().' ₽';
echo '<br>';

$user3 = new \Src\DaylyTariff(21, 24, 30,false, false);
echo "Сумма \"Суточного\" = ";
echo $user3->testYears();
echo $user3->total().' ₽';
echo '<br>';

$user4 = new \Src\StudentTariff(24, 24, 30,false, false);
echo "Сумма \"Студенческого\" = ";
echo $user4->testYears();
echo $user4->total().' ₽';
echo '<br>';




