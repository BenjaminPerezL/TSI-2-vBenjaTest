<!-- instalar laravel/levantar pagina con artisan:

    0) tener todo bajado, php, laravel, composer, xamp
    1)bajar repositorio
    2) comando en consola vscode: cp .env.example .env //para copiar y crear archivo .env que falta
    *) dentro de archivo .env le cambias el nombre de la bd a tsi2: DB_DATABASE=tsi2
    **) en phpmyadmin tienes que importar el archivo de la bd (sqltextfile q te mande), le pinchas a servidor, luego a importar y **) le agregas el archivo, para que quede en la raiz del servidor phpmyadmin local
    3) comando en consola vscode: composer install
    //actualiza paquetes
    4) comando en consola vscode: php artisan key: generate // crea credenciales de sesion
    5)y comando en consola vscode: php artisan serve // levanta la pagina para poder accederla -->



<!-- instalar full calendar:

    1)instalar nodejs y agregar a las variables de entorno de usuario la ruta de la carpeta nodejs
    2) en terminal vscode, 'npm install' (*PUEDE q se ponga pesado y tengas q reiniciar dps de paso 1, se demora) 3)'npm run dev', luego ctrl+c
    4) en fullcalendar.io:
    > javascript > learn more
    >>Initializing with script tags >> CDN: jsdelivr
    5) aqui agregamos a master (en dd estara calendario) lo siguiente:
    -main.min.js copiar como html y pegar como script, arriba
    -main.css : copiar como html y pegar como script, mas arriba q el anterior -locales.all.js: copiar como html y pegar como script, arriba
    6) en public/js agregar archivo 'agenda.js'
    7)al final del body del master (en dd estara calendario) lo siguiente: <script src="{{ asset('js/agenda.js')}}" defer></script>
    8) en el body del view donde estara el calendario:
    agregamos un div container y dentro de este otro div id=agenda
    9) copiamos el script que aparece mas abajo del punto 4) >>Initializing with script tags, y lo ponemos en agenda.js
    document.addEventListener("DOMContentLoaded', function() {
    //busca el div para poner la agenda
    var calendarEl = document.getElementById('agenda');
    //dar funciones al calendario
    var calendar = new FullCalendar.Calendar (calendarEl, { initialView: 'dayGridMonth'
    });
    //mostrar calendario
    calendar.render();
    }); -->

