<?php
// Creem una clase
class BrowserDetector {
    // variable on es guarda el nom del navegador
    private $browserName;

    // Constructor que detecta el navegador al instanciar la clase
    public function __construct() {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->browserName = $this->detectBrowser($userAgent);
    }

    // Método privat per detectar el navegador a partir del user agent.
    private function detectBrowser($userAgent) {
        // Array per detactar navegadors comuns
        $browsers = array(
            //clave => valor
            'Firefox' => 'Firefox',
            'Chrome' => 'Chrome',
            'Safari' => 'Safari',
            'Edge' => 'Edge',
            'IE' => 'MSIE', // Internet Explorer
            'Opera' => 'Opera',
        );

        // Iterem fins trobar el navegador del user agent
        foreach ($browsers as $browser => $keyword) {
            if (strpos($userAgent, $keyword) !== false) {
                return $browser;
            }
        }

        // Si no esta en l'array el marquem com a desconegut
        return 'Desconegut';
    }

    // Método públic per obtenir el nom del navegador
    public function getBrowserName() {
        return $this->browserName;
    }
}

// Creem un objete de la clase BrowserDetector
$browserDetector = new BrowserDetector();

// Obtenim el nom del navegador
$browserName = $browserDetector->getBrowserName();

echo "El cliente está utilizando el navegador: " . $browserName;

?>
