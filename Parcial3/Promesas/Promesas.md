# Promesas en Javascript

### ¿Qué es?
Una promesa es un objeto que representa la terminación o el fracaso de una operación asíncrona. 
> **Una promesa es un objeto que representa un valor que puede que esté disponible «ahora», en un «futuro» o que «nunca» lo esté**.

### ¿Cómo crearla?
Con el constructor promise y pasándole una función con dos parámetros, podremos crear una promesa. Los parámetros son _resolve_ y _reject_, que nos deja decirle si ha sido resuelta o rechazada.

const promise = new Promise((resolve, reject) => {
    const number = Math.floor(Math.random() * 12);
        setTimeout(
           () => number > 4
           ? resolve(number)
           : reject(new Error('Menor a 4')),
       2000
    );
});
promise
    .then(number => console.log(number))
    .catch(error => console.error(error));

En el ejemplo hemos creado una promesa que se completará en 2 segundos. Si el número aleatorio que hemos generado es mayor a 4 se resolverá, en caso contrario se rechaza y se muestra un error.

### Estados de una promesa

Existen tres estados posibles para una promesa y estos son:

-   **Pendiente.** De base todas las promesas están pendientes.
-   **Resuelta.** Estará resuelta en el momento que llamemos a  resolve  y a continuación se ejecuta la función que pasamos al método .then. Debemos de tener en cuenta que una vez resuelta no podremos modificar el valor de la promesa, aunque si podríamos correr la misma instrucción para obtener un valor distinto y hacerlo las veces que deseemos.
-   **Rechazada.** Pasará a estar rechazada cuando llamemos a  reject  y obtengamos un error que nos indicará ese rechazo, pasando a continuación a ejecutar la función que pasamos a  .catch.