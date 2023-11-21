## Instalar PhpStorm 
[Aquí](https://www.jetbrains.com/phpstorm/download/?source=google&medium=cpc&campaign=EMEA_en_ES_PhpStorm_Branded&term=phpstorm&content=540304431794&gad=1&gclid=EAIaIQobChMIlr65ntTUggMVs0JBAh3xxA14EAAYASABEgIUVPD_BwE#section=windows)

## Descarregar php

https://www.php.net/downloads.php

![image](https://github.com/mmonpeat/DWES/assets/115364869/5699de94-86a0-4fbe-9a39-94290b9fdc64)

![image](https://github.com/mmonpeat/DWES/assets/115364869/4c87ff6d-1e5e-4d84-909c-9f0cc323ed0d)


## Configura el comportament de PHP per s'executar un servidor web.
En els arxius de la instalació de PhpStorm teniem un arxiu anomenat php.ini-develoment llavors cal caanviar-li el nom a php.ini

![imatge](https://github.com/mmonpeat/DWES/assets/115364869/335a0d3d-d2be-4f5e-b8dd-cdec43fee81d)

Entrem en aquest arxiu, la linia 768 la descomentem, per que funcionin les conexions amb bases de dades amb Windows.
Aquestes són les lineas:

![imatge](https://github.com/mmonpeat/DWES/assets/115364869/aa2fabf3-f0de-432d-a4de-4dc47295760f)


LLavors aquesta última li hem tret el ; per descomentar-la.

Descomentem la linea 944, pdo_mysql

![imatge](https://github.com/mmonpeat/DWES/assets/115364869/207d4602-5e3c-4e85-97a6-d15efd87be08)
