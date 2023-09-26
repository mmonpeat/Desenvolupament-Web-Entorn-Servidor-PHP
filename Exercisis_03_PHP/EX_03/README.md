# EX_03

ChatGPT m'ha ajudat bastant.
El qu em'ha costat més que funciones ha sigut :

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
i entendre la funció str_replace.
He creat la calsse Sensor per guardar i agafar el valor random.
