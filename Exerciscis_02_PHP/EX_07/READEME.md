# READEME EX 07

El que havia comentat en el codi, però ho poso aquí, així el codi queda més net.
<?php
    for ($row = 1; $row <= 8; $row++)
    {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++)
        {
            $type_casella = ($row + $col) % 2 == 0 ? 'casella-par' : 'casella-impar';
            /*És el mateix que la línia superior
            * if (($row + $col) % 2 == 0) {//resido 0
                $type_casella = 'casella-par';
            } else {
                $type_casella = 'casella-impar';
            }*/
            echo "<td class='casella $type_casella'></td>";
            //echo "<td class='casella $type_casella'>$row, $col</td>";
            //td --> crea una casella
            //class='casella $type_casella --> afegeix el css de casella i la variable type casella, que possa css de de si es par o no.
            //$row, $col --> escriu la posició casella
        }
    echo "<tr>";
    }
?>
