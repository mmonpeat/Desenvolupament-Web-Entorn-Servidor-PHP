S'obre un formulari amb l'atribut action establit com a "cookies.php" i el mètode de transferència de dades method com a "post". 
Això significa que quan es premi el botó "Enviar", les dades del formulari s'enviaran a un script PHP anomenat "cookies.php" mitjançant una sol·licitud POST.
S'afegeixen dues variables PHP, $nom i $llengua, amb valors inicials.
S'afegeixen dos camps de formulari:
Un camp de text per al nom d'usuari amb l'etiqueta "Nom d'Usuari". El valor d'aquest camp es configura mitjançant l'atribut value 
amb el valor de la variable $nom. Aquest camp és obligatori (required) i té l'ID "nom".
Un camp de desplegable (select) per seleccionar la llengua preferida amb l'etiqueta "Lengua preferida". Les opcions del desplegable tenen valors i etiquetes, i la que coincideix amb el valor de la variable $llengua té l'atribut selected per mostrar-la com a opció seleccionada per defecte. 
Aquest camp també és obligatori (required) i té l'ID "llengua".

Si s'han enviat dades del formulari al servidor, les dades nom i llengua es guarden en unes cookies anomenades igual.
Una cookie anomenada "nom" amb el valor de la variable $nom. Aquesta cookie caduca en 30 dies, ja que s'ha configurat 
amb time() + 3600 * 24 * 30.
Una altra cookie anomenada "llengua" amb el valor de la variable $llengua. Aquesta també caduca en 30 dies.

Si no s'han enviat dades del formulari, es comprova si existeixen les cookies "nom" i "llengua" amb isset($_COOKIE["nom"]) i 
isset($_COOKIE["llengua"]). Si les cookies existeixen, els seus valors es recullen i s'emmagatzemen a les variables $nom i $llengua.
Si les cookies "nom" i "llengua" no existeixen (és a dir, l'usuari no ha visitat la pàgina abans o les cookies han caducat), 
s'utilitza un valor per defecte per a $llengua, que és "cat" (català).
