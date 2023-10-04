## EX_03

#### index.php
El codi HTML presenta un formulari de login amb un camp de text per introduir el nom d'usuari i un botó d'enviament per enviar les dades del formulari al mateix script ("index.php"), però a la part de php, que ara explicaré.
Es comença amb la crida a session_start(), que inicia una nova sessió o reanuda la sessió actual. 
Aquesta funció és necessària per a la gestió de sessions en PHP i s'ha de cridar abans d'utilitzar o accedir a les variables de sessió.
Es comprova si l'usuari ja ha iniciat sessió mitjançant la comprovació if (isset($_SESSION['nombre'])), és a dir que
comprova si la variable de sessió 'nombre' existeix. Si existeix, significa que l'usuari ja ha iniciat sessió i 
es redirigeix a la pàgina "principal.php" amb la funció header("Location: principal.php"). A continuació, s'executa exit() per garantir
que el script es detingui aquí i no es processi cap altra part de la pàgina.
Després de la comprovació de la sessió, es comprova si s'ha enviat el formulari de login amb if ($_SERVER["REQUEST_METHOD"] == "POST").
Això significa que aquest bloc de codi s'executarà quan l'usuari envii el formulari amb les seves dades de login.
Si les dades del formulari s'han enviat, s'emmagatzema el nom d'usuari introduït a la variable $nombre amb $_POST["nombre"].
Es realitza una validació senzilla per assegurar-se que el camp de nom d'usuari no estigui buit mitjançant la comprovació if ($nombre != "").
Si el nom d'usuari no està buit, es guarda aquest nom d'usuari a la variable de sessió 'nombre' amb $_SESSION['nombre'] = $nombre. 
A més, s'inicialitza una altra variable de sessió 'puntos_acumulados' amb un valor inicial de 0.
A continuació, es redirigeix l'usuari a la pàgina "principal.php" amb la funció header("Location: principal.php") i s'executa exit() per detenir el script.


#### principal.php
<h1>Bienvenido, <?php echo $_SESSION['nombre']; ?></h1>: Aquesta línia mostra el missatge de benvinguda i el nom de l'usuari emmagatzemat a la variable de sessió 'nombre'. Si l'usuari ha iniciat sessió amb èxit, es mostrarà el seu nom d'usuari.
<p>Tienes <?php echo $_SESSION['puntos_acumulados']; ?> puntos acumulados.</p>: Aquesta línia mostra la quantitat de punts acumulats per l'usuari. Aquests punts es troben a la variable de sessió 'puntos_acumulados'.
<a href="close.php">Cerrar Sesión</a>: Es mostra un enllaç que l'usuari pot fer clic per tancar la seva sessió. L'enllaç apunta a la pàgina close.php, que probablement conté el codi per tancar la sessió i redirigir l'usuari a la pàgina de login.
session_start();: Aquesta línia de codi inicia una sessió de PHP. Les sessions s'utilitzen per emmagatzemar i mantenir dades de l'usuari mentre estan connectats al lloc web.
if (!isset($_SESSION['nombre'])) {: Aquesta línia comprova si la variable de sessió 'nombre' no està definida. 'nombre' sembla ser el nom d'usuari de l'usuari actual que s'espera que estigui emmagatzemat en la sessió. Si aquesta variable no està definida, significa que l'usuari no ha iniciat sessió.
header("Location: login.php");: Si l'usuari no ha iniciat sessió (és a dir, la variable 'nombre' no està definida), aquesta línia redirigirà l'usuari a la pàgina de login.php utilitzant l'encapçalament HTTP Location. Això significa que l'usuari serà redirigit a la pàgina de login per autenticar-se.
exit();: Aquesta funció es fa servir per a sortir del script en aquest punt. Garanteix que el codi següent no s'executi si l'usuari no ha iniciat sessió.

#### close.php
session_start();: Aquesta línia de codi inicia una sessió de PHP. Les sessions s'utilitzen per emmagatzemar i mantenir dades de l'usuari mentre estan connectats al lloc web.
if (isset($_SESSION['nombre'])) {: Aquesta línia comprova si la variable de sessió 'nombre' està definida. 'nombre' sembla ser el nom d'usuari de l'usuari actual que s'espera que estigui emmagatzemat en la sessió. Si aquesta variable està definida, significa que l'usuari ha iniciat sessió.
session_destroy();: Si l'usuari ha iniciat sessió (és a dir, la variable 'nombre' està definida), aquesta línia de codi destrueix la sessió actual, eliminant totes les dades de sessió emmagatzemades per a aquesta sessió. Això és útil per tancar la sessió de l'usuari i fer que hagin de fer un nou inici de sessió la propera vegada que visitin el lloc web.
header("Location: index.php");: Després de tancar la sessió, aquesta línia redirigeix l'usuari a la pàgina d'inici de sessió, que sembla ser index.php. Això significa que l'usuari serà redirigit a la pàgina d'inici de sessió després de tancar sessió amb èxit.
exit();: Aquesta funció es fa servir per a sortir del script en aquest punt. Garanteix que el codi següent no s'executi després de redirigir l'usuari a la pàgina d'inici de sessió.

