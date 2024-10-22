# WORKSHOP 2

## Paso 1: Iniciar el servidor web (Vagrant)
- Ingresamos a la carpeta donde tenemos el webserver configurado.
- Ejecutamos el siguiente comando para iniciar la máquina virtual:

    ```bash
    vagrant up
    ```

- Luego, accedemos a la terminal de la máquina virtual con:

    ```bash
    vagrant ssh
    ```

---

## Paso 2: Cambiar el **hostname** de la máquina virtual
- Cambiamos el hostname usando los comandos correspondientes.
- Para confirmar el cambio, mostramos la siguiente captura:

    ![Paso 1](../VMs/imagenes%20guia/1.png)

---

## Paso 3: Editar el archivo `hosts`
- Editamos el archivo `hosts` en la máquina virtual para asignarle el nombre `webserver`.
- Puedes ver el proceso en esta captura:

    ![Paso 2](../VMs/imagenes%20guia/2.png)

---

## Paso 4: Actualizar la lista de paquetes
- Actualizamos la lista de paquetes ejecutando el siguiente comando:

    ```bash
    sudo apt update
    ```

    ![Paso 3](../VMs/imagenes%20guia/3.png)

---

## Paso 5: Instalar Vim, cURL, Apache2, MySQL y PHP
- Instalamos todo el software esencial con un solo comando:

    ```bash
    sudo apt install vim curl apache2 mysql-server php libapache2-mod-php php-mysql
    ```

    ![Paso 4](../VMs/imagenes%20guia/4.png)

---

## Paso 6: Editar el archivo `hosts` en Windows
- Abrimos la terminal **cmd** en modo administrador para tener permisos.
- Editamos el archivo `hosts` en Windows con el siguiente contenido:

    ```bash
    192.168.56.10 joseph.isw811.xyz
    ```

    ![Paso 5](../VMs/imagenes%20guia/5.png)

---

## Paso 7: Acceder al dominio en el navegador
- Abrimos un navegador en **modo incógnito** y accedemos al siguiente URL:

    ```url
    http://joseph.isw811.xyz
    ```

    ![Paso 6](../VMs/imagenes%20guia/6.png)

---

## Paso 8: Habilitar módulos de Apache para hosts virtuales
- Habilitamos los módulos necesarios para soportar **hosts virtuales**:

    ```bash
    sudo a2enmod rewrite
    ```

    ![Paso 8](../VMs/imagenes%20guia/8.png)  
    ![Paso 9](../VMs/imagenes%20guia/9.png)

---

## Paso 9: Sincronizar una carpeta local
- Creamos una carpeta local en nuestra máquina y la sincronizamos con la carpeta `/home/vagrant/sites` en la máquina virtual.

    ![Paso 10](../VMs/imagenes%20guia/10.png)

---

## Paso 10: Reiniciar la máquina virtual
- Luego de realizar los cambios necesarios, reiniciamos la máquina virtual con:

    ```bash
    vagrant reload
    ```

    ![Paso 11](../VMs/imagenes%20guia/11.png)

---

## Paso 11: Crear un archivo `.conf` para el sitio web
- Creamos un archivo de configuración `.conf` para el sitio `joseph.isw811.xyz`:

    ```bash
    <VirtualHost *:80>
        ServerName joseph.isw811.xyz
        DocumentRoot /home/vagrant/sites/joseph.isw811.xyz
    </VirtualHost>
    ```

    ![Paso 12](../VMs/imagenes%20guia/12.png)

---

## Paso 12: Copiar el archivo `.conf` a `sites-available`
- Copiamos el archivo de configuración a la carpeta `sites-available` de Apache:

    ![Paso 14](../VMs/imagenes%20guia/14.png)

---

## Paso 13: Verificar la configuración
- Comprobamos que todo esté bien y que la salida sea `Syntax OK`:

    ![Paso 15](../VMs/imagenes%20guia/15.png)

- Si aparece la advertencia: **Could not reliably determine the server's fully qualified domain name**, ejecutamos el siguiente comando para solucionarlo:

    ![Paso 16](../VMs/imagenes%20guia/16.png)

- Ejecutamos el comando hasta que solo salga `Syntax OK`:

    ![Paso 17](../VMs/imagenes%20guia/17.png)

---

## Paso 14: Reiniciar Apache
- Finalmente, reiniciamos Apache para que los cambios tomen efecto:

    ```bash
    sudo systemctl restart apache2
    ```

    ![Paso 18](../VMs/imagenes%20guia/18.png)

---

## Paso 15: Confirmación final
- Verificamos que todo funcione correctamente accediendo de nuevo al sitio:

    ![Paso 19](../VMs/imagenes%20guia/19.png)

---


