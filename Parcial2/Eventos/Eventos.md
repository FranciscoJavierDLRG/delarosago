# Propagación y captura
![](https://es.javascript.info/article/bubbling-and-capturing/eventflow.svg)
### Cuando ocurre un evento, el elemento más anidado dónde ocurrió se reconoce como el “elemento objetivo” (event.target).

- Luego el evento se mueve hacia abajo desde el documento raíz hacia event.target, llamando a los manejadores en el camino asignados con addEventListener(..., true) (true es una abreviación para {capture: true}).
- Luego los manejadores son llamados en el elemento objetivo mismo.
- Luego el evento se propaga desde event.target hacia la raíz, llamando a los manejadores que se asignaron usando on<event>, atributos HTML y addEventListener sin el 3er argumento o con el 3er argumento false/{capture:false}.

### Cada manejador puede acceder a las propiedades del objeto event:

* **event.target** – el elemento más profundo que originó el evento.
* **event.currentTarget (=this)** – el elemento actual que maneja el evento (el que tiene al manejador en él)
* **event.eventPhase** – la fase actual (captura=1, objetivo=2, propagación=3).
---
![](https://arielfuggini.com/static/900b89115a28553a63cdffd0a7afc922/737c3/15_01.png)
Cualquier manejador de evento puede detener el evento al llamar event.stopPropagation(), pero no es recomendado porque no podemos realmente asegurar que no lo necesitaremos más adelante, quizá para completar diferentes cosas.
La fase de captura raramente es usada, usualmente manejamos los evento en propagación. Y hay una lógica atrás de eso.
En el mundo real, cuando un accidente ocurre, las autoridades locales reaccionan primero. Ellos conocen mejor el área dónde ocurrió. Luego, si es necesario, autoridades de alto nivel.
Lo mismo para los manejadores de eventos. El código que se prepara en el manejador de un elemento en particular conoce el máximo de detalles sobre el elemento y qué hace. Un manejador en un <td> particular puede ser adecuado para ese exacto <td>, conocer todo sobre él, entonces debe tener su oportunidad primero. Luego su padre inmediato también conoce sobre el contexto, pero un poco menos, y así sucesivamente hasta el elemento de arriba que maneja conceptos generales y se ejecuta al final.
La propagación y captura ponen los cimientos para “delegación de eventos”: un extremadamente poderoso patrón de manejo de eventos que se estudia en el siguiente capítulo.