<?php
    $id = [
        'ESP',
        'CAN',
        'GBR',
        'FRA'
    ];

    $paisos = [
        'ESP' => [
            'nom' => 'Espanya',
            'codi' => 724
        ],
        'CAN' => [
            'nom' => 'Canadá',
            'codi' => 124
        ],
        'GBR' => [
            'nom' => 'Regne Unit',
            'codi' => 826
        ],
        'FRA' => [
            'nom' => 'Franca',
            'codi' => 250
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 3 </title>
</head>
<body>
<h1> Llista Noms </h1>
<ul>
    <?php
        echo "<strong> Llista de paissos i els seus codis corresponents:</strong></br>";
        echo "</br>";
        foreach ($id as $codi)
        {
            echo "El país {$paisos[$codi]['nom']} utilitza el codi alfa-3 $codi";
            echo "amb el codi numèric: {$paisos[$codi]['codi']}</br>";
            echo "</br>";
        }
    ?>
</ul>
</body>
</html>