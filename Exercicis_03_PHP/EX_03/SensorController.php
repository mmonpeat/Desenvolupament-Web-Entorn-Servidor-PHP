<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Sensor
{
    private $value;
    public  function __construct()
    {
        $this->value = 0;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return ($this->value);
    }
}
class SensorController
{
    public $sensors;

    public function __construct() {
        $this->sensors = [];//array de cada sensor
        for ($i = 0; $i < 5; $i++) {//iterem aquest array
            $this->sensors[] = new Sensor();//inicialitzem en cada posisio del array tipo classe Sensor
        }
    }

    public function generateRandomValueForSensor($num_sensor)
    {
        if ($num_sensor >= 0 && $num_sensor <= 4)
        {
            $num_rand = rand(0, 4095);
            $this->sensors[$num_sensor]->setValue($num_rand);//guardem el valor del numero random
        }
    }

    public function getSensorValue($num_sensor) {
        if ($num_sensor >= 0 && $num_sensor < 5) {
            return $this->sensors[$num_sensor]->getValue();
        }
        return null;
    }
    public function evaluateFormulaForSensor($num_sensor, $formula)
    {
        $result = 0;
        if (!($num_sensor >= 0 && $num_sensor <= 4))
            return (null);
        $ValueSensor = $this->sensors[$num_sensor]->getValue();
        $evalFormula = str_replace("sensor", $ValueSensor, $formula);
        eval('$result = ' . $evalFormula . ';');
        return ($result);
    }
}
?>