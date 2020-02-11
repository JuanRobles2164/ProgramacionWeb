
REGLAS PARA LA NOMENCLATURA MANEJADA EN EL PROGRAMA:
Deberá ser en camelCase acompañado del tipo de archivo que represente:
    - Si es un Bean -> nombreDelArchivoBean
    - Si es un Dao -> nombreDelArchivoDao
    - Si es una variable, hay que tener en cuenta qué hace:
        - Es un objeto? objetoEditar, objetoBorrar, objetoPeticion...
        - Es una variable auxiliar? auxiliarTipoDeVariableQueAuxilia (auxiliarArray ó auxArray, por ejemplo).
        - No ponerle nombres minimalistas, como "x" o "a".
    - Comentar todo lo que se haga, pero no línea por línea, sino hacer un breve resumen de lo que hace la función justo encima de ella, por ejemplo:
        /*
            Suma dos números
            Retorna un entero
        */
        public function suma(int num1, int num2){
            return num1+num2;
        }
    - Las funciones sólo deben realizar un único procedimiento, si es muy complejo, es mejor separarlo en varias funciones.

