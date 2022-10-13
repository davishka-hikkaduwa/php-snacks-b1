
<?php
    /*
        Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
        Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
        e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    */
    $db = [
        'matches' => [
            [
                'homename' => 'Milano',
                'awayname' => 'Varese',
                'homescore' => '80',
                'awayscore' => '76'
            ],
            [
                'homename' => 'Brescia',
                'awayname' => 'Trieste',
                'homescore' => '84',
                'awayscore' => '62'
            ],
            [
                'homename' => 'Pesaro',
                'awayname' => 'Napoli',
                'homescore' => '76',
                'awayscore' => '90'
            ],
            [
                'homename' => 'Trieste',
                'awayname' => 'Milano',
                'homescore' => '78',
                'awayscore' => '74'
            ],
            [
                'homename' => 'Varese',
                'awayname' => 'Pesaro',
                'homescore' => '92',
                'awayscore' => '72'
            ],
            [
                'homename' => 'Napoli',
                'awayname' => 'Brescia',
                'homescore' => '55',
                'awayscore' => '68'
            ],
        ]
    ];
    
    $matches = $db['matches'];
?>
<div class="match">
    <?php
    for($i = 0; $i < count($matches); $i++){
        ?>
            <p><?= $matches[$i]['homename'] ?> - <?= $matches[$i]['awayname'] ?> | <?= $matches[$i]['homescore'] ?>  <?= $matches[$i]['awayscore'] ?></p>
        <?php
    }
    ?>
</div>

<style>
    .match{
        color:black;   
    }
    p{
        border: 1px solid black;
    }
</style>

