<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 7 </title>
    <style>
        .taulell {
            border-collapse: collapse;
            border: 1px solid black;
            width: 400px;
            height: 400px;
        }
        .casella {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 24px;
        }
        .casella-par {
            background-color: white;
            color: black;
        }

        .casella-impar {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1> EX 7 </h1>
    <table class="taulell">
        <?php
            for ($row = 1; $row <= 8; $row++)
            {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++)
                {
                    $type_casella = ($row + $col) % 2 == 0 ? 'casella-par' : 'casella-impar';
                    echo "<td class='casella $type_casella'></td>";
                }
                echo "<tr>";
            }
        ?>
    </table>
</body>
</html>