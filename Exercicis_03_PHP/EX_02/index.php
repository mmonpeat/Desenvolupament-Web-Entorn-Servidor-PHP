<?php

require "Treballador.php";

$Treb1 = new Treballador('Maria', 2550);
$Treb2 = new Treballador('Elna', 1500);

echo "<h2> Treballadora 1 </h2>";
echo $Treb1->showEmpleado();
echo $Treb1->is_salary();

echo "<h2> Treballadora 2 </h2>";
echo $Treb2->showEmpleado();
echo $Treb2->is_salary();
?>