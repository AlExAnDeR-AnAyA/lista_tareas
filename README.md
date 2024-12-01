<<<<<<< HEAD
Task Manager (Gestor de Tareas)

Descripción

Este es un proyecto de **Gestor de Tareas** desarrollado con Laravel como framework backend y Vue.js en el frontend. 
El proyecto permite a los usuarios crear, ver y gestionar tareas. 
La aplicación está pensada para ser ejecutada en un entorno local utilizando **XAMPP** y no está preparada para producción.

1. Requisitos

Para ejecutar este proyecto localmente, necesitas tener instalado:

- XAMPP: Para configurar el servidor local.
- PHP: La versión recomendada es PHP 8.0 o superior.
- Composer: Para gestionar las dependencias de Laravel.
- Node.js y NPM: Para gestionar el frontend con Vue.js.

2. Configuración de entorno
Asegúrate de tener XAMPP instalado y ejecutándose. Luego, sigue estos pasos:

Configura el archivo .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=


3. Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

- Instalar dependencias de PHP: Abre la terminal en el directorio del proyecto y ejecuta:
composer install

- Generar la clave de la aplicación:
php artisan key:generate

- Crear la base de datos: Usa el panel de XAMPP para abrir phpMyAdmin y crea una base de datos llamada task_manager
  
- Ejecuta las migraciones de la base de datos para crear las tablas necesarias:
php artisan migrate

- Instalar dependencias de Node.js: Si aún no has instalado las dependencias de Node.js, ejecuta el siguiente comando:
npm run dev

- Inicia el servidor de desarrollo de Laravel:
php artisan serve
Accede a la aplicación en tu navegador a través de http://127.0.0.1:8000.

Uso
Crear una tarea: Puedes crear nuevas tareas desde el formulario en la interfaz de usuario.
Ver tareas: Las tareas se listarán en la página principal con su estado de completado.

4. Estructura de Carpetas
/task-manager
|-- /app
|-- /database
|-- /resources
|   |-- /js
|   |-- /views
|-- /routes
|-- /storage
|-- /tests
|-- /vendor
|-- .env
|-- .gitignore
|-- composer.json
|-- package.json
|-- README.md


5. Imagenes de la Interfaz de Usuario:

![Base De Datos](![Task_manager](https://github.com/user-attachments/assets/aab262b8-85c5-4066-802b-39be3b893fab)
![Usuarios Registrados](![Task_manager_01](https://github.com/user-attachments/assets/7bde0655-8245-447b-94f3-2a57a7ee09ac)
![Interfaz Principal](![Task_manager_02](https://github.com/user-attachments/assets/66db6430-0bcf-44de-9f34-d38a723f03aa)
![Interfaz de Registro](![Task_manager_03](https://github.com/user-attachments/assets/7f94567e-7f93-4a99-8fc7-6f0c4b0c217a)
![Interfaz de Login](![Task_manager_04](https://github.com/user-attachments/assets/bd664c55-581d-4311-9339-1f81a1da2240)
![Interfaz para agregar la tarea](![Task_manager_05](https://github.com/user-attachments/assets/d03bf20f-4d23-46ec-b32b-e6ba5bc181ae)

6. Nota:
El proyecto no se alcanzó a terminar por falta de conocimientos en Laravel y sus diferentes aplicaciones ya que en le
tecnólogo que estamos realizando en Análisis y Desarrollo de Software en el SENA, solo vimos conocimientos Básicos de HTML, JavaScript.
El  proyecto se realizo en base a información consultada de la red y documentación.

 


