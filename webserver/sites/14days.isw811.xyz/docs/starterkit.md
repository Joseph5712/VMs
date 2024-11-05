
Guía para la Configuración de un Proyecto Laravel 11

Paso 1: Crear el Proyecto Laravel
--------------------------------
1. Utiliza Composer para crear el proyecto Laravel en la ubicación deseada:
   
   ```bash
   composer create-project laravel/laravel starterkit.isw811.xyz
   ```

Paso 2: Configuración de la Base de Datos en la Máquina Virtual
---------------------------------------------------------------
1. Ingresa a MySQL y crea la base de datos con privilegios adecuados.

   ```sql
   CREATE DATABASE starterkit;
   GRANT ALL PRIVILEGES ON starterkit.* TO 'laravel'@'localhost' IDENTIFIED BY 'secret';
   FLUSH PRIVILEGES;
   QUIT;
   ```

Paso 3: Configurar el Entorno en Laravel
----------------------------------------
1. Ingresa al directorio del proyecto y abre el archivo `.env` para configurarlo:

   ```bash
   cd starterkit.isw811.xyz
   vim .env
   ```

2. En el archivo `.env`, configura los parámetros de conexión a la base de datos:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=starterkit
   DB_USERNAME=laravel
   DB_PASSWORD=secret
   ```

Paso 4: Ejecutar Migraciones
----------------------------
1. Crea las tablas necesarias en la base de datos ejecutando las migraciones:

   ```bash
   php artisan migrate
   ```

Paso 5: Configurar el Dominio en Apache
---------------------------------------
1. Habilita el sitio y verifica la configuración de Apache con los siguientes comandos:

   ```bash
   sudo a2ensite starterkit.isw811.xyz.conf
   sudo apache2ctl -t
   ```

2. Finalmente, recarga Apache para aplicar los cambios:

   ```bash
   sudo systemctl reload apache2
   ```
