Aplicación de Gestión de Alumnos y Docentes (TUP - Programación IV)

Integrantes:
Rodríguez, Belén
Benitez, Dario

Este proyecto es una aplicación web desarrollada en Laravel 12 que gestiona usuarios con dos roles simples: administrador (docente) y alumno. El sistema permite a los administradores ver un listado de todos los usuarios registrados, mientras que los alumnos pueden ver y modificar su propio perfil.


Requerimientos Técnicos

Framework: Laravel 12 


Base de Datos: MySQL 


Autenticación: Laravel Breeze (Blade) 


Frontend: TailwindCSS 

Guía de Instalación y Uso
Sigue estos pasos para instalar y ejecutar el proyecto en un entorno de desarrollo local.

1. Prerrequisitos
PHP 8.2+

Composer

Node.js y NPM

Un servidor de base de datos MySQL

2. Instalación
a. Clonar el repositorio

Bash

git clone https://github.com/endbel/P4-docente-alumno.git
cd nombre-del-proyecto
b. Instalar dependencias
Instala las dependencias de PHP con Composer y las de JavaScript con NPM.

Bash

composer install
npm install
c. Configurar el Entorno
Copia el archivo de ejemplo .env.example para crear tu propio archivo de configuración de entorno.

Bash

cp .env.example .env
Abre el archivo .env y configura las credenciales de tu base de datos MySQL.

Fragmento de código

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=docentes_alumnos
DB_USERNAME=root
DB_PASSWORD=
También puedes configurar el prefijo de país para los enlaces de WhatsApp.

Fragmento de código

WHATSAPP_CC=54
d. Generar la Clave de la Aplicación

Bash

php artisan key:generate
e. Crear la Base de Datos
Asegúrate de haber creado una base de datos vacía en MySQL con el nombre que especificaste en el archivo .env (docentes_alumnos).

f. Ejecutar las Migraciones
Este comando creará todas las tablas necesarias en tu base de datos.

Bash

php artisan migrate
g. Generar Datos Iniciales (Seeders)
Este comando creará el usuario administrador por defecto.


Bash

php artisan db:seed --class=AdminUserSeeder
h. Crear el Enlace Simbólico de Almacenamiento
Para que las fotos de perfil subidas sean visibles públicamente.

Bash

php artisan storage:link
i. Compilar los Assets

Bash

npm run dev
j. Iniciar el Servidor

Bash

php artisan serve
La aplicación estará disponible en http://127.0.0.1:8000.

3. Flujo de Uso 

a. Administrador (Docente)



Credenciales:

Email: admin@utn.com

Contraseña: password (o la que hayas definido en AdminUserSeeder.php)

Inicia sesión con las credenciales de administrador.

Accede al listado de usuarios a través del enlace "Admin Usuarios" en el menú de navegación para ver a todos los alumnos registrados.

b. Alumno

Regístrate como un nuevo usuario en la ruta /register. Deberás proporcionar un nombre, email, contraseña y una foto de perfil obligatoria.


Una vez registrado, puedes acceder a tu perfil a través del menú desplegable de tu nombre y seleccionar "Mi Perfil".

Desde tu perfil, puedes actualizar tu número de teléfono y tu enlace profesional.