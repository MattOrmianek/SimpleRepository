    <?php
    $wyraz = 'Jeśli';
    $tresc = 'Jeśk lik;kl;k;k .;klhukf hgfJeśli .jhklJeśli .jilJeśli . jkljJeśliljk . ljkJeśliljk . hgfJeślikjfk .' ;
    $arr = array();
    $ile_razy = preg_match_all('|'.$wyraz.'|', $tresc, $arr);
    echo 'Wyraz Jeśli wystąpił '.$ile_razy.' razy';
    ?>