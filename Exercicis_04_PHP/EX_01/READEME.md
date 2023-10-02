## EX_01

Té un atribut action, que indica on s'enviarà el formulari al clicar enviar i s'envia amb el metode post.
Posem un imput text que el nom d'aquest bloc de text és word, que això serveix per que l'arxiu auxiliar.php pugui acedir a la paraula que s'ha escrit en aquest textbox.

L'arxiu auxiliar primer comprova que el metode que demana és de tipus POST. Si es d'aquest tipus demana la paraula guardada el la capsa de text amb $_POST.


<!--
Es crea un formulari HTML que conté un camp d'entrada de text (<input type="text">) amb el nom "*word". Aquest camp d'entrada de text permet als usuaris escriure una paraula.

Quan l'usuari fa clic en el botó "Enviar" (<input type="submit">), el formulari s'envia a l'arxiu especificat en l'atribut *action, que en aquest cas és "auxiliar.*php", utilitzant el mètode POST.

En l'arxiu "auxiliar.*php", es verifica si la sol·licitud es va realitzar utilitzant el mètode POST mitjançant la comprovació de $_*SERVER["*REQUEST_*METHOD"]. Això garanteix que el codi en "auxiliar.*php" només s'executi quan s'envia el formulari.

Si la sol·licitud és de tipus POST, s'utilitza $_POST["*word"] per a accedir al valor ingressat en el camp de text del formulari. El valor s'emmagatzema en la variable $*word.

Després, es calcula la longitud de la paraula utilitzant la funció *strlen i s'emmagatzema en la variable $*wordLength.

Finalment, es mostra la longitud de la paraula en la pàgina utilitzant tiro.

-->