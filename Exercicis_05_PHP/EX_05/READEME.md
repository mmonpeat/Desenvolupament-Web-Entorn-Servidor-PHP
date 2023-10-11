## EX_05

Aquest és un codi HTML i PHP que s'utilitza per a crear una pàgina de registre d'usuaris en un lloc web i processar la informació ingressada pels usuaris. A continuació, s'expliquen les parts més importants d'aquest codi:

### FRONT-END:

#### index.php
 < !DOCTYPE html >: Això declara el tipus de document HTML que s'està utilitzant (HTML5).
 
 < meta charset="UTF-8" >: Estableix la codificació de caràcters del document en UTF-8 per a admetre caràcters especials.

 
Formulari de Registre:

 < form action="procesar_registro.php" method="POST" >: Defineix un formulari que envia les dades a processar_registre.php utilitzant el mètode POST quan l'usuari envia el formulari.
 
 < label >: Etiquetes per a descriure els camps del formulari.
 
 < input >: Camps d'entrada perquè l'usuari ingressi el seu nom, correu electrònic, contrasenya i data de naixement. L'atribut required indica que aquests camps són obligatoris.
 
 < input type="submit" value="Registrarse" >: Un botó d'enviament que l'usuari ha de fer clic per a enviar el formulari.

Enllaç per a Iniciar Sessió:

< p >Ja tens un compte? < a href="inicio_sesion.php" >Iniciar Sessió< /a >< /p >: Un enllaç que porta als usuaris a una pàgina d'inici de sessió si ja tenen un compte.

#### inicio_sesion.php

Aquest codi HTML crea una pàgina web d'inici de sessió amb un formulari. Els usuaris poden ingressar el seu correu electrònic i contrasenya, que després s'enviaran al servidor a través del mètode POST per a ser processats per processar_inicio_sesion.php.


### BACK-END:

#### procesar_registro.php

La part de PHP s'utilitza per a manejar el procés de registre i la interacció amb la base de dades MySQL.

S'intenta establir una connexió a una base de dades MySQL utilitzant l'extensió PDO. Es verifica si la connexió és reeixida.

Es crea una taula anomenada "usuaris", si no existeix.

Les dades del formulari s'obtenen i s'emmagatzemen en variables, i la contrasenya s'encripta abans de guardar-la en la base de dades.

Es verifica si el correu electrònic proporcionat ja està registrat en la base de dades.

Si el correu no està registrat, s'insereixen les dades de l'usuari en la base de dades. Si el correu ja està registrat, es mostra un missatge d'error.

Es maneja qualsevol excepció que pugui ocórrer durant el procés de registre i es mostra un missatge d'error si és necessari.

#### procesar_inicio_sesion.php

Estableix una connexió a una base de dades MySQL utilitzant PDO.

Obté les dades del formulari d'inici de sessió, és a dir, el correu electrònic i la contrasenya que l'usuari proporciona.

Realitza una consulta SQL per a buscar un usuari en la base de dades el correu electrònic de la qual coincideixi amb el proporcionat.

Verifica si es va trobar un usuari i si la contrasenya proporcionada coincideix amb la contrasenya emmagatzemada en la base de dades (usant password_verify per a comparar contrasenyes segures emmagatzemades amb hash).

Si les credencials són correctes, mostra un missatge "Has iniciat sessió en el teu compte". Si no són correctes, mostra un missatge d'error "Error: Correu o contrasenya incorrectes".

Finalment, tanca la connexió a la base de dades.













