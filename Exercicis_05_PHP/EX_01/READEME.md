## EX_01
Es comença amb una comprovació per veure si ja existeix una cookie anomenada 'visitas'. Aquesta comprovació s'efectua amb la funció 
isset($_COOKIE['visitas']). Si la cookie ja existeix, el seu valor es guarda en la variable $visitas.
Si la cookie 'visitas' no existeix (és a dir, aquesta és la primera vegada que l'usuari visita la pàgina o la cookie ha expirat), 
s'inicialitza la variable $visitas amb el valor 0.

S'incrementa el valor de $visitas, amb  ++.

A continuació, s'actualitza la cookie 'visitas' amb el nou valor de $visitas utilitzant la funció setcookie(). 
La cookie 'visitas' es configura perquè expiri en una hora des del moment actual, utilitzant time() + 3600. 
Això significa que la cookie serà vàlida durant una hora des de l'última visita de l'usuari.
