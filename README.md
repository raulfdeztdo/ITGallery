<p align="center"><img src="https://static.arteinformado.com/resources/app/docs/organizacion/6/119206/f.itg_new_logo.png" width="350"></p>

# Descripción

Esta es una prueba LAMP para la empresa ITGallery, consiste en el desarrollo de una pequeña API para obtener los datos de la obra (GET) y editarlos (PUT). La API se ha desarrollado bajo el framework de Laravel. Ahora presentaremos los requisitos y los pasos a seguir para la intalación y el uso de esta.

# Requisitos

Los requisitos para la instalación de la API, ya que se requiere un entorno LAMP, serían los siguientes:

-   Servidor Apache o NGINX
-   PHP 8 o superior
-   MYSQL
-   Composer instalado

Para tener los 3 primeros requisitos se puede tener instalado con Docker o paquetes como XAMPP.

# Instalación

Para empezar la instalación tendremos que realizar la clonación del repositorio con

`git clone https://github.com/raulfdeztdo/ITGallery.git`

Creando la carpeta del repositorio en nuestro directorio htdocs o en el directorio donde vayamos a ejecutar nuestra app web.

Una vez hayamos clonado el repositorio con el terminal iremos al directorio de la aplicación y ejecutaremos el composer para cargar las dependencias del proyecto

`composer install`

Ahora estando en el mismo directorio copiaremos el archivo .env.example y a .env y en caso de que exista lo reemplazaremos, en este fichero tenemos la configuración de Laravel y entre ella la configuración de la base de datos, la cual deberemos poner la nuestra en las siguientes variables:

`DB_HOST=localhost`<br>
`DB_DATABASE=base_de_datos`<br>
`DB_USERNAME=user`<br>
`DB_PASSWORD=password`<br>

Continuaremos creando una API Key, cada proyecto de Laravel tiene una única API Key que generaremos ejecutando el siguiente comando en la terminal:

`php artisan key:generate`

Nuestro proyecto tiene una migración para ejecutarla y si la base de datos ha sido configurada correctamente se migrará y se generará la tabla predefinida con los siguientes comandos:

`php artisan migrate --seed`<br>
`php artisan migrate:fresh --seed`

Por último lanzaremos nuestra app web con:

`php artisan serve`<br>
`php artisan up`

Si todo ha ido correctamente se tendría que ver una pantalla como la siguiente:

<p align="center"><img src="https://i.ibb.co/Jjy2tbr/Captura-de-Pantalla-2022-07-12-a-las-0-05-56.png" width="700"></p>


*Se ha intentado seguir la plantilla y hacerse lo más exacto posible, no se ha tenido en cuenta una versión móvil debido al poco tiempo invertido en la prueba*

*Se ha utilizado framework Laravel 9*

*Aunque no se pedía se ha realizado los menus laterales y superiores para que quede más completa*