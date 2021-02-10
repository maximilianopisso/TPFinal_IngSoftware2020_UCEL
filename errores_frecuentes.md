# Documentación de Errores Frecuentes en el Desarrollo
## Objetivo:

En este documento se incluirá en forma de lista, los errores más frecuentes que fueran detectandos en el transcurso del desarrollo del proyecto de software, con el objetivo de que todos los integrantes del proyecto tengan una visión clara de los de los mismos y puedan ser alertados a tiempo para que no vuelvan a ocurrir.
=======
### Errores Frecuentes:

- Se crearon ramas desde features y no sobre develop, no tuvo impacto en el codigo porque lo que hace como integrar en una misma rama dos features distintos, pero dificualta el seguimiento.

- Confusion estado de historias: Una vez terminado la programacion del feature/fix/hotfix se pasa la tarjeta a ready to test y se notifica para que otra persona (team member) haga el testeo, si el que testea encuentra todo bien, deja comentario en la seccion "Actividad" que cumple con lo requerido y recien ahi se hace pull request a la rama correspondiente para mergear y se pasa la tarjeta a Ready to Merge, en caso de que no este bien el desarrollo, se menciona el error encontrado en la misma, se notifica al team member asociado para que revea su programacion y se coloca nuevamente en "in progress".  

- Errores en el nombre de las ramas, se deberian hacer como feature/xxx hemos encontrado que no se usa la / 
-
