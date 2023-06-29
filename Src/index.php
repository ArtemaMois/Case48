<?php

require "../autoloader.php";

$person = new Human('Alexey', 'Pavlov', 23);
echo "Имя: ";
$person->getname();
$person->setsurname('Ivanov');
echo "Фамилия: ";
$person->getsurname();
$person->setage(18);
echo "Возраст: ";
$person->getage();


