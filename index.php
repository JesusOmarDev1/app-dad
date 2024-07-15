<!DOCTYPE html>
<html lang="es-MX" class="h-auto scroll-smooth">

<head>
   <meta charset="UTF-8">
   <!-- ========== PWA ========== -->
   <link rel="manifest" href="./manifest.json" />
   <!-- ========== DEFAULT ========== -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon">
   <!-- ========== RESOURCES ========== -->
   <link rel="stylesheet" href="./src/resources/css/output.css">
   <!-- ========== SEO ========== -->
   <title>Simplifica y Automatiza tu Administracion Academica | Appdad</title>

</head>

<body class="[&::-webkit-scrollbar]:w-0 [&::-webkit-scrollbar-thumb]:rounded-full [--has-autofocus:false] [&::-webkit-scrollbar-track]:bg-terciary-50 [&::-webkit-scrollbar-thumb]:bg-terciary-100">
   <!-- ========== BACKGROUND ========== -->
   <div class="fixed -z-10 h-full w-full bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
   <!-- ========== HEADER ========== -->
   <header>
      <nav class="fixed z-10 flex items-center justify-between w-full gap-8 px-6 py-2 backdrop-blur-3xl">
         <!-- ========== NAVBAR LINKS ========== -->
         <ul class="items-center justify-center hidden gap-8 text-sm font-semibold text-center lg:flex rtl:space-x-reverse">
            <li class="hover:text-primary-500 hover:font-bold"><a href="#About" title="Acerca de | Appdad" aria-label="Acerca de | Appdad">Acerca de</a></li>
            <li class="hover:text-primary-500 hover:font-bold"><a href="./src/views/docs/support/soporte.php" title="Soporte | Appdad" aria-label="Soporte | Appdad">Soporte</a></li>
            <li class="hover:text-primary-500 hover:font-bold"><a href="./src/views/docs/support/actualizaciones.php" title="Preguntas Frecuentes | Appdad" aria-label="Preguntas Frecuentes  | Appdad">Actualizaciones</a></li>
         </ul>
         <button class="flex items-center justify-center gap-2 px-4 py-2 text-xs font-semibold bg-white border rounded-lg lg:hidden border-terciary-100 text-terciary-950 sm:text-sm gap-x-2 hover:bg-terciary-50 disabled:opacity-50 disabled:pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
            Menu
         </button>
         <div class="flex items-center justify-center gap-2">
            <!-- ========== GITHUB ========== -->
            <a href="https://github.com/JesusOmarDev1/app-dad/blob/dv-Omar/CONTRIBUTING.md" title="Unirse como Colaborador | Github" aria-label="Unirse como Colaborador | Github" target="_blank" rel="noopener noreferrer" class="items-center justify-center hidden gap-1 px-4 py-3 text-sm font-semibold bg-white border rounded-lg shadow-sm border-terciary-50 text-terciary-950 hover:bg-terciary-50 gap-x-2 disabled:opacity-50 disabled:pointer-events-none md:flex">
               <svg viewBox="0 0 256 250" width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                  <path d="M128.001 0C57.317 0 0 57.307 0 128.001c0 56.554 36.676 104.535 87.535 121.46 6.397 1.185 8.746-2.777 8.746-6.158 0-3.052-.12-13.135-.174-23.83-35.61 7.742-43.124-15.103-43.124-15.103-5.823-14.795-14.213-18.73-14.213-18.73-11.613-7.944.876-7.78.876-7.78 12.853.902 19.621 13.19 19.621 13.19 11.417 19.568 29.945 13.911 37.249 10.64 1.149-8.272 4.466-13.92 8.127-17.116-28.431-3.236-58.318-14.212-58.318-63.258 0-13.975 5-25.394 13.188-34.358-1.329-3.224-5.71-16.242 1.24-33.874 0 0 10.749-3.44 35.21 13.121 10.21-2.836 21.16-4.258 32.038-4.307 10.878.049 21.837 1.47 32.066 4.307 24.431-16.56 35.165-13.12 35.165-13.12 6.967 17.63 2.584 30.65 1.255 33.873 8.207 8.964 13.173 20.383 13.173 34.358 0 49.163-29.944 59.988-58.447 63.157 4.591 3.972 8.682 11.762 8.682 23.704 0 17.126-.148 30.91-.148 35.126 0 3.407 2.304 7.398 8.792 6.14C219.37 232.5 256 184.537 256 128.002 256 57.307 198.691 0 128.001 0Zm-80.06 182.34c-.282.636-1.283.827-2.194.39-.929-.417-1.45-1.284-1.15-1.922.276-.655 1.279-.838 2.205-.399.93.418 1.46 1.293 1.139 1.931Zm6.296 5.618c-.61.566-1.804.303-2.614-.591-.837-.892-.994-2.086-.375-2.66.63-.566 1.787-.301 2.626.591.838.903 1 2.088.363 2.66Zm4.32 7.188c-.785.545-2.067.034-2.86-1.104-.784-1.138-.784-2.503.017-3.05.795-.547 2.058-.055 2.861 1.075.782 1.157.782 2.522-.019 3.08Zm7.304 8.325c-.701.774-2.196.566-3.29-.49-1.119-1.032-1.43-2.496-.726-3.27.71-.776 2.213-.558 3.315.49 1.11 1.03 1.45 2.505.701 3.27Zm9.442 2.81c-.31 1.003-1.75 1.459-3.199 1.033-1.448-.439-2.395-1.613-2.103-2.626.301-1.01 1.747-1.484 3.207-1.028 1.446.436 2.396 1.602 2.095 2.622Zm10.744 1.193c.036 1.055-1.193 1.93-2.715 1.95-1.53.034-2.769-.82-2.786-1.86 0-1.065 1.202-1.932 2.733-1.958 1.522-.03 2.768.818 2.768 1.868Zm10.555-.405c.182 1.03-.875 2.088-2.387 2.37-1.485.271-2.861-.365-3.05-1.386-.184-1.056.893-2.114 2.376-2.387 1.514-.263 2.868.356 3.061 1.403Z" />
               </svg>
               Unete como colaborador
            </a>
            <!-- ========== LOGIN BTN ========== -->
            <a href="./src/views/login.php" title="Iniciar Sesion | Appdad" aria-label="Iniciar Sesion | Appdad" class="flex items-center justify-center px-4 py-3 text-xs font-semibold text-white border border-transparent rounded-lg shadow-sm sm:text-sm bg-secondary-600 gap-x-2 hover:bg-secondary-800 disabled:opacity-50 disabled:pointer-events-none">
               Iniciar Sesion
               <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
               </svg>
            </a>
         </div>
      </nav>
   </header>
   <!-- ========== END HEADER ========== -->
   <!-- ========== MAIN CONTENT ========== -->
   <main class="flex flex-col items-center justify-center w-full h-auto p-6">
      <!-- ========== HERO ========== -->
      <section class="flex flex-col items-center justify-center pt-20 text-center sm:pt-24 lg:pt-28 sm:gap-2 lg:gap-4">
         <div class="flex flex-col items-center justify-center gap-2 p-4 lg:gap-4 sm:p-2 lg:p-0 lg:px-4">
            <!-- ========== VERSION ========== -->
            <span role="alert">
               <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-primary-100 text-primary-500">
                  <span class="inline-block rounded-full size-2 bg-primary-500 animate-pulse" aria-hidden="true"></span>
                  Version 0.0.2 Beta
               </span>
            </span>
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-terciary-950">Simplifica, Administra y Automatiza tus Constancias y Eventos Académicos</h1>
            <h2 class="px-2 font-medium text-md sm:px-4 lg:px-20 text-terciary-500 lg:text-md line-clamp-4 lg:line-clamp-none">El software es abierto para contribuidores pero cerrado para uso y tiene como objetivo facilitar la generación de constancias académicas y proporcionar una plataforma integral para la gestión de eventos, talleres, etcetera...</h2>
         </div>

         <div class="flex items-center justify-center gap-3">
            <button disabled class="flex items-center justify-center gap-1 px-4 py-3 text-sm font-semibold text-white rounded-lg shadow-sm bg-secondary-600 hover:bg-secondary-800 gap-x-2 disabled:opacity-50 disabled:pointer-events-none">
               <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
               </svg>
               Demo</button>
            <button disabled class="flex items-center justify-center gap-1 px-4 py-3 text-sm font-semibold bg-white border rounded-lg border-terciary-100 text-terciary-950 hover:bg-terciary-50 gap-x-2 disabled:opacity-50 disabled:pointer-events-none" href="./src/views/docs/blog/guia-de-uso.php" target="_blank" rel="noopener noreferrer">
               <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
               </svg>
               Guia de Uso</button>
         </div>
      </section>
      <!-- ========== PREVIEW ========== -->
      <section class="flex items-center justify-center mt-10">
         <!-- ========== DESKTOP VERSION ========== -->
         <figure class="hidden lg:flex lg:flex-col relative max-w-full w-[60rem] h-auto rounded-lg">
            <div class="relative flex items-center max-w-[60rem] border border-terciary-100 bg-white rounded-t-lg py-2 px-24">
               <div class="absolute flex space-x-1 -translate-y-1 top-2/4 start-4">
                  <span class="bg-red-400 rounded-full size-2"></span>
                  <span class="bg-yellow-400 rounded-full size-2"></span>
                  <span class="bg-green-400 rounded-full size-2"></span>
               </div>
               <div class="select-none flex justify-center items-center size-full border border-terciary-100 text-[.25rem] font-semibold text-terciary-950 rounded-sm sm:text-[.5rem]">appdad.cucea.udg.mx</div>
               <div class="absolute flex space-x-1 -translate-y-1 top-2/4 end-4 text-terciary-950">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-2">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                  </svg>
               </div>
            </div>

            <div class="rounded-b-lg ">
               <img class="h-auto max-w-full rounded-b-lg" decoding="async" loading="lazy" src="https://placehold.co/1618x1010" title="Vista Previa Escritorio | Appdad" alt="Vista Previa Escritorio | Appdad">
            </div>
         </figure>
         <!-- ========== MOBILE VERSION ========== -->
         <figure class="h-auto max-w-full lg:hidden w-60">
            <div class="p-1.5 bg-gray-800 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)]">
               <img class=" max-w-full h-auto rounded-[1.25rem]" decoding="async" loading="lazy" src="https://placehold.co/280x560" title="Vista Previa Celular | Appdad" alt="Vista Previa Celular | Appdad">
            </div>
         </figure>
      </section>
      <!-- ========== FEATURES ========== -->
      <section class="mt-10">
         <div class="flex flex-col items-center justify-center gap-8 px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:text-center">
               <span class="font-medium leading-7 text-secondary-600">Administra tu contenido mas rapido</span>
               <h3 class="mt-2 text-3xl font-extrabold tracking-tight text-terciary-950 sm:text-4xl">Todo lo que necesitas para tu escuela</>
                  <p class="mt-1 text-lg font-semibold leading-8 text-terciary-600">Aqui encontraras todas las caracteristicas de la aplicacion.</p>
            </div>
            <div class="max-w-2xl mx-auto lg:max-w-4xl">
               <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                           </svg>
                        </div>
                        Carga Horaria
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-secondary-100 text-secondary-600">
                           <span class="inline-block rounded-full bg-secondary-600 size-2 animate-pulse" aria-hidden="true"></span>
                           Proximamente
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Gestiona y organiza los horarios de manera efectiva. Permite a alumnos y profesores planificar sus actividades académicas y extracurriculares con facilidad, asegurando un uso eficiente del tiempo.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                           </svg>
                        </div>
                        Cursos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Ofrece y administra una variedad de cursos impartidos por profesores y expertos externos. Proporciona información detallada sobre cada curso y facilita la inscripción y el seguimiento del progreso académico.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                           </svg>
                        </div>
                        Proyectos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Facilita la creación, gestión y colaboración en proyectos académicos y profesionales. Cualquier usuario puede proponer y seguir proyectos, fomentando la innovación y el trabajo en equipo.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                           </svg>
                        </div>
                        Eventos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Organiza y participa en eventos académicos y extracurriculares. Mantente informado sobre conferencias, talleres y actividades, gestionando todos los detalles para asegurar una experiencia enriquecedora.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                           </svg>
                        </div>
                        Tutorias
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-secondary-100 text-secondary-600">
                           <span class="inline-block rounded-full bg-secondary-600 size-2 animate-pulse" aria-hidden="true"></span>
                           Proximamente
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Proporciona apoyo académico a través de sesiones de tutoría. Permite a los tutores gestionar sus alumnos y planificar las sesiones de manera efectiva, asegurando un seguimiento personalizado del progreso de cada estudiante.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-primary-500">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-white size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                           </svg>
                        </div>
                        Seguridad
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-green-100 text-green-600">
                           <span class="inline-block bg-green-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           Actualizacion constante
                        </span>
                     </dt>
                     <dd class="mt-2 text-base leading-7 text-terciary-500">Actualmente nuestro software garantiza un entorno seguro mediante acceso basado en roles (RBAC) con protección contra inyección SQL, manejo de sesiones en múltiples dispositivos, control de subida y administracion de archivos, etcetera. <a class="font-bold after:content-['_↗'] hover:text-primary-500" href="./src/views/docs/security/politica-de-seguridad.php" title="" aria-label="" target="_blank" rel="noopener noreferrer">Leer mas</a> </dd>
                  </div>
               </dl>
            </div>
         </div>
      </section>
      <!-- ========== DOCUMENTATION ========== -->
      <section class="w-full mt-10 bg-white md:px-20">
         <div class="mx-auto">
            <div class="relative flex p-8 overflow-hidden shadow-2xl sm:p-12 lg:p-16 bg-terciary-950 md:p-20 isolate rounded-3xl">
               <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true">
                  <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                  <defs>
                     <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                        <stop stop-color="#48b3ff" />
                        <stop offset="1" stop-color="#48b3ff" />
                     </radialGradient>
                  </defs>
               </svg>
               <div class="mx-auto text-center lg:mx-0 lg:flex-auto">
                  <h3 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Aumenta tu productividad y comienza a usar nuestra aplicacion hoy.</h3>
                  <div class="flex items-center justify-center mt-4 sm:mt-6 lg:mt-10 gap-x-6">
                     <a href="./src/views/login.php" title="Iniciar Sesion | Appdad" aria-label="Iniciar Sesion | Appdad" class="flex items-center justify-center px-4 py-3 text-xs font-bold text-white border rounded-lg shadow-sm hover:text-terciary-950 hover:bg-white border-terciary-100 sm:text-sm gap-x-2 disabled:opacity-50 disabled:pointer-events-none">
                        Empezar ahora
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <path d="m9 18 6-6-6-6" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ========== PERKS ========== -->
      <section class="max-w-[85rem] px-4 mt-10 sm:px-6 lg:px-8 lg:py-14 mx-auto text-sm text-terciary-950">
         <div class="grid items-center gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <div>
               <svg class="flex-shrink-0 size-9" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect width="10" height="14" x="3" y="8" rx="2" />
                  <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                  <path d="M8 18h.01" />
               </svg>
               <div class="bg-gradient-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
                  <div class="bg-gray-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold">Responsiva</h3>
                  <p class="mt-1 text-terciary-500">La aplicacion es responsiva para todos los dispositivos.</p>
               </div>
            </div>

            <div>
               <svg class="flex-shrink-0 size-9" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 7h-9" />
                  <path d="M14 17H5" />
                  <circle cx="17" cy="17" r="3" />
                  <circle cx="7" cy="7" r="3" />
               </svg>
               <div class="bg-gradient-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
                  <div class="bg-gray-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold">Customizable</h3>
                  <p class="mt-1 text-terciary-500">La aplicacion cuenta con preferencias del usuario para customizar todo.</p>
               </div>
            </div>

            <div>
               <svg class="flex-shrink-0 size-9" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                  <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
               </svg>
               <div class="bg-gradient-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
                  <div class="bg-gray-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <div class="flex items-center gap-2">
                     <h3 class="text-lg font-semibold">Guias</h3>
                     <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-secondary-100 text-secondary-600">
                        <span class="inline-block rounded-full bg-secondary-600 size-2 animate-pulse" aria-hidden="true"></span>
                        Proximamente
                     </span>
                  </div>
                  <p class="mt-1 text-terciary-500">La aplicacion cuenta con un blog por si tienes dudas del uso de la aplicacion.</p>
               </div>
            </div>

            <div>
               <svg class="flex-shrink-0 size-9" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                  <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
               </svg>
               <div class="bg-gradient-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
                  <div class="bg-gray-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold text-terciary-950">24/7 Soporte</h3>
                  <p class="mt-1 text-terciary-500">Contactanos sin importar el dia las 24 horas y los 7 dias de la semana.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- ========== ABOUT ========== -->
      <section id="About" class="max-w-[85rem] px-4 mt-10 mx-auto text-terciary-950">
         <div class="mx-auto">
            <span class="font-medium leading-7 text-secondary-600">Conoce nuestra historia</span>
            <div class="flex flex-col justify-start gap-2 mt-2">
               <h3 class="text-3xl font-bold lg:text-4xl">
                  Acerca de nosotros
               </h3>
               <p class="text-sm">
                  Este proyecto fue impulsado por tres alumnos del <a class="font-bold after:content-['_↗'] hover:text-primary-500" href="https://www.cucea.udg.mx/" title="Centro Universitario de Ciencias Económico Administrativas" aria-label="Centro Universitario de Ciencias Económico Administrativas" target="_blank" rel="noopener noreferrer">CUCEA (Centro Universitario de Ciencias Económico Administrativas)</a>, quienes contaron con el valioso apoyo del <a class="font-bold after:content-['_↗'] hover:text-primary-500" href="https://www.cucea.udg.mx/es/acerca-de-cucea/directorio/cesar-omar-mora-perez-0" title="Contacto | Dr. César Omar Mora Pérez" aria-label="Contacto | Dr. César Omar Mora Pérez" target="_blank" rel="noopener noreferrer">Jefe de Departamento, Dr. César Omar Mora Pérez</a>. El Dr. Mora Pérez nos brindó soporte, conexiones y comunicación para participar en el <a class="font-bold after:content-['_↗'] hover:text-primary-500" href="https://certamentransparencia.org.mx/" title="CERTAMEN DE INNOVACIÓN DE TRANSPARENCIA 2024" aria-label="CERTAMEN DE INNOVACIÓN DE TRANSPARENCIA 2024" target="_blank" rel="noopener noreferrer">Certamen de Innovación en Transparencia 2024</a>.
               </p>
            </div>
            <div class="flex flex-col justify-start gap-1 mt-4">
               <h3 class="text-2xl font-bold lg:text-3xl">
                  Objetivos
               </h3>
               <p class="text-sm">
                  El objetivo principal de este proyecto es mejorar la administración y gestión de la información en CUCEA y, potencialmente, en otras instituciones educativas.
               </p>
            </div>
            <div class="flex flex-col justify-start gap-1 mt-4">
               <h3 class="text-2xl font-bold lg:text-3xl">
                  Impacto y Beneficios
               </h3>
               <p class="text-sm">
                  Actualmente, el proyecto se encuentra en su fase beta, con actualizaciones constantes en diseño, funcionalidad y seguridad. Esperamos que esta iniciativa marque una diferencia significativa en la administración de CUCEA, proporcionando herramientas más efectivas tanto para estudiantes como para personal académico. Además, se aspira a que este proyecto sirva como modelo para la implementación de sistemas similares en otras instituciones educativas, promoviendo una cultura de transparencia y eficiencia administrativa.
               </p>
            </div>
            <div class="flex flex-col justify-start gap-1 mt-4">
               <h3 class="text-2xl font-bold lg:text-3xl">
                  Agradecimientos
               </h3>
               <p class="text-sm">
                  Agradecemos profundamente al Dr. César Omar Mora Pérez por su invaluable apoyo y orientación, así como a todas las personas e instituciones que han contribuido a la realización de este proyecto. Su colaboración ha sido fundamental para alcanzar los logros obtenidos hasta ahora, seguiremos trabajando para hacerlo posible.
               </p>
            </div>
         </div>
      </section>

      <!-- ========== END FOOTER ========== -->
   </main>
   <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>