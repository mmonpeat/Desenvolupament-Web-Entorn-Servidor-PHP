# READEME EXERCICIS
## EX 2, EX 3, EX 7 i EX 9 tenen el seu READEME 
## EX 1
Un while mostrant l'iterador d'aquest.

## EX 4
S'han de declararr sempre com arrays es a dir que s'ha d'escriure $min[0], encara que jo hpo posaria amb l'iterador dins.

## EX 5
Crec que no ho he fet de la forma mes optima/curta pero si d'una forma llegible i clara

## EX 6
fico un total de 10 files i tirem enrrere despres d'haver printejat les 10 primeres rows.
Dins del for del les 10 rows fem un for per el 1r * i printejem tants * segons la fila en la que ens trobem 
2n printejem espais en blan que es la diferencia de rows - row, es a dir si estem a la fila 2, seran (10 - 2) = 8 espais * 4 = 32 espais 
3r una altre vegada els *.
Tot una mica lio la veritat, primer ho multiplicava per 2 per que suposava que si hi ha via 8 espais havia de ser 16 espais, pero no quedava com es suposava pt ho he duplicat.

## EX 8
Una operació facil, he tingut problemes en que no m'he acostumat a que els parametres i les variables van amb $ devant.

## EX 10
Estava utilitzant la funció sort i rsort per a ordenar el array, però aquestes funcions reordenen els elements 
d'un array numèric i no mantenen les claus associades. Per a ordenar un array clau-valor i mantenir les claus associades, has d'utilitzar 
les funcions ksort i krsort per a ordenar per clau o asort i arsort per a ordenar per valor.

La raó per la qual s'utilitza print_r($cap de bestiar) en lloc de tiro "$cap de bestiar" és perquè $cap de bestiar 
és un array i print_r és una funció que s'utilitza per a mostrar estructures de dades complexes, com arrays i objectes, 
d'una manera més llegible i formatada.
Quan utilitzes tiro "$cap de bestiar", estàs tractant d'imprimir un array com una cadena de text, la qual cosa no proporciona 
una representació significativa del contingut del array. En canvi, print_r($cap de bestiar) et mostrarà de manera clara i llegible 
el contingut del array, incloent-hi les seves claus i valors.

## EX 11
Aquesta seria una altre opcio al codi ja fet, en aquest cas no usa str_splplit
function has_lowercase($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_lower($str[$i])) {
            return true;
    return false;
}

if (has_lowercase($str1)) {
    echo "Hi ha alguna minúscula en la cadena 1.</br>";
} else {
    echo "Tot són majúscules en la cadena 1.</br>";
}

## EX 12
Si el resido de la divisio entre 2 és == 0 es que es prim sino significa que s'ha dividit algun cop, per tant no és prim.
