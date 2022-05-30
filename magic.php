<?php

include_once './autoload.php';

use Magic\PeopleList;
use Magic\Person;


$person1 = new Person();
$person1->name = 'Ivan';
$person1->login = 'IvaIvan';
$person1->password = '3456';
echo $person1;
echo '<br>';
$person1serialize = serialize($person1);
echo "serialize: $person1serialize";
echo '<br>';
$person1unserialize = unserialize($person1serialize);
echo "unserialize: $person1unserialize";
echo '<br>';
$person1->iterator();
$person1 = str_replace('login', 'newLogin', $person1);
echo '<br>';
echo $person1;
$person2 = new Person();
$person2->name = 'Oleg';
$person2->login = 'OleOleg';
$person2->password = '1234';
echo '<br>';
$PeopleList = new PeopleList();
$PeopleList->list = $person1;
$PeopleList->list = $person2;
$list = $PeopleList->getList();
foreach ($list as $name => $item){
    echo "$name => $item<br>";
}