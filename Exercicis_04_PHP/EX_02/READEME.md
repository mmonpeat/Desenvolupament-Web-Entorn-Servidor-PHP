## EX_02

Es crea un formulari HTML que conté un camp d'entrada de text (< input type = "text" >) amb el nom "operation". Aquest camp d'entrada de text permet als usuaris escriure una paraula.

Quan l'usuari fa clic en el botó "Enviar" (< input type="submit" >), el formulari s'envia a l'arxiu especificat en l'atribut *action, que en aquest cas és "auxiliar.php", utilitzant el mètode POST.

En l'arxiu "auxiliar.php", es verifica si la sol·licitud es va realitzar utilitzant el mètode POST mitjançant la comprovació de $_*SERVER["REQUEST_METHOD"]. Això garanteix que el codi en "auxiliar.php" només s'executi quan s'envia el formulari.

Si la sol·licitud és de tipus POST, s'utilitza $_POST["operation"] per a accedir al valor ingressat en el camp de text del formulari. El valor s'emmagatzema en la variable $operation.

Després, s'utilitza la funció eval() per a avaluar i calcular l'operació matemàtica ingressada.

Si l'operació es realitza correctament, es mostra tant l'operació ingressada com el resultat en la pàgina.

Si ocorre algun error durant l'avaluació de l'operació, es captura una excepció de tipus Exception i es mostra un missatge d'error.