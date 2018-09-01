<?php

include 'autoload.php';



$user1 = new \Src\BaseTariff(22, 40, 30,true, true);
echo $user1->testYears();
echo $user1->total();

echo '<br>';




