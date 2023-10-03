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

