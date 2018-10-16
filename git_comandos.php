1. Comando para cambiar nombre:
    git config --global user.name "nombre"

2. Comando para cambiar correo:
    git config --global user.emal "correo"

3. Comando para colocar los colores:
    git config --global color.ul true

4. Inicializar un repositorio
    git init

5. Visalizar estados de los archivos
    git status

6. Comando para indicar que archivos estan listos
    git add (para agregar 1)
    git add -A (para agregar todos los archivos)

7. Comando para guardar cambios en los archivos
    git commit -m "mensaje para identificar el cambio realizado"

8. Comando para visualizar los commits realizados
    git log

9. Comando para regresar a commmits anteriores o versiones anteriores.
    git checkout "nombre del commmit" (sin comillas)

10. Comando para matar los commits
    git reset --soft (no toca el codigo)
    git reset --mixed (borra el "staging area" sin tocar el "working area")
    git reset --hard (Borra todo)

11. Comando para guardar los commits en un archivo txt
    git log > commits.txt

12. Comando para mostrar las ramas
    git branch

13. Comando para crear ramas
    git branch 'nombre de la rama' (sin comillas)

14. Comando para fusionar ramas
    git merge "nombre de la rama" (sin comillas)

15. Comando para cambiar de rama
    git checkout "nombre de la rama" (sin comillas)

16. Comando para clonar proyectos
    git clone (Se necesita una clave que se obtiene por el Github)

17. Comando para vincular un repositorio local conel remoto que esta en Github
    git remote (se necesita una clave o link que se obtine en Github)

18. Comando para ver el repositorio cargado a Github
    git remote -b

19.Comando para eliminar o desvincular el repositorio local y remoto
    git remote remove

20. 

* Comandos de consola

1. Moverse entre carpetas
    cd /path(ruta)

2. Listar archivos de un directorio
    ls

3. Borrar archivos
    rm 