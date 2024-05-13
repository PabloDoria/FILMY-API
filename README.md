# Filmy API con Laravel 11

Esta es una aplicación construida con Laravel 11 que ofrece consultas a través de una API. Su propósito es permitir el almacenamiento de películas con sus descripciones y otros datos relacionados, así como también personajes asociados a ellas.

## Película

- **GET:** `api/pelicula/{id}`
- **POST:** `api/pelicula?nombre={nombre}&calificacion={calificacion_con_decimal}&fecha_lanzamiento={fecha}&secuela={numero}`
- **PUT:** `api/pelicula/{id}?{campo}={nuevo_valor}`
- **DELETE:** `api/pelicula/{id}`

## Personaje

- **GET:** `api/personaje/{id}`
- **POST:** `api/personaje?nombre={nombre}&pelicula_id={pelicula_id}&descripcion={descripcion}&imagen={imagen_url}`
- **PUT:** `api/personaje/{id}?{campo}={nuevo_valor}`
- **DELETE:** `api/personaje/{id}`
