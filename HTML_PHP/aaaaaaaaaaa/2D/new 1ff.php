<?php

if(sizeof($_GET) == 2)

{

   echo 'Witaj, '.$_GET['imie'].' '.$_GET['nazwisko'].'!';

}

else

{

   echo 'Nieprawidłowa liczba parametrów!';

}