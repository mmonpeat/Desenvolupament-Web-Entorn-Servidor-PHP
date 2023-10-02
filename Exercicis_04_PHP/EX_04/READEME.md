## EX_04

L'etiqueta <label> és una etiqueta HTML que s'utilitza per associar una etiqueta de text a un camp d'entrada en un formulari. Això és útil per millorar l'accessibilitat del formulari i proporcionar una etiqueta descriptiva per al camp.

enctype="multipart/form-data": Aquest atribut s'afegeix a la etiqueta < form > i especifica com s'ha d'enviar la informació del formulari al servidor. Quan s'estableix com a "multipart/form-data", significa que el formulari està dissenyat per a l'enviament de fitxers, com ara imatges o arxius. Aquesta configuració és necessària quan vols permetre als usuaris carregar fitxers des del seu ordinador.

L'etiqueta < textarea > permet als usuaris introduir text en una àrea de text més gran. Els atributs rows i cols s'usen per definir l'àrea amb un aspecte predeterminat i guiar l'usuari en la quantitat d'informació que s'espera que ingressin, però l'usuari encara pot ampliar l'àrea de text si ho necessita.

< input type="hidden">: Aquest és un tipus especial d'input que es manté ocult i no és visible per a l'usuari. Es fa servir per emmagatzemar dades addicionals que es poden necessitar processar al servidor, però que no es mostren a l'usuari. Aquesta informació es podrà accedir desde servidor quan s'envii el formulari, però l'usuari no la veurà ni la modificarà.

La línea $rol = isset($_POST["rol"]) ? $_POST["rol"] : "No especificat"; és una operació condicional ternaria. Bàsicament, aquesta línia comprova si l'element $_POST["rol"] existeix. Si existeix, assigna el valor de $_POST["rol"] a la variable $rol. Si no existeix, assigna "No especificat" com a valor per defecte a la variable $rol. Això és útil per verificar si l'usuari ha seleccionat una opció dels botons de radio "Alumne" o "Profesor". Si ho ha fet, s'emmagatzemarà el valor seleccionat a la variable $rol. Si no, es mostrarà "No especificat" com a valor per defecte.

Es pot accedir directament a $_FILES["foto"]["name"] dins de l'etiqueta echo perquè aquesta variable conté el nom de l'arxiu de la imatge carregada a través del camp d'entrada "foto" del formulari. La variable $_FILES s'utilitza per gestionar els arxius carregats a través del formulari. $_FILES["foto"]["name"] conté el nom de l'arxiu original de la imatge que l'usuari ha seleccionat. Aquest valor es pot utilitzar directament per mostrar el nom de l'arxiu a la pàgina.