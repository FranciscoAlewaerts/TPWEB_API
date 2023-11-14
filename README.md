TPE-WEBII

Trabajo Practico Especial WEB II

Integrantes:

Francisco Alewaerts (franciscoalewaerts@gmail.com) Pedro Suarez (pedrosua2001racing@gmail.com)

Tematica:

Tienda de indumentaria urbana

Descripcion: Crearemos una tienda en linea especializada en ropa urbana. Para llevar a cabo este proyecto, hemos establecido una base de datos en sql denominada "db_ecommerce" con dos tablas. la primera de estas posee los productos en la cual almacena informacion detallada de cada prenda e identificando cada una de estas con un id. por otro lado la segunda tabla que es de categorias registra las categorias de nuestros productos identificandolo de igual manera como en la anterior tabla con un id. Ambas se relacionan mediante un id de cada producto y "id" de la tabla categorias.

ENDPOINTS

	PRODUCTOS

Para listar todos los productos:
GET : productos

Se puede filtrar por categoria. 
Se buscará todos los productos que su categoria sea la recibida por $_GET:

GET : productos?categoria=(id)

Para ordenar los productos por cualquiera de los campos (id, nombre, categoria, precio):
GET : productos?order_by=(campo)

Para ordenar los productos de manera ascendente o descendente (ascendente es el default y siempre tiene prioridad):

GET : productos?asc
GET : productos?ASC

GET : productos?desc
GET : productos?DESC

Para buscar un producto por su ID:
GET : productos/:id

Para agregar un producto:
POST : productos

Ejemplo de body:
    {
		"nombre": "Nike Running",
		"categoria": 12,
		"precio": "12999.00"
	}
Todos los campos son obligatorios.

Para modificar un producto:
PUT : productos/:id

Ejemplo de body:
    {
		"nombre": "Nike Running",
		"categoria": 12,
		"precio": "12999.00"
	}

	CATEGORIAS


Para listar todas las categorias:
GET : categorias

Para ordenar las categorias por cualquiera de los campos (id, nombre):
GET : categorias?order_by=(campo)

Para ordenar las categorias de manera ascendente o descendente (ascendente es el default y siempre tiene prioridad):

GET : categorias?asc
GET : categorias?ASC

GET : categorias?desc
GET : categorias?DESC

Para buscar una categoria por su ID:
GET : categorias/:id

Para agregar una categoria:
POST : categorias

Ejemplo de body:
    {
		"nombre": "Piernas"
	}
Todos los campos son obligatorios.

Para modificar una categoria:
PUT : categorias/:id

Ejemplo de body:
    {
		"nombre": "Piernas"
	}