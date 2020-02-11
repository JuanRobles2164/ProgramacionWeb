En la sección de controladores, van todo lo relacionado a los archivos Php
que tengan acceso con la base de datos y controlen vistas

Usualmente recomiendo subdividir los controladores en dos tipos:
- Beans: Retornan las vistas y administran el control de los datos 
    desde el lado del usuario. Esto significa, ellos toman peticiones
    del tipo que necesiten (POST, GET, PUT O DELETE según el caso) además de que
    tienen un mayor contacto con los Models.
- DAOs: Se encargan de ejecutar acciones en la base de datos
    Como los CRUD de los Models y demás datos.


