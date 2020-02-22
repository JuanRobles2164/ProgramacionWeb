
-----REGLAS PARA LA NOMENCLATURA MANEJADA EN EL PROGRAMA:-----
Deberá ser en camelCase acompañado del tipo de archivo/acción/objeto que represente:
    - Si es un Bean -> nombreDelArchivoBean
    - Si es un Dao -> nombreDelArchivoDao
    - Si es una vista -> nombreDeLaVistaView
    - Si es un PDF ->  accionOTipoDeReportePDF : reporteDocenteCantidadAlumnosPDF (Por ejemplo)
    - Si es una variable, hay que tener en cuenta qué hace:
        - Es un objeto? -> objetoEditar, objetoBorrar, objetoPeticion...
        - Es una variable auxiliar? -> auxiliarTipoDeVariableQueAuxilia (auxiliarArray ó auxArray, por ejemplo).
        - No ponerle nombres minimalistas, como:
            -> "x" 
            -> "a"
    - Comentar todo lo que se haga, pero no línea por línea, sino hacer un breve resumen de lo que hace la función justo encima de ella, por ejemplo:
        /*
            Suma dos números
            Retorna un entero
        */
        public function suma(int num1, int num2){
            return num1+num2;
        }
    - Las funciones sólo deben realizar un único procedimiento, si es muy complejo, es mejor separarlo en varias funciones.
Muchas veces tener dos nombres de variables identicos, en JavaScript (o php), hace que este genere errores



-----REGLAS PARA LA ADMINISTRACIÓN DE ARCHIVOS:-----

En lo posible, no editar los archivos generados (O en proceso de edición) de otros compañeros
Pues esto puede generar conflicto con el git
Si es estrictamente necesario hacer un cambio, entonces contactar a sus compañeros
Y solicitar un cambio en las partes del archivo que necesiten.

No borrar archivos de otros compañeros; ocurren problemas similares al anterior punto


-----REGLAS PARA LOS RESUMENES POR PUSH EN EL GIT:-----

En el campo de "summary", el que se va a ver a simple vista en las columnas del repositorio
No debe tener una longitud superior a 7 palabaras
Ser tan objetivos y claros como sea posible

No poner cosas como: 
    -> update funciones.js 
    -> 12/02 - 1
    -> update
    -> XD (o cualquier otro nombre "troll")
Pues estas ambigüedades no proporcionan información sobre lo que trabajaron en ese archivo
Además de retrasar el desarrollo del proyecto.

Y en el recuadro inferior, ser tan específicos como deseen, pues no tiene un límite de chars
además de que para eso es, para "soltarse".


Recomiendo no hacer más de 3 push al repositorio al día por equipo/persona
Para que al manejar el control de versiones, sea todo más sencillo

------- CUESTIONES DE SOPORTE Y AYUDA DIRECTA EN EL CPANEL -------
escribir al correo: jrobles4@udi.edu.co
con el asunto "Electiva II -----" y reemplazan los guiones por lo que necesiten solucionar
 * Si es de las vistas -> Electiva II Views
 * Si es un cambio en la Base de Datos -> 'Electiva II Base de Datos' ó 'Electiva II BD'

Es todo, por ahora.

¡a trabajar!

