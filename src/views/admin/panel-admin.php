<!doctype html>
<html lang="es-MX" class="antialiased">

<head>
  <meta charset="UTF-8" />
  <!-- ========== DEFAULT ========== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../../public/favicon.ico" type="image/x-icon" />
  <!-- ========== RESOURCES ========== -->
  <link rel="stylesheet" href="../../resources/css/output.css" />
  <!-- ========== SEO ========== -->
  <title>Panel Administrador | Appdad</title>
</head>

<body class="flex items-center justify-center w-full overflow-hidden">
  <!-- ========== MAIN CONTENT ========== -->
  <main class="flex w-full">
    <!-- ========== DESKTOP SIDEBAR ========== -->
    <aside id="admin-sidebar" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] bg-white border-e border-gray-200 overflow-y-auto w-80 max-h-dvh [&::-webkit-scrollbar]:w-0 [&::-webkit-scrollbar-thumb]:rounded-full [--has-autofocus:false] [&::-webkit-scrollbar-track]:bg-terciary-50 [&::-webkit-scrollbar-thumb]:bg-terciary-100 shadow-lg">
      <div class="w-full p-4">
        <header>
          <nav class="flex flex-col py-4">
            <!-- ========== SIDEBAR BODY ========== -->
            <div class="flex flex-col items-center justify-between">
              <!-- ========== LOGO ========== -->
              <div class="flex items-center justify-center w-full h-auto">
                <img class="object-cover w-auto h-28 aspect-auto" src="../../../public/img/logo.webp" alt="Logo | Appdad" decoding="async" loading="lazy" title="Logo | Appdad" aria-label="Logo | Appdad">
              </div>
              <!-- ========== GROUP NAVIGATION ========== -->
              <div class="w-full hs-accordion-group" data-hs-accordion-always-open="">
                <!-- ========== NAVIGATION ========== -->
                <div class="hs-accordion active" id="hs-basic-always-open-heading-one">
                  <!-- ========== SIDEBAR TRIGGER ========== -->
                  <button disabled class="inline-flex items-center justify-between w-full py-3 font-semibold tracking-wider rounded-lg text-terciary-950 hs-accordion-toggle gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                    NAVEGACION
                    <svg class="block stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <svg class="hidden stroke-terciary-500 hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m18 15-6-6-6 6"></path>
                    </svg>
                  </button>
                  <!-- ========== SIDEBAR LINKS ========== -->
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <ul class="flex flex-col gap-2 py-2">
                      <!-- ========== INICIO | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-bold border rounded-lg shadow-md text-primary-500 border-primary-500 bg-primary-100" href="./panel-admin.php" title="Inicio | Panel Admin" aria-label="Inicio | Panel Admin" aria-current="page">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                          </svg>
                          Inicio</a>
                      </li>
                      <!-- ========== USUARIOS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./usuarios-admin.php" title="Usuarios | Panel Admin" aria-label="Usuarios | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                          </svg>
                          Usuarios</a>
                      </li>
                      <!-- ========== NOTIFICACIONES | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./notificaciones-admin.php" title="Notificaciones | Panel Admin" aria-label="Notificaciones | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                          </svg>
                          Notificaciones</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- ========== DOCUMENTATION ========== -->
                <div class="hs-accordion" id="hs-basic-always-open-heading-two">
                  <!-- ========== SIDEBAR TRIGGER ========== -->
                  <button disabled class="inline-flex items-center justify-between w-full py-3 font-semibold tracking-wider rounded-lg text-terciary-950 hs-accordion-toggle gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                    DOCUMENTACION
                    <svg class="block stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <svg class="hidden stroke-terciary-500 hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m18 15-6-6-6 6"></path>
                    </svg>
                  </button>
                  <!-- ========== SIDEBAR LINKS ========== -->
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                    <ul class="flex flex-col gap-2 py-2">
                      <!-- ========== CONSTANCIAS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./constancias-admin.php" title="Constancias | Panel Admin" aria-label="Constancias | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                          </svg>
                          Constancias</a>
                      </li>
                      <!-- ========== EXPEDIENTE | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./expediente-admin.php" title="Expediente | Panel Admin" aria-label="Expediente | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                          </svg>
                          Expediente</a>
                      </li>
                      <!-- ========== RECURSOS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./recursos-admin.php" title="Recursos | Panel Admin" aria-label="Recursos | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                          </svg>
                          Recursos</a>
                      </li>
                      <!-- ========== ESTADISTICAS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./estadisticas-admin.php" title="Estadisticas | Panel Admin" aria-label="Estadisticas | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                          </svg>
                          Estadisticas</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- ========== ACADEMIC ========== -->
                <div class="hs-accordion" id="hs-basic-always-open-heading-three">
                  <!-- ========== SIDEBAR TRIGGER ========== -->
                  <button disabled class="inline-flex items-center justify-between w-full py-3 font-semibold tracking-wider rounded-lg text-terciary-950 hs-accordion-toggle gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                    GESTION ACADEMICA
                    <svg class="block stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <svg class="hidden stroke-terciary-500 hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m18 15-6-6-6 6"></path>
                    </svg>
                  </button>
                  <!-- ========== SIDEBAR LINKS ========== -->
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                    <ul class="flex flex-col gap-2 py-2">
                      <!-- ========== CARGA HORARIA | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./carga-horaria.php" title="Carga Horaria | Panel Admin" aria-label="Carga Horaria | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                          </svg>
                          Carga Horaria</a>
                      </li>
                      <!-- ========== CURSOS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./cursos-admin.php" title="Cursos | Panel Admin" aria-label="Cursos | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                          </svg>
                          Cursos</a>
                      </li>
                      <!-- ========== PROYECTOS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./proyectos-admin.php" title="Recursos | Panel Admin" aria-label="Recursos | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                          </svg>
                          Proyectos</a>
                      </li>
                      <!-- ========== EVENTOS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./eventos-admin.php" title="Estadisticas | Panel Admin" aria-label="Estadisticas | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                          </svg>
                          Eventos</a>
                      </li>
                      <!-- ========== TUTORIAS | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./tutorias-admin.php" title="Estadisticas | Panel Admin" aria-label="Estadisticas | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                          </svg>
                          Tutorias</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- ========== ACCOUNT ========== -->
                <div class="hs-accordion" id="hs-basic-always-open-heading-four">
                  <!-- ========== SIDEBAR TRIGGER ========== -->
                  <button disabled class="inline-flex items-center justify-between w-full py-3 font-semibold tracking-wider rounded-lg text-terciary-950 hs-accordion-toggle gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                    CUENTA
                    <svg class="block stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <svg class="hidden stroke-terciary-500 hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m18 15-6-6-6 6"></path>
                    </svg>
                  </button>
                  <!-- ========== SIDEBAR LINKS ========== -->
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                    <ul class="flex flex-col gap-2 py-2">
                      <!-- ========== AJUSTES | PANEL ADMIN ========== -->
                      <li>
                        <a class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-primary-500 text-terciary-500" href="./ajustes-perfil-admin.php" title="Carga Horaria | Panel Admin" aria-label="Carga Horaria | Panel Admin">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>
                          Ajustes</a>
                      </li>
                      <!-- ========== CERRAR SESION | PANEL ADMIN ========== -->
                      <li>
                        <form id="LogoutForm" action="" enctype="" method="" role="" title="" aria-label="">
                          <button type="submit" class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-red-500 text-terciary-500" href="./cursos-admin.php" title="Cursos | Panel Admin" aria-label="Cursos | Panel Admin">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>
                            Cerrar Sesion</button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                  <!-- ========== SUPPORT ========== -->
                  <article class="flex flex-col items-center justify-center w-full h-auto gap-2 p-4 text-center border rounded-lg hover:shadow-md">
                    <div class="flex flex-col items-center justify-center gap-1">
                      <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="0 0 694.85 597.05">
                        <path d="m395.84,593.88h-194.56c-25.35,0-45.97-20.62-45.97-45.97V45.97c0-25.35,20.62-45.97,45.97-45.97h194.56c25.35,0,45.97,20.62,45.97,45.97v501.93c0,25.35-20.62,45.97-45.97,45.97Z" fill="#2f2e43" stroke-width="0" />
                        <path d="m396.04,581.47h-194.95c-19.02,0-34.5-15.48-34.5-34.5V44.08c0-19.02,15.48-34.5,34.5-34.5h194.95c19.02,0,34.5,15.48,34.5,34.5v502.89c0,19.02-15.48,34.5-34.5,34.5Z" fill="#fff" stroke-width="0" />
                        <path d="m329.01,42.3h-62.04c-7.15,0-12.97-5.82-12.97-12.97s5.82-12.97,12.97-12.97h62.04c7.15,0,12.97,5.82,12.97,12.97s-5.82,12.97-12.97,12.97Z" fill="#2f2e43" stroke-width="0" />
                        <path d="m339.95,249.79l-19.28-15s-22,6.86-22.57,7.14-34.15,78.16-34.15,78.16c0,0,86.02,44.02,79.73,39.73-6.29-4.28-4.99-62.3.86-69.87,5.87-7.58.86-26.58.86-26.58l-5.43-13.57h-.03Z" fill="#2f2e43" stroke-width="0" />
                        <polygon points="286.64 284.88 312.79 284.88 312.79 326.36 283.96 316.89 286.64 284.88" fill="#f3a3a6" stroke-width="0" />
                        <path d="m343.51,383.13c-3.84,1.59-7.79,2.97-11.84,4.12-9.7,2.78-19.95,4.25-30.52,4.25-9.26,0-18.26-1.13-26.87-3.28-3.04-.75-6.03-1.63-8.95-2.63-3.69-1.26-7.29-2.69-10.8-4.33l1.67-8.16,4.41-21.6,5.17-25.24.96-4.75,2.29-11.19.03-.14h52.3l.03.1,13.94,45.86,5.83,19.21,2.36,7.79Z" fill="#1e8fff" stroke-width="0" />
                        <path d="m361.34,373.8c-5.61,3.63-11.58,6.76-17.83,9.33-3.84,1.59-7.79,2.97-11.84,4.12l-1.9-7.89-7.11-29.51-9.57-39.66h.01s.92-.02,2.48-.02c1.46,0,3.47.02,5.8.1,5.59.2,12.98.77,18.76,2.27,4.46,1.15,7.96,2.86,8.96,5.37.99,2.49,5.12,21.57,10.46,47.35.58,2.78,1.16,5.62,1.77,8.54Z" fill="#1e8fff" stroke-width="0" />
                        <circle cx="309.21" cy="267.63" r="28.72" fill="#f3a3a6" stroke-width="0" />
                        <path d="m344.99,262.36v.04l-7.04,1.21c-.38-1.55-.81-2.99-1.25-4.31-.54-1.6-1.11-3.04-1.71-4.33-1.53-3.28-3.25-5.58-5.01-7.17-6.61-5.99-13.93-2.01-14.9-2.21-1.28-.26-18.53,18.46-20.74,39.28-.23,2.31-.29,4.65-.12,7,.01.09.01.17.01.26.46,7.1-2.03,13.05-5.7,17.88-.04.05-.08.1-.12.15-1.3,1.7-2.76,3.26-4.27,4.69-4.36,4.08-9.28,7.05-12.95,8.93-2.83,1.46-4.91,2.27-5.42,2.46-.08.03-.12.04-.12.04,0,0-4.67,8.77-5.04,25.2-.15,6.89.45,15.12,2.46,24.62.42,1.98.89,4,1.44,6.08.3,1.15.58,2.29.82,3.39-3.69-1.26-7.29-2.69-10.8-4.33-2.8-1.29-5.52-2.69-8.18-4.21-2.43-1.37-4.81-2.84-7.12-4.4,1.22-2.91,2.4-5.45,3.43-7.46.7-1.37,1.33-2.48,1.84-3.29,6.29-10.01,2-27.43,2-27.43-9.71-8.57,1.71-27.43,1.71-27.43,0,0-2.01-25.15,4-30,6.01-4.86,6.29-16.87,6.29-16.87,10.59-46.01,45.16-37.15,45.16-37.15,43.51-4.78,41.43,37.82,41.34,39.33Z" fill="#2f2e43" stroke-width="0" />
                        <path d="m291.9,310.36l-1.92,8.5-2.95,13-10.96,48.45-1.79,7.91c-3.04-.75-6.03-1.63-8.95-2.63-3.69-1.26-7.29-2.69-10.8-4.33-2.8-1.29-5.52-2.69-8.18-4.21.59-2.85,1.16-5.64,1.73-8.37,5.94-28.8,10.64-50.69,11.71-53.37,1.01-2.54,4.25-4.01,8.31-4.82.3-.06.62-.12.93-.17.29-.05.6-.1.89-.14,4.78-.7,10.32-.65,14.65-.43,1.5.08,2.85.18,3.97.27.63.05,1.2.11,1.66.15,1.08.11,1.71.19,1.71.19Z" fill="#1e8fff" stroke-width="0" />
                        <path d="m301.15,393.5c-9.26,0-18.47-1.12-27.36-3.34-3.06-.75-6.13-1.66-9.12-2.68-3.78-1.29-7.48-2.77-10.99-4.4-2.78-1.28-5.58-2.72-8.33-4.29-2.47-1.39-4.91-2.9-7.25-4.48-31.54-21.16-50.38-56.39-50.38-94.23,0-62.54,50.88-113.43,113.43-113.43s113.43,50.88,113.43,113.43c0,38.7-19.5,74.36-52.15,95.4-5.73,3.7-11.84,6.9-18.15,9.5-3.91,1.62-7.96,3.03-12.05,4.2-10.05,2.87-20.5,4.33-31.07,4.33Zm0-222.86c-60.34,0-109.43,49.09-109.43,109.43,0,36.51,18.17,70.49,48.61,90.92,2.25,1.52,4.6,2.97,6.99,4.31,2.66,1.52,5.36,2.91,8.04,4.14,3.39,1.58,6.95,3,10.61,4.25,2.88.99,5.84,1.86,8.79,2.59,8.58,2.14,17.46,3.22,26.4,3.22,10.19,0,20.28-1.41,29.97-4.18,3.95-1.12,7.86-2.49,11.63-4.05,6.09-2.51,11.98-5.59,17.51-9.16,31.51-20.3,50.32-54.71,50.32-92.04,0-60.34-49.09-109.43-109.43-109.43Z" fill="#2f2e43" stroke-width="0" />
                        <path d="m0,595.36c0,.94,1.07,1.69,2.41,1.69h690.03c1.33,0,2.41-.75,2.41-1.69s-1.07-1.69-2.41-1.69H2.41c-1.33,0-2.41.75-2.41,1.69Z" fill="#2f2e43" stroke-width="0" />
                        <path id="uuid-3fbf081d-9ff2-4e55-8986-b74bb868839d-47-155-46-48-44-44-85-89-39-99-546" d="m434.59,320.95h0c2.13-2.09,4.75-3.63,7.65-4.49l21.09-22.99,11.12,10.66-22.6,22.18c-.97,2.84-2.61,5.38-4.8,7.41-5.41,5.17-12.58,6.5-16.02,2.97-3.45-3.52-1.86-10.57,3.54-15.73h.02Z" fill="#f3a3a6" stroke-width="0" />
                        <path d="m443.38,310.6l11.2,14.08,57.89-43.82.05-.1,33.83-63.13c5.18-9.67,2.31-21.7-6.68-27.98-5.5-3.85-12.34-4.92-18.76-2.95-6.42,1.97-11.47,6.7-13.87,12.97l-21.95,57.45-41.71,53.46v.02Z" fill="#d5d5d6" stroke-width="0" />
                        <polygon points="538.71 164.58 515.11 164.58 515.11 202.02 541.13 193.47 538.71 164.58" fill="#f3a3a6" stroke-width="0" />
                        <path d="m492.41,149.02c0,14.32,11.6,25.92,25.92,25.92,14.32,0,25.92-11.6,25.92-25.92,0-14.32-11.6-25.92-25.92-25.92-14.32,0-25.92,11.6-25.92,25.92Z" fill="#f3a3a6" stroke-width="0" />
                        <path d="m536.67,165.59l2.53,4.8,11.16-21.21c6.72-20.58-16.75-32.4-16.75-32.4-7.66-9.02-23.05,1.53-23.05,1.53-22.2-4.93-11.48,13.78-11.48,13.78,0,0,7.57.17,7.57,6.29,0,6.13,8.25,5.7,8.25,5.7l6.46,11.31,3.57-4.34c13.27-5.62,11.74,14.54,11.74,14.54Z" fill="#2f2e43" stroke-width="0" />
                        <rect x="527.33" y="548.21" width="20.94" height="29.71" fill="#f3a3a6" stroke-width="0" />
                        <path d="m506.94,595.9c9.19,0,22.61-.96,22.71-.97,3.59.32,21.51,1.73,22.4-2.37.82-3.77-.39-7.71-.56-8.25-1.73-17.13-2.37-17.33-2.75-17.44-.61-.18-2.39.67-5.28,2.53l-.18.12-.04.21c-.05.26-1.33,6.55-7.4,5.59-4.16-.66-5.51-1.58-5.94-2.03.35-.16.79-.44,1.1-.92.45-.7.53-1.6.23-2.68-.78-2.84-3.12-7.05-3.22-7.23l-.27-.48-23.8,16.06-14.7,4.2c-1.11.31-2,1.11-2.45,2.17h0c-.62,1.48-.24,3.2.96,4.28,2.67,2.4,7.98,6.51,13.54,7.02,1.48.14,3.44.19,5.64.19h0Z" fill="#2f2e43" stroke-width="0" />
                        <rect x="583.54" y="506.94" width="20.94" height="29.71" transform="translate(-196.29 498.38) rotate(-39.6)" fill="#f3a3a6" stroke-width="0" />
                        <path d="m591.18,566.73c7.08-5.86,16.81-15.15,16.88-15.22,2.97-2.03,17.68-12.37,15.75-16.1-1.77-3.43-5.21-5.7-5.69-6-12.25-12.11-12.86-11.85-13.23-11.69-.59.25-1.42,2.03-2.46,5.31l-.06.2.1.19c.14.24,3.16,5.91-2.13,9.03-3.63,2.14-5.25,2.29-5.87,2.22.17-.35.33-.85.26-1.42-.1-.82-.61-1.57-1.53-2.21-2.42-1.69-6.9-3.45-7.09-3.52l-.51-.2-8.1,27.54-8.65,12.61c-.65.95-.83,2.13-.5,3.24h0c.47,1.54,1.86,2.62,3.47,2.69,3.58.15,10.29-.07,14.9-3.22,1.22-.84,2.76-2.05,4.46-3.45h0Z" fill="#2f2e43" stroke-width="0" />
                        <path d="m492.71,319.1l31.92,237.43h23.94l15.96-237.43h-71.83,0Z" fill="#2f2e43" stroke-width="0" />
                        <polygon points="554.55 448.79 602.22 510.64 581.82 527.49 500.01 449.68 492.7 319.1 507.33 332.18 554.55 448.79" fill="#2f2e43" stroke-width="0" />
                        <path d="m507.33,179.43l-14.63,139.67h71.83l5.57-45.33c3.43-28-2.28-56.36-16.28-80.84l-11.02-19.26-35.47,5.76h0Z" fill="#d5d5d6" stroke-width="0" />
                        <path id="uuid-6d861307-5b4f-42f9-9fe9-ab52d0b2e64d-48-156-47-49-45-45-86-90-40-100-547" d="m500.89,358.79h0c1.07-2.79,2.82-5.28,5.1-7.26l9.65-29.68,14.55,5.09-11.35,29.55c.31,2.98-.14,5.97-1.29,8.74-2.77,6.94-8.75,11.13-13.34,9.35-4.59-1.78-6.07-8.85-3.3-15.79h-.02Z" fill="#f3a3a6" stroke-width="0" />
                        <path d="m504.62,345.66l16.03,8.16,34.49-63.89v-.11s4.59-71.47,4.59-71.47c.7-10.94-6.9-20.7-17.69-22.68-6.61-1.21-13.28.65-18.29,5.11-5.03,4.46-7.66,10.87-7.24,17.57l3.87,61.37-15.76,65.95h0Z" fill="#d5d5d6" stroke-width="0" />
                      </svg>
                      <h2 class="text-lg font-bold md:text-xl">¿Necesitas Soporte?</h2>
                      <p>Contáctanos para obtener ayuda de un experto.</p>
                    </div>
                    <a class="w-full py-2 font-semibold border rounded-full hover:bg-terciary-50" href="../docs/support/soporte.php" target="_blank" rel="noopener noreferrer" title="Soporte | Appdad" aria-label="Soporte | Appdad">Obtener Ayuda</a>
                  </article>
                </div>
              </div>
              <!-- ========== END GROUP NAVIGATION ========== -->
            </div>
            <!-- ========== END SIDEBAR BODY ========== -->
          </nav>
        </header>
      </div>
    </aside>
    <!-- ========== END DESKTOP SIDEBAR ========== -->
    <!-- ========== DASHBOARD ========== -->
    <section class="px-6 py-4 w-full max-h-dvh overflow-y-auto [&::-webkit-scrollbar]:w-0 [&::-webkit-scrollbar-thumb]:rounded-full [--has-autofocus:false] [&::-webkit-scrollbar-track]:bg-terciary-50 [&::-webkit-scrollbar-thumb]:bg-terciary-100 text-terciary-950">
      <!-- ========== BACKGROUND ========== -->
      <div class="fixed -z-10 h-full w-full bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
      <!-- ========== TITULO INTERFAZ ========== -->
      <h1 class="hidden text-4xl font-extrabold">Panel Administrador</h1>
      <header class="flex items-center justify-between mt-2">
        <!-- ========== INFORMACION GENERAL ========== -->
        <div class="flex items-center justify-center gap-8">
          <button data-hs-overlay="#admin-sidebar" aria-controls="admin-sidebar" type="button" aria-label="Abrir Menu de Navegacion" class="flex items-center justify-center gap-2 px-4 py-2 text-xs font-semibold bg-white border rounded-lg border-terciary-100 sm:text-sm gap-x-2 hover:bg-terciary-50 disabled:opacity-50 disabled:pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
            Menu
          </button>
          <div class="items-center justify-center hidden gap-4 md:flex">
            <!-- ========== CODIGO ========== -->
            <div class="flex flex-col gap-1">
              <p class="font-extrabold text-blue-600">Codigo</p>
              <span class="font-medium text-terciary-500">218869284</span>
            </div>
            <!-- ========== DEPARTAMENTO ========== -->
            <div class="flex flex-col gap-1">
              <p class="font-extrabold text-blue-600">Departamento</p>
              <span class="font-medium text-terciary-500">Administracion</span>
            </div>
            <!-- ========== ROL ========== -->
            <div class="flex flex-col gap-1">
              <p class="font-extrabold text-blue-600">Rol</p>
              <span class="font-medium text-terciary-500">Administrador</span>
            </div>
          </div>
        </div>
        <!-- ========== MENU ========== -->
        <nav class="flex items-center justify-center gap-4">
          <!-- ========== CUENTA ========== -->
          <div class="flex items-center justify-center gap-2">
            <!-- ========== CONTROLES PRINCIPALES ========== -->
            <div class="items-center justify-center hidden gap-2 lg:flex">
              <!-- ========== ATAJOS  ========== -->
              <button id="shortcut" class="flex items-center justify-center gap-1 px-4 py-2 font-semibold bg-white border rounded-full hover:bg-terciary-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>
                Atajos de Teclado
              </button>
              <!-- ========== BUSCADOR  ========== -->
              <button id="searcher" class="p-2 rounded-full hover:bg-terciary-50 disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
              </button>
              <!-- ========== IDIOMA  ========== -->
              <button disabled id="language" class="p-2 rounded-full hover:bg-terciary-50 disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
              </button>
              <!-- ========== TEMAS  ========== -->
              <button disabled id="theme" class="p-2 rounded-full hover:bg-terciary-50 disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
              </button>
            </div>
            <div class="relative">
              <!-- ========== AVATAR ========== -->
              <img class="w-10 h-10 rounded-full" src="https://github.com/shadcn.png" alt="" title="" aria-label="" decoding="async" loading="lazy">
              <!-- ========== ESTATUS ========== -->
              <span role="status" class="absolute top-0 right-0 bg-green-600 border-2 border-white rounded-full size-3" aria-hidden="true"></span>
            </div>
            <div class="flex-col hidden text-sm md:flex">
              <!-- ========== NOMBRE ========== -->
              <p class="font-semibold">Cesar Omar Mora</p>
              <!-- ========== CORREO ========== -->
              <span class="text-terciary-500">cesar.mora@cucea.udg.mx</span>
            </div>
            <svg class="stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6"></path>
            </svg>
          </div>
        </nav>
      </header>
      <!-- ========== GRAFICAS ========== -->
      <div class="items-center hidden mt-6 md:flex">
        <!-- ========== ALUMNOS ACTIVOS ========== -->
        <article class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
          <div class="flex items-center justify-between py-2">
            <h2 class="font-bold text-primary-500">Usuarios Activos</h2>
            <div class="relative inline-flex hs-dropdown">
              <button disabled id="hs-dropdown-default" type="button" class="inline-flex items-center p-1 text-sm font-medium rounded-lg hs-dropdown-toggle gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
              </button>
              <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 bg-white shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
                <a title="Compartir Reporte de Usuarios | Appdad" aria-label="Compartir Reporte de Usuarios | Appdad" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                  Compartir
                </a>
              </div>
            </div>
          </div>
          <!-- ========== CHART ========== -->
          <div>
            <canvas id="usuarios"></canvas>
          </div>
          <div class="flex items-center justify-center">
            <!-- ========== DESCARGAR PDF ========== -->
            <button disabled title="Descargar Reporte de Usuarios | Appdad" aria-label="Descargar Reporte de Usuarios | Appdad" target="_blank" rel="noopener noreferrer" class="items-center justify-center hidden gap-1 px-4 py-3 mt-2 text-sm font-semibold bg-white border rounded-lg border-terciary-50 text-terciary-950 hover:bg-terciary-50 gap-x-2 disabled:opacity-50 disabled:pointer-events-none md:flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32">
                <path fill="#909090" d="m24.1 2.072l5.564 5.8v22.056H8.879V30h20.856V7.945z" />
                <path fill="#f4f4f4" d="M24.031 2H8.808v27.928h20.856V7.873z" />
                <path fill="#7a7b7c" d="M8.655 3.5h-6.39v6.827h20.1V3.5z" />
                <path fill="#dd2025" d="M22.472 10.211H2.395V3.379h20.077z" />
                <path fill="#464648" d="M9.052 4.534H7.745v4.8h1.028V7.715L9 7.728a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .335-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.409-.104a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.193a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.671-2.306c-.111 0-.219.008-.295.011L12 4.538h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.392h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.08-3.915H15v4.8h1.028V7.434h1.3v-.892h-1.3V5.43h1.4v-.892" />
                <path fill="#dd2025" d="M21.781 20.255s3.188-.578 3.188.511s-1.975.646-3.188-.511m-2.357.083a7.5 7.5 0 0 0-1.473.489l.4-.9c.4-.9.815-2.127.815-2.127a14 14 0 0 0 1.658 2.252a13 13 0 0 0-1.4.288Zm-1.262-6.5c0-.949.307-1.208.546-1.208s.508.115.517.939a10.8 10.8 0 0 1-.517 2.434a4.4 4.4 0 0 1-.547-2.162Zm-4.649 10.516c-.978-.585 2.051-2.386 2.6-2.444c-.003.001-1.576 3.056-2.6 2.444M25.9 20.895c-.01-.1-.1-1.207-2.07-1.16a14 14 0 0 0-2.453.173a12.5 12.5 0 0 1-2.012-2.655a11.8 11.8 0 0 0 .623-3.1c-.029-1.2-.316-1.888-1.236-1.878s-1.054.815-.933 2.013a9.3 9.3 0 0 0 .665 2.338s-.425 1.323-.987 2.639s-.946 2.006-.946 2.006a9.6 9.6 0 0 0-2.725 1.4c-.824.767-1.159 1.356-.725 1.945c.374.508 1.683.623 2.853-.91a23 23 0 0 0 1.7-2.492s1.784-.489 2.339-.623s1.226-.24 1.226-.24s1.629 1.639 3.2 1.581s1.495-.939 1.485-1.035" />
                <path fill="#909090" d="M23.954 2.077V7.95h5.633z" />
                <path fill="#f4f4f4" d="M24.031 2v5.873h5.633z" />
                <path fill="#fff" d="M8.975 4.457H7.668v4.8H8.7V7.639l.228.013a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .332-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.411-.105a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.194a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.67-2.306c-.111 0-.219.008-.295.011l-.235.006h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.315h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.077-3.915h-2.43v4.8h1.028V7.357h1.3v-.892h-1.3V5.353h1.4v-.892" />
              </svg>
              Descargar Reporte
            </button>
          </div>
        </article>
        <!-- ========== PROFESORES ACTIVOS ========== -->

        <!-- ========== RENDIMIENTO ========== -->

      </div>
      <!-- ========== INFORMACION ========== -->
      <div class="flex flex-wrap gap-4 mt-6">
        <!-- ========== NOTIFICACIONES ========== -->
        <div class="flex flex-col  w-full gap-4 p-4 overflow-y-auto bg-white rounded-lg shadow-md [&::-webkit-scrollbar]:w-0 [&::-webkit-scrollbar-thumb]:rounded-full [--has-autofocus:false] [&::-webkit-scrollbar-track]:bg-terciary-50 [&::-webkit-scrollbar-thumb]:bg-terciary-100">
          <div>
            <div class="flex items-center justify-between w-full">
              <h3 class="font-extrabold text-primary-500">Notificaciones</h3>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-terciary-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
              </svg>
            </div>
            <div class="flex flex-col items-center justify-center text-sm">
              <div class="w-full hs-accordion-group" data-hs-accordion-always-open="">
                <!-- ========== NAVIGATION ========== -->
                <div class="hs-accordion active" id="hs-basic-always-open-heading-one">
                  <!-- ========== SIDEBAR TRIGGER ========== -->
                  <button class="inline-flex items-center justify-between w-full font-semibold tracking-wider rounded-lg text-terciary-400 hs-accordion-toggle gap-x-3 text-start disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                    Hoy
                    <svg class="block stroke-terciary-500 hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                    <svg class="hidden stroke-terciary-500 hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m18 15-6-6-6 6"></path>
                    </svg>
                  </button>
                  <!-- ========== SIDEBAR LINKS ========== -->
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <ul class="flex flex-col gap-2">
                      <li class="flex items-center justify-start w-full h-auto gap-2 p-2 font-semibold rounded-lg hover:font-bold hover:text-terciary-600 text-terciary-500">
                        <button class="flex items-center justify-center gap-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32">
                            <path fill="#909090" d="m24.1 2.072l5.564 5.8v22.056H8.879V30h20.856V7.945z" />
                            <path fill="#f4f4f4" d="M24.031 2H8.808v27.928h20.856V7.873z" />
                            <path fill="#7a7b7c" d="M8.655 3.5h-6.39v6.827h20.1V3.5z" />
                            <path fill="#dd2025" d="M22.472 10.211H2.395V3.379h20.077z" />
                            <path fill="#464648" d="M9.052 4.534H7.745v4.8h1.028V7.715L9 7.728a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .335-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.409-.104a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.193a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.671-2.306c-.111 0-.219.008-.295.011L12 4.538h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.392h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.08-3.915H15v4.8h1.028V7.434h1.3v-.892h-1.3V5.43h1.4v-.892" />
                            <path fill="#dd2025" d="M21.781 20.255s3.188-.578 3.188.511s-1.975.646-3.188-.511m-2.357.083a7.5 7.5 0 0 0-1.473.489l.4-.9c.4-.9.815-2.127.815-2.127a14 14 0 0 0 1.658 2.252a13 13 0 0 0-1.4.288Zm-1.262-6.5c0-.949.307-1.208.546-1.208s.508.115.517.939a10.8 10.8 0 0 1-.517 2.434a4.4 4.4 0 0 1-.547-2.162Zm-4.649 10.516c-.978-.585 2.051-2.386 2.6-2.444c-.003.001-1.576 3.056-2.6 2.444M25.9 20.895c-.01-.1-.1-1.207-2.07-1.16a14 14 0 0 0-2.453.173a12.5 12.5 0 0 1-2.012-2.655a11.8 11.8 0 0 0 .623-3.1c-.029-1.2-.316-1.888-1.236-1.878s-1.054.815-.933 2.013a9.3 9.3 0 0 0 .665 2.338s-.425 1.323-.987 2.639s-.946 2.006-.946 2.006a9.6 9.6 0 0 0-2.725 1.4c-.824.767-1.159 1.356-.725 1.945c.374.508 1.683.623 2.853-.91a23 23 0 0 0 1.7-2.492s1.784-.489 2.339-.623s1.226-.24 1.226-.24s1.629 1.639 3.2 1.581s1.495-.939 1.485-1.035" />
                            <path fill="#909090" d="M23.954 2.077V7.95h5.633z" />
                            <path fill="#f4f4f4" d="M24.031 2v5.873h5.633z" />
                            <path fill="#fff" d="M8.975 4.457H7.668v4.8H8.7V7.639l.228.013a2 2 0 0 0 .647-.117a1.4 1.4 0 0 0 .493-.291a1.2 1.2 0 0 0 .332-.454a2.1 2.1 0 0 0 .105-.908a2.2 2.2 0 0 0-.114-.644a1.17 1.17 0 0 0-.687-.65a2 2 0 0 0-.411-.105a2 2 0 0 0-.319-.026m-.189 2.294h-.089v-1.48h.194a.57.57 0 0 1 .459.181a.92.92 0 0 1 .183.558c0 .246 0 .469-.222.626a.94.94 0 0 1-.524.114m3.67-2.306c-.111 0-.219.008-.295.011l-.235.006h-.78v4.8h.918a2.7 2.7 0 0 0 1.028-.175a1.7 1.7 0 0 0 .68-.491a1.9 1.9 0 0 0 .373-.749a3.7 3.7 0 0 0 .114-.949a4.4 4.4 0 0 0-.087-1.127a1.8 1.8 0 0 0-.4-.733a1.6 1.6 0 0 0-.535-.4a2.4 2.4 0 0 0-.549-.178a1.3 1.3 0 0 0-.228-.017m-.182 3.937h-.1V5.315h.013a1.06 1.06 0 0 1 .6.107a1.2 1.2 0 0 1 .324.4a1.3 1.3 0 0 1 .142.526c.009.22 0 .4 0 .549a3 3 0 0 1-.033.513a1.8 1.8 0 0 1-.169.5a1.1 1.1 0 0 1-.363.36a.67.67 0 0 1-.416.106m5.077-3.915h-2.43v4.8h1.028V7.357h1.3v-.892h-1.3V5.353h1.4v-.892" />
                          </svg>
                          ¡Tienes nueva constancia para descargar!
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex gap-2">
          <!-- ========== VIDEO INTRODUCTORIO ========== -->
          <div class="flex flex-col justify-start">
            <div class="flex flex-col w-full">
              <h3 class="font-semibold text-terciary-300">Video Introductorio</h3>
              <div class="flex items-center justify-center flex-1 w-full">
                <img class="rounded-lg" src="https://placehold.co/384x405" decoding="async" loading="lazy" alt="">
              </div>
            </div>
          </div>
          <!-- ========== SOPORTE ========== -->
          <div class="flex flex-col justify-start">
            <div class="flex flex-col flex-1 w-full">
              <h3 class="font-semibold text-terciary-300">Soporte</h3>
              <div class="flex items-center justify-center w-full">
                <img class="rounded-lg" src="https://placehold.co/384x405" decoding="async" loading="lazy" alt="">
              </div>
            </div>
          </div>
          <!-- ========== FACEBOOK ========== -->
          <div class="flex flex-col justify-start flex-1">
            <div class="flex flex-col flex-1 w-full">
              <h3 class="font-semibold text-terciary-300">Facebook</h3>
              <div class="flex items-center justify-center w-full">
                <img class="rounded-lg" src="https://placehold.co/550x405" decoding="async" loading="lazy" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========== END DASHBOARD ========== -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  <script src="../../vendor/preline/preline.js"></script>
  <!-- ========== CHARTS ========== -->
  <script src="../../vendor/chartjs/chart.umd.js"></script>
  <script src="../../resources/js/charts/admin/panel/usuarios.js"></script>
</body>

</html>