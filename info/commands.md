### CREATE PROYECT LARAVEL WITH COMPOSER

1. Asegurar compatibilidad de versiones: Composer | PHP | MySQL
2. Comando para crear proyecto laravel:
   ``composer create-project laravel/laravel nombre-proyecto``
3. Configurar archivo variables de entorno '.env' y la base de datos con sus ajustes en la ruta 'config/database.php'
4. Ejecutar migraciones:
   ``php artisan migrate``
5. Volver a generar la 'key' de la aplicación:
   ``php artisan key:generate``
6. Limpiar caché de aplicación:
```   
   php artisan cache:clear
   php artisan config:clear
   php artisan config:cache
```
7. Levantar proyecto en ambiente de desarrollo:
   ``php artisan serve``
