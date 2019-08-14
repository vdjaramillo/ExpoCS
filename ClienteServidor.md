### ExpoCS
# Patrón Arquitectural Cliente Servidor

**El Servidor:**
Conserva la información del sistema centralizada, es él quién la administra y la distribuye.

**El Cliente:**
sabe sólo lo que necesita saber del sistema, y toda esta información proviene del servidor. También es quien actualiza la información que el servidor posee. Podría decirse que el cliente es la entrada y la salida del sistema

**Ejemplo 1:**
Este ejemplo muestra una interfaz en Java que tiene tres listas las cuales contienen la información de los tres actores principales en un sistema de turismo. Desde y hacia ella fluyen todos los datos en el sistema. 

**Ejemplo 2:**
Este ejemplo tiene una conexión sencilla a un servidor de base de datos y elabora una consulta en ella, luego cierra la conexión. 
