## EX_06

Connecta a la base de dades utilitzant l'extensió PDO (PHP Data Objects). La informació de connexió (nom de host, nom de la base de dades, nom d'usuari i contrasenya) s'especifica en el bloc try...catch. Si la connexió no es pot establir, mostrarà un missatge d'error.

Defineix paràmetres de paginació. S'estableix que es mostraran 3 usuaris per pàgina, i es determina la pàgina actual en funció d'un paràmetre anomenat pàgina que es passa a través de la URL (utilitzant $_GET). Si no es proporciona la variable pàgina, s'assumeix que la pàgina és la primera (1).

Executa una consulta SQL per a obtenir els usuaris *paginados. La consulta es realitza utilitzant LIMIT per a seleccionar un rang específic d'usuaris basat en la pàgina actual i la quantitat per pàgina. Els resultats s'emmagatzemen en la variable $usuaris en un format de matriu associativa.

Executa una consulta SQL addicional per a obtenir el total d'usuaris en la taula. Això és útil per a calcular la quantitat total de pàgines d'usuaris disponibles.

Tanca la connexió a la base de dades per a alliberar recursos.

Mostra la llista d'usuaris recorrent la matriu $usuaris i mostrant el nom i el correu de cada usuari. Es mostra en un format senzill utilitzant etiquetes HTML.

Calcula la quantitat total de pàgines necessàries per a mostrar tots els usuaris i crea una paginació. Mostra enllaços que permeten navegar entre les pàgines d'usuaris, incloent-hi enllaços "Anterior" i "Següent" quan correspongui.
