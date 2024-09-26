# PWA Appdad 🚀

![Appdad - Logo](/public/img/logo.svg)

## Descripcion General 📌

El software es abierto para contribuidores pero cerrado para uso y tiene como objetivo automatizar la generación de constancias académicas y proporcionar una plataforma integral para la gestión de eventos, talleres, charlas y la administración académica.

[![Issues][issues-badge]][issues-url]

## Instalacion 📦

`HTTPS`

```bash
  git clone https://github.com/JesusOmarDev1/app-dad.git
```

Para empezar a usar el proyecto:

```bash
  pnpm install
```

Para actualizar cualquier dependencia:

```bash
  pnpm update
```

Para cambiar los estilos de tailwind:

```bash
  npx tailwindcss -i ./src/resources/css/input.css -o ./src/resources/css/output.css --watch
```

Una vez que hayas clonado el repositorio con `SSH` o `HTTPS` tendras que iniciar tu XAMPP y activar el servicio de Apache.

**NOTA:** Ten en cuenta que este software utiliza PHP 8.0.30 y XAMPP 3.3.0

## Requerimientos 💡

- **Automatización de Documentos Academicos:** Implementación de un sistema que permita la generación automática de constancias y certificaciones académicas basadas en las actividades realizadas por los usuarios. Esto incluye la personalización de plantillas y la gestión de datos para asegurar la precisión y validez de los documentos generados.

- **Plataforma Integral de Gestión Académica:** Gestión completa de eventos (actividades por evento), talleres, charlas y administración académica centralizada, incluyendo registro de tickets por eventos y talleres.

- **Autenticación Segura:** Integración de un sistema de autenticación robusto que incluya acceso seguro por usuario mediante contraseñas encriptadas y autenticación adicional mediante Google OAuth 2.0. Esto garantizará la seguridad y protección de los datos sensibles de los usuarios.

- **Gestion de expedientes:** Desarrollo de funcionalidades que permitan el acceso eficiente y la gestión centralizada de constancias y certificaciones emitidas a través de la plataforma. Esto incluye la búsqueda, visualización, y descarga de documentos por parte de los usuarios autorizados.

- **Notificaciones Personalizadas:** Sistema de notificaciones para comunicaciones relevantes sobre eventos, actualizaciones de documentos y otros avisos importantes.

- **Estadísticas y Análisis:** Herramientas analíticas para evaluar la participación, impacto de actividades académicas y generar informes estadísticos.

- **Interfaz Amigable:** Diseño moderno de una interfaz intuitiva y fácil de usar para todos los usuarios, mejorando la experiencia de usuario.

- **Carga Horaria:** Gestión de materias para los alumnos, incluyendo horarios, asignaturas matriculadas y créditos académicos.

- **Proyectos y Oportunidades:** Publicación de oportunidades de investigación o colaboración. Promoción de la colaboración interdisciplinaria y desarrollo profesional.

- **Sistema de Tutorías:** Identificación y comunicación con tutores asignados. Mejora del soporte académico y personal para los estudiantes.

## Beneficios Esperados 🧡

- **Reducción de Errores:** Menor probabilidad de errores y malentendidos respecto a los horarios asignados.

- **Estadísticas y Análisis:** Herramienta analítica para evaluar la participación y el impacto de actividades académicas.

- **Mejor Comunicación:** Notificaciones personalizadas y un historial accesible para todos los usuarios.

- **Gestión de Expedientes:** Acceso y gestión eficientes de constancias y certificaciones emitidas.

## Variables de Entorno 📁

Para ejecutar este proyecto, deberas agregar las siguientes variables de entorno en el archivo **.env.php**

Tienes un ejemplo de las variables de entorno en **.env.example.php**

`DB_HOST` La dirección del servidor de base de datos. Por ejemplo, localhost o la IP del servidor de base de datos.

`DB_NAME` El nombre de la base de datos que estás utilizando.

`DB_USER` El nombre de usuario para conectarse a la base de datos.

`DB_PASS` La contraseña para el usuario de la base de datos.

## Testing 🧪

Estaremos haciendo testing constantemente para que nuestro sistema siempre funcione correctamente sin errores.

## Licencia MIT

[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

## Versiones del Proyecto ⚙️

### 07 de Julio del 2024

[![Version 0.0.2 Beta](https://img.shields.io/badge/Version%200.0.2%20Beta-1e8fff)]

**Caracteristicas:** Implementacion de la arquitectura `MVC (Modelo Vista Controlador)`, creacion de la vista principal, del login y de el panel administrador.

## Retroalimentacion ✨

Si tienes algún comentario, comunicate al privado por github o con nosotros en <garcia.de@alumnos.udg.mx>
