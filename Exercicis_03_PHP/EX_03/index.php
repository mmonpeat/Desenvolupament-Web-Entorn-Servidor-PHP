
<?php
require "SensorController.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Test 5 sensors
for ($i=0; $i < 5; $i++) {
    $controller = new SensorController();
    $controller->generateRandomValueForSensor($i);
    echo "Sensor " . $i . ": " . $controller->getSensorValue($i) . "\n";
    $result1 = $controller->evaluateFormulaForSensor($i, "sensor * 2 / 24");
    $result2 = $controller->evaluateFormulaForSensor($i, "sensor / 2");
    $result3 = $controller->evaluateFormulaForSensor($i, "sensor + 2");
    echo "<pre>";
    echo "Result for formula 'sensor * 2 / 24': " . $result1 . "\n";
    echo "Result for formula 'sensor / 2': " . $result2 . "\n";
    echo "Result for formula 'sensor + 2': " . $result3 . "\n";
    echo "\n";
    echo "</pre>";
}

?>