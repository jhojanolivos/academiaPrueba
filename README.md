## Instrucciones

Para correr el programa se debe seguir el siguiente tutorial:

1. Abrir xampp y ejecutar MySQL y apache
2. Abrir consola del sistema y ejecutar
3. ´cd academia´ 
4. ´composer install´
5. ´cp .env.example .env´
6. ´php artisan key:generate´ 
7. Crear una base de datos llamada *academia* 
8. En el archivo .env, llenar los datos de DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME y DB_PASSWORD
9. ´php artisan migrate´
10. Ejecutar ´php artisan serve´