# Propiedades de flexbox
Un contenedor flexbox (Caja Flexible) nos proporciona propiedades para de alinear cajas dentro de el y distribuir el espacio entre ellas
Al declarar un contenedor padre como flex, le damos la habilidad de modificar el tamaño y el orden de sus contenedores hijos pudiendo expanderlos para ocupar todo el espacio disponible o bien encogerlos para que no se desborden.

> Existen propiedades para el padre (flex-container) y propiedades para los hijos (flex-items)
  
## Propiedades para el contenedor (padre)
Número |Propiedad|¿Qué hace?|Valores|
|-|-|-|-
1|display|Declarar un contenedor|flex, inline-flex
2|flex-direction|Establece el eje principal|row, row-reverse, column, column-reverse
3|flex-wrap|Limitaciones de desbordamiento|no-wrap, wrap, wrap-reverse
4|flex-flow|Abreviación de flex-direction y flex-wrap|row-nowrap
5|justify-content|Alineación en el eje principal|flex-start, flex-end, center, space-between, space-evenly
6|align-items|Acomoda los hijos en el eje perpendicular al principal|stretch, flex-start, flex-end, center, baseline

## Propiedades para el elemento (hijo)
Número|Propiedad|¿Qué hace?|Valores|
|-|-|-|-
1|order|Controla el orden en que se desplegarán los hijos|0-n
2|flex-grow|Establece la habilidad del hijo para crecer|1-n
3|flex-shrink|Establece la habilidad del hijo para encogerse|1-n
4|flex-basic|Tamaño default para un elemento antes de que el espacio restante sea distribuido|auto, content
5|flex|Abreviación para flex-grow, flex-shrink y flex-basis|Los correspondientes a cada propiedad