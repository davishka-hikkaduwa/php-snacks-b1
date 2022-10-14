<?php
/*
    Snack 5
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
    [
        'name' => 'Michele',
        'lastname' => 'Visco',
        'votes' => [5,7,4,8,7,6]
    ],
    [
        'name' => 'Andrea',
        'lastname' => 'Sfruz',
        'votes' => [7,4,7,9,4,5]
    ],
    [
        'name' => 'Cristian',
        'lastname' => 'Santiago',
        'votes' => [6,8,8,5,6,9]
    ]
];

for($i = 0; $i < count($class); $i++){
    $student = $class[$i];
    $average = array_sum($student['votes']) / count($student['votes']);
    ?>
    <div>
        <h2><?= $student['name'] ?> <?= $student['lastname'] ?> </h2>
        <p><?= round($average, 2) ?></p>
    </div>
}


?>