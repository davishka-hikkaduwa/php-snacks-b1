<?php
/*
    Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/


$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi temporibus nam, voluptate possimus a et illo accusantium autem dignissimos dolorum ad delectus inventore quibusdam ab, vel aspernatur non, facere quas?'

$array = explode('.', $paragraph);

var_dump($array);

?>


