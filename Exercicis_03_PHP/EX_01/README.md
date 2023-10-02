# EX_01

Sempre que creïs una classe i vulguis que es realitzin accions específiques en la creació d'un objecte d'aquesta classe, has de definir un mètode __construct per a aquest propòsit. 
Aquest mètode es crida automàticament quan es crea una nova instància de la classe, com quan fas això: $browserDetector = new BrowserDetector(); Així, el mètode __construct de la 
classe BrowserDetector s'executa automàticament en aquest punt.

La línia $userAgent = $_SERVER['HTTP_USER_AGENT']; es col·loca dins del constructor de la classe BrowserDetector per obtenir el valor de l'encapçalament HTTP_USER_AGENT del client al
crear una instància de la classe. Això ens permet identificar el navegador del client en el moment de crear un objecte BrowserDetector, i el constructor és el lloc adequat 
per a aquesta tasca d'inicialització.

P.S. Una "instància" es refereix a un objecte específic creat a partir d'una classe.

El bucle foreach itera a través d'aquest array. En cada iteració, $browser presa el valor de la clau (nom del navegador)
i $keyword presa el valor del valor associat (la paraula clau).

strpos($*userAgent, $keyword) és una funció que busca la primera ocurrència de $keyword dins de la cadena $userAgent (el user agent del client).
Si troba una coincidència, retorna la posició (índex) de la primera aparició de $keyword en $userAgent. Si no troba una coincidència, retorna false.