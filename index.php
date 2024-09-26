<!DOCTYPE html>
<html lang="es-MX" class="h-auto scroll-smooth">

<head>
   <meta charset="UTF-8">
   <!-- ========== PWA ========== -->
   <link rel="manifest" href="./manifest.json" />
   <!-- ========== DEFAULT ========== -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./public/img/icon.svg" type="image/x-icon">
   <!-- ========== RESOURCES ========== -->
   <link rel="stylesheet" href="./src/resources/css/output.css">
   <!-- ========== SEO ========== -->
   <title>Inicio | Cucea</title>
</head>

<body class="[&::-webkit-scrollbar]:w-0 [&::-webkit-scrollbar-thumb]:rounded-full [--has-autofocus:false] [&::-webkit-scrollbar-track]:bg-zinc-50 [&::-webkit-scrollbar-thumb]:bg-zinc-100">
   <!-- ========== BACKGROUND ========== -->
   <div class="fixed -z-10 h-full w-full bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_80%)]"></div>
   <!-- ========== HEADER ========== -->
   <header class="fixed z-50 flex flex-wrap w-full bg-white/90 backdrop-blur-3xl lg:bg-none lg:backdrop-blur-2xl md:justify-start md:flex-nowrap dark:bg-zinc-800 dark:border-zinc-700">
     <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <!-- ========== STATUS ========== -->
       <div class="flex items-center justify-between gap-x-1">
          <div class="flex items-center justify-center gap-2">
            <img src="./public/img/icon.svg" width="30" height="30" title="" alt="" aria-label="" role="img" loading="lazy" decoding="async" />
            <span class="font-semibold">Appdad</span>
            <div role="alert">
               <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                  <span class="inline-block bg-yellow-400 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                  Mantenimiento
               </span>
            </div>
          </div>
         
         <!-- ========== MOBILE MENU BTN ========== -->
         <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg text-zinc-800 hover:bg-zinc-100 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-zinc-700 " id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
           <i data-lucide="align-right" class="size-4"></i>
           <span class="sr-only">Toggle navigation</span>
         </button>
       </div>
       <!-- ========== MOBILE & DESKTOP ========== -->
       <div id="hs-header-base" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
         <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-zinc-100 [&::-webkit-scrollbar-thumb]:bg-zinc-300 dark:[&::-webkit-scrollbar-track]:bg-zinc-700 dark:[&::-webkit-scrollbar-thumb]:bg-zinc-500">
           <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
             <div class="grow">
               <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                 <!-- ========== HOME ========== -->
                 <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 bg-zinc-100 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:bg-zinc-700 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:focus:bg-zinc-700" href="#" aria-current="page">
                   Inicio
                 </a>
                 <!-- ========== RESOURCES ========== -->
                 <div class="hs-dropdown [--strategy:static] sm:[--trigger:hover] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                   <button id="hs-header-base-dropdown" type="button" class="flex items-center w-full p-2 text-sm rounded-lg text-zinc-800 hs-dropdown-toggle hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:focus:bg-zinc-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     Recursos
                     <svg class="duration-300 hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                   </button>
   
                   <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-zinc-100 dark:md:bg-zinc-800 dark:after:bg-zinc-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                     <div class="py-1 md:px-1 space-y-0.5">

                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Github
                       </a>
   
                       <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                         <button id="hs-header-base-dropdown-sub" type="button" class="flex items-center justify-between w-full p-2 text-sm rounded-lg text-zinc-800 hs-dropdown-toggle md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300">
                           Redes Sociales
                           <svg class="duration-300 hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                         </button>
   
                         <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-zinc-800 dark:divide-zinc-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-zinc-100 dark:md:bg-zinc-800 dark:after:bg-zinc-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">
                           <div class="p-1 space-y-1">
                             <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                               Facebook
                             </a>
   
                             <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                               Youtube
                             </a>
   
                             <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                               Tiktok
                             </a>
                           </div>
                         </div>
                       </div>

                     </div>
                   </div>
                 </div>
                 <!-- ========== LEGAL ========== -->
                 <div class="hs-dropdown [--strategy:static] sm:[--trigger:hover] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                   <button id="hs-header-base-dropdown" type="button" class="flex items-center w-full p-2 text-sm rounded-lg text-zinc-800 hs-dropdown-toggle hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:focus:bg-zinc-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     Legal
                     <svg class="duration-300 hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                   </button>
   
                   <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-zinc-100 dark:md:bg-zinc-800 dark:after:bg-zinc-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                     <div class="py-1 md:px-1 space-y-0.5">
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Terminos de uso y privacidad
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Politica de Notificaciones
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Politica de privacidad de datos
                       </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Politica de cookies
                       </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Politica de seguridad de la informacion
                       </a>
                     </div>
                   </div>
                 </div>
                 <!-- ========== OFFICIAL PAGES ========== -->
                 <div class="hs-dropdown [--strategy:static] sm:[--trigger:hover] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                   <button id="hs-header-base-dropdown" type="button" class="flex items-center w-full p-2 text-sm rounded-lg text-zinc-800 hs-dropdown-toggle hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:focus:bg-zinc-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     <svg class="block shrink-0 size-4 me-3 md:me-2 md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                     Paginas Oficiales
                     <svg class="duration-300 hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                   </button>
   
                   <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-zinc-100 dark:md:bg-zinc-800 dark:after:bg-zinc-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                     <div class="py-1 md:px-1 space-y-0.5">
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Cucea
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         CTA
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Leo
                       </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Control Escolar
                       </a>
                     </div>
                   </div>
                 </div>
                 <!-- ========== GENERAL INFORMATION ========== -->
                 <div class="hs-dropdown [--strategy:static] sm:[--trigger:hover] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                   <button id="hs-header-base-dropdown" type="button" class="flex items-center w-full p-2 text-sm rounded-lg text-zinc-800 hs-dropdown-toggle hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:focus:bg-zinc-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     <svg class="block shrink-0 size-4 me-3 md:me-2 md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                     Informacion General
                     <svg class="duration-300 hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                   </button>
   
                   <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-zinc-100 dark:md:bg-zinc-800 dark:after:bg-zinc-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                     <div class="py-1 md:px-1 space-y-0.5">
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Acerca de
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Ubicacion
                       </a>
                       <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         FAQ
                       </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Normatividad
                        </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Unidades Academicas
                        </a>
                        <a class="flex items-center p-2 text-sm rounded-lg text-zinc-800 md:px-3 hover:bg-zinc-100 focus:outline-none focus:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:bg-zinc-700 dark:focus:text-zinc-300" href="#">
                         Investigacion
                        </a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
   
             <div class="my-2 md:my-0 md:mx-2">
               <div class="w-full h-px bg-zinc-100 md:w-px md:h-4 md:bg-zinc-300 dark:bg-zinc-700"></div>
             </div>
   
             <!-- Button Group -->
             <div class="flex flex-wrap items-center gap-x-1.5">
               <!-- ========== LOGIN BTN ========== -->
               <a href="./src/views/login.php" title="Iniciar Sesion | Appdad" aria-label="Iniciar Sesion | Appdad" class="flex items-center justify-center p-2 text-xs font-semibold text-white bg-blue-600 border border-transparent rounded-lg shadow-sm sm:text-sm gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
               <i data-lucide="log-in" class="size-4"></i>   
                  Iniciar Sesion
               </a>
             </div>
             <!-- End Button Group -->
           </div>
         </div>
       </div>
     </nav>
   </header>
   <!-- ========== END HEADER ========== -->
   <!-- ========== MAIN CONTENT ========== -->
   <main class="flex flex-col items-center justify-center w-full h-auto p-6">
      <!-- ========== HERO ========== -->
      <section class="flex flex-col items-center justify-center pt-20 text-center max-w-7xl sm:pt-24 lg:pt-28 sm:gap-2 lg:gap-4">
         <div class="flex flex-col items-center justify-center gap-3 p-2 lg:gap-4 sm:p-2 lg:p-0 lg:px-4">
            <!-- ========== VERSION ========== -->
            <div class="flex items-center justify-center gap-2 p-1 px-2 text-xs font-semibold leading-6 bg-white border rounded-full text-zinc-600">
               <div class="flex items-center justify-center gap-1">
                  <i data-lucide="sparkles" class="flex size-4"></i>
                  <span>Version 0.0.2 Beta</span>
               </div>
               <a class="flex items-center justify-center gap-1 p-1.5 font-semibold text-white rounded-full bg-zinc-950 hover:bg-zinc-900" href="https://github.com/JesusOmarDev1/app-dad/releases/tag/Version" title="Ultima Actualizacion de la Aplicacion" aria-label="Ultima Actualizacion de la Aplicacion" target="_blank" rel="noopener noreferrer">
                  Leer Mas
                  <i data-lucide="external-link" class="size-4"></i>
               </a>
            </div>
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-zinc-950">Aplicacion hecha por estudiantes para estudiantes y profesores.</h1>
            <p class="px-2 font-medium text-zinc-500 text-md sm:px-4 lg:px-20 lg:text-md line-clamp-4 lg:line-clamp-none">Personalizable y colaborativo, es la herramienta perfecta para cualquier institución educativa.</p>
         </div>

         <div class="flex items-center justify-center gap-3">
            <button disabled class="flex items-center justify-center gap-1 px-4 py-3 text-sm font-semibold text-white bg-blue-600 rounded-lg shadow-sm hover:bg-blue-800 gap-x-2 disabled:opacity-50 disabled:pointer-events-none">
               <i data-lucide="circle-play" class="size-4"></i>
               Demo</button>
            <button disabled class="flex items-center justify-center gap-1 px-4 py-3 text-sm font-semibold bg-white border rounded-lg border-zinc-100 text-zinc-950 hover:bg-zinc-50 gap-x-2 disabled:opacity-50 disabled:pointer-events-none" href="./src/views/docs/blog/guia-de-uso.php" target="_blank" rel="noopener noreferrer">
               <i data-lucide="book-open-text" class="size-4"></i>
               Guia de Uso</button>
         </div>
      </section>
      <!-- ========== PREVIEW ========== -->
      <section class="flex items-center justify-center mt-10">
         <!-- ========== DESKTOP VERSION ========== -->
         <figure class="hidden lg:flex lg:flex-col relative max-w-full w-[60rem] h-auto rounded-lg">
            <div class="relative flex items-center max-w-[60rem] border border-zinc-100 bg-white rounded-t-lg py-2 px-24">
               <div class="absolute flex space-x-1 -translate-y-1 top-2/4 start-4">
                  <span class="bg-red-400 rounded-full size-2"></span>
                  <span class="bg-yellow-400 rounded-full size-2"></span>
                  <span class="bg-green-400 rounded-full size-2"></span>
               </div>
               <div class="select-none flex justify-center items-center size-full border border-zinc-100 text-[.25rem] font-semibold text-zinc-950 rounded-sm sm:text-[.5rem]">appdad.cucea.udg.mx</div>
               <div class="absolute flex space-x-1 -translate-y-1 top-2/4 end-4 text-zinc-950">
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
            <div class="p-1.5 bg-zinc-950 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)]">
               <img class=" max-w-full h-auto rounded-[1.25rem]" decoding="async" loading="lazy" src="https://placehold.co/280x560" title="Vista Previa Celular | Appdad" alt="Vista Previa Celular | Appdad">
            </div>
         </figure>
      </section>
      <!-- ========== FEATURES ========== -->
      <section class="mt-10">
         <div class="flex flex-col items-center justify-center gap-8 px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-3xl mx-auto lg:text-center">
               <div class="text-xl font-extrabold">
                  <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500">
                    Todo lo que necesitas en un solo lugar
                  </span>
               </div>
               <h3 class="mt-2 text-4xl font-extrabold text-zinc-950 sm:text-5xl lg:text-6xl">Caracteristicas</h3>
               <p class="mt-1 text-sm font-medium leading-8 tracking-wider text-zinc-600">Aqui encontraras todas las funcionalidades de la aplicacion.</p>
            </div>
            <div class="max-w-2xl mx-auto lg:max-w-4xl">
               <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                        <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="calendar-clock" class="text-white size-5"></i>
                        </div>
                        Carga Horaria
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-blue-100 text-blue-600">
                           <span class="inline-block bg-blue-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           Proximamente
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Gestiona y organiza los horarios de manera efectiva. Permite a alumnos y profesores planificar sus actividades académicas y extracurriculares con facilidad, asegurando un uso eficiente del tiempo.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                         <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="shapes" class="text-white size-5"></i>
                        </div>
                        Cursos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Ofrece y administra una variedad de cursos impartidos por profesores y expertos externos. Proporciona información detallada sobre cada curso y facilita la inscripción y el seguimiento del progreso académico.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                         <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="rocket" class="text-white size-5"></i>
                        </div>
                        Proyectos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Facilita la creación, gestión y colaboración en proyectos académicos y profesionales. Cualquier usuario puede proponer y seguir proyectos, fomentando la innovación y el trabajo en equipo.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                         <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="ticket-check" class="text-white size-5"></i>
                        </div>
                        Eventos
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-yellow-100 text-yellow-600">
                           <span class="inline-block bg-yellow-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           En proceso
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Organiza y participa en eventos académicos y extracurriculares. Mantente informado sobre conferencias, talleres y actividades, gestionando todos los detalles para asegurar una experiencia enriquecedora.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                         <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="id-card" class="text-white size-5"></i>
                        </div>
                        Tutorias
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-blue-100 text-blue-600">
                           <span class="inline-block bg-blue-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           Proximamente
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Proporciona apoyo académico a través de sesiones de tutoría. Permite a los tutores gestionar sus alumnos y planificar las sesiones de manera efectiva, asegurando un seguimiento personalizado del progreso de cada estudiante.</dd>
                  </div>
                  <div class="relative pl-16">
                     <dt class="text-sm font-semibold leading-7 text-black">
                         <div class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-zinc-950">
                          <i data-lucide="shield-check" class="text-white size-5"></i>
                        </div>
                        Seguridad
                        <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-green-100 text-green-600">
                           <span class="inline-block bg-green-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                           Actualizacion constante
                        </span>
                     </dt>
                     <dd class="mt-2 text-sm leading-7 text-zinc-500">Actualmente nuestro software garantiza un entorno seguro mediante acceso basado en roles (RBAC) con protección contra inyección SQL, manejo de sesiones en múltiples dispositivos, control de subida y administracion de archivos, etcetera. <a class="font-bold after:content-['_↗'] hover:text-orange-500" href="./src/views/docs/security/politica-de-seguridad.php" title="" aria-label="" target="_blank" rel="noopener noreferrer">Leer mas</a> </dd>
                  </div>
               </dl>
            </div>
         </div>
      </section>
      <!-- ========== CALL TO ACTION ========== -->
      <section class="w-full mt-10 bg-white md:px-20">
         <div class="mx-auto">
            <div class="relative flex p-8 overflow-hidden shadow-2xl sm:p-12 lg:p-16 bg-zinc-950 md:p-20 isolate rounded-3xl">
               <svg viewBox="0 0 1024 1024" class="absolute -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 left-1/2 ml-0 lg:-translate-x-1/2 lg:translate-y-0" aria-hidden="true"><circle cx="512" cy="512" r="512" fill="url(#a)" fill-opacity=".7"/><defs><radialGradient id="a"><stop stop-color="#ea580c"/><stop offset="1" stop-color="#ea580c"/></radialGradient></defs></svg>
               <div class="mx-auto text-center lg:mx-0 lg:flex-auto">
                  <h3 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Aumenta tu productividad y comienza a usar nuestra aplicacion hoy.</h3>
                  <div class="flex items-center justify-center mt-4 sm:mt-6 lg:mt-10 gap-x-6">
                     <a href="./src/views/login.php" title="Iniciar Sesion | Appdad" aria-label="Iniciar Sesion | Appdad" class="flex items-center justify-center px-4 py-3 text-xs font-bold text-white border rounded-lg shadow-sm border-zinc-100 hover:text-zinc-950 hover:bg-white sm:text-sm gap-x-2 disabled:opacity-50 disabled:pointer-events-none">
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
      <section class="px-6 mx-auto mt-10 text-sm max-w-7xl text-zinc-950">
         <div class="grid items-center gap-12 sm:grid-cols-2 lg:grid-cols-4 sm:px-6 lg:px-8">
            <div>
               <i data-lucide="tablet-smartphone" class="size-8"></i>
               <div class="bg-gradient-to-r from-zinc-200 via-zinc-50 to-transparent h-0.5 mt-6">
                  <div class="bg-zinc-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold">Responsiva</h3>
                  <p class="mt-1 text-zinc-500">La aplicacion es responsiva para todos los dispositivos.</p>
               </div>
            </div>

            <div>
               <i data-lucide="palette" class="size-8"></i>
               <div class="bg-gradient-to-r from-zinc-200 via-zinc-50 to-transparent h-0.5 mt-6">
                  <div class="bg-zinc-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold">Customizable</h3>
                  <p class="mt-1 text-zinc-500">La aplicacion cuenta con preferencias del usuario para customizar todo.</p>
               </div>
            </div>

            <div>
               <i data-lucide="tv-minimal-play" class="size-8"></i>
               <div class="bg-gradient-to-r from-zinc-200 via-zinc-50 to-transparent h-0.5 mt-6">
                  <div class="bg-zinc-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <div class="flex items-center gap-2">
                     <h3 class="text-lg font-semibold">Guias</h3>
                     <span class="inline-flex items-center gap-x-1.5 py-2 px-4 rounded-full text-xs font-medium bg-blue-100 text-blue-600">
                        <span class="inline-block bg-blue-600 rounded-full size-2 animate-pulse" aria-hidden="true"></span>
                        Proximamente
                     </span>
                  </div>
                  <p class="mt-1 text-zinc-500">La aplicacion cuenta con guias al igual que en redes sociales.</p>
               </div>
            </div>

            <div>
               <i data-lucide="headset" class="size-8"></i>
               <div class="bg-gradient-to-r from-zinc-200 via-zinc-50 to-transparent h-0.5 mt-6">
                  <div class="bg-zinc-400 w-9 h-0.5"></div>
               </div>
               <div class="mt-5">
                  <h3 class="text-lg font-semibold text-zinc-950">24/7 Soporte</h3>
                  <p class="mt-1 text-zinc-500">Contactanos sin importar el dia las 24 horas y los 7 dias de la semana.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- ========== FAQ ========== -->
      <section class="mt-10 sm:px-6">
         <div class="flex flex-col items-center justify-center gap-8 px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-3xl mx-auto lg:text-center">
               <div class="text-xl font-extrabold">
                  <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500">
                    Resuelve tus dudas
                  </span>
               </div>
               <h3 class="mt-2 text-4xl font-extrabold text-zinc-950 sm:text-5xl lg:text-6xl">FAQ</h3>
               <p class="mt-1 text-sm font-medium leading-8 tracking-wider text-zinc-600">Aqui encontraras todas las preguntas mas frecuentes.</p>
            </div>
             <div class="mx-auto text-sm max-w-7xl">
               <!-- Grid -->
               <div class="grid gap-4 sm:grid-cols-2">
                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Que sucede si no puedo acceder a la plataforma?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     Normalmente no habria problema al acceder con su codigo de estudiante o profesor y contraseña, pero si es asi, puedes contactar a soporte y estaremos dispuestos a atenderte de forma pertinente.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Es posible modificar mi información personal?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     Sí, puedes actualizar tus datos desde la sección de configuración de tu cuenta.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Cómo se gestiona la asistencia a los eventos?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     La asistencia se registra automáticamente mediante códigos QR que los participantes escanean al entrar y salir de los eventos.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Es posible inscribirse a más de un evento a la vez?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     Sí, puedes registrarte en todos los eventos disponibles que desees, siempre que no se solapen en horario y tenga cupos disponibles.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Qué debo hacer si mi constancia tiene errores?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     Contacta al organizador del evento para que realice las correcciones necesarias, si por alguna cosa no se te da solucion entonces contacta a soporte.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Cómo puedo notificar un problema técnico?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     En la sección de soporte, puedes reportar cualquier problema y nuestro equipo lo atenderá lo antes posible.
                   </p>
                 </div>
                 <!-- End Col -->

                 <div>
                   <h3 class="text-lg font-semibold text-zinc-800 dark:text-zinc-200">
                     ¿Puedo acceder a la plataforma fuera del horario de oficina?
                   </h3>
                   <p class="mt-2 text-zinc-600 dark:text-zinc-400">
                     Sí, la plataforma está disponible 24/7 para que puedas acceder cuando lo necesites.
                   </p>
                 </div>
                 <!-- End Col -->
               </div>
               <!-- End Grid -->
            </div>
         </div>
      </section>
      <!-- ========== FOOTER ========== --> 
      <footer class="w-full mx-auto mt-10 text-sm bg-white sm:px-6 max-w-7xl">
         <div class="grid gap-4 p-4 sm:grid-cols-2 lg:grid-cols-4">
            <!-- ========== RESOURCES ========== --> 
            <div>
               <h5 class="text-lg font-extrabold">Recursos</h5>
               <ul>
                  <li>
                     <a href="https://github.com/JesusOmarDev1/app-dad" target="_blank" rel="noopener noreferrer" title="Repositorio de Github | Appdad" aria-label="Repositorio de Github | Appdad" role="link">
                        Github
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ========== LEGAL ========== --> 
            <div>
               <h5 class="text-lg font-extrabold">Legal</h5>
                <ul>
                  <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Terminos de uso de privacidad
                     </a>
                  </li>
                  <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Politica de notificaciones
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Politica de privacidad de datos
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Politica de cookies
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Politica de seguridad de la informacion
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ========== OFFICIAL PAGES ========== --> 
            <div>
               <h5 class="text-lg font-extrabold">Paginas oficiales</h5>
                <ul>
                  <li>
                     <a href="https://www.cucea.udg.mx/" target="_blank" rel="noopener noreferrer" title="Cucea pagina oficial | Appdad" aria-label="Cucea pagina oficial | Appdad" role="link">
                        Cucea
                     </a>
                  </li>
                  <li>
                     <a href="https://cta.cucea.udg.mx/" target="_blank" rel="noopener noreferrer" title="CTA pagina oficial | Appdad" aria-label="CTA pagina oficial | Appdad" role="link">
                        CTA
                     </a>
                  </li>
                  <li>
                     <a href="https://leoalumnos.udg.mx/" target="_blank" rel="noopener noreferrer" title="Leo pagina oficial | Appdad" aria-label="Leo pagina oficial | Appdad" role="link">
                        Leo
                     </a>
                  </li>
                  <li>
                     <a href="https://cescolar.cucea.udg.mx/" target="_blank" rel="noopener noreferrer" title="Control escolar pagina oficial | Appdad" aria-label="Control escolar pagina oficial | Appdad" role="link">
                        Control Escolar
                     </a>
                  </li>
               </ul>
            </div>
            <!-- ========== GENERAL INFORMATION ========== --> 
            <div>
               <h5 class="text-lg font-extrabold">Informacion general</h5>
                <ul>
                  <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Acerca de
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Ubicacion
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        FAQ
                     </a>
                  </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Normatividad
                     </a>
                   </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Unidades Academicas
                     </a>
                   </li>
                   <li>
                     <a href="http://" target="_blank" rel="noopener noreferrer">
                        Investigacion
                     </a>
                   </li>
               </ul>
            </div>
         </div>
         <hr class="py-2">
         <!-- ========== INFO ========== --> 
         <div class="flex flex-col items-center justify-between gap-2 text-center sm:flex-row">
            <img src="./public/img/logo.svg" width="150" height="150" title="" alt="" aria-label="" role="img" loading="lazy" decoding="async" />
           <div>
             <ul>
               <li>
                  <p>© 2024, DEPARTAMENTO DE ADMINISTRACIÓN, CUCEA, UNIVERSIDAD DE GUADALAJARA</p>
               </li>
               <li>
                  <p><span class="font-bold">Ubicacion:</span> Modulo G-202</p>
               </li>
               <li>
                  <p><span class="font-bold">Telefono:</span> +52 33 3770 3300 Ext. 25083, 25080</p>
               </li>
               <li>
                  <p><span class="font-bold">Correo:</span> <a href="mailto:e.depto.administracion@cucea.udg.mx" target="_blank" rel="noopener noreferrer">e.depto.administracion@cucea.udg.mx</a></p>
               </li>
             </ul>
           </div>
            <div class="flex flex-col items-center gap-2">
               <span class="font-semibold">Siguenos en nuestras redes</span>
               <div>
                  <ul class="flex items-center justify-center gap-4">
                     <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                           <img src="./public/img/social/tiktok.svg" width="20" height="20" title="" alt="" aria-label="" role="img" loading="lazy" decoding="async" />
                        </a>
                     </li>
                     <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                           <img src="./public/img/social/facebook.svg" width="20" height="20" title="" alt="" aria-label="" role="img" loading="lazy" decoding="async" />
                        </a>
                     </li>
                      <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                           <img src="./public/img/social/youtube.svg" width="20" height="20" title="" alt="" aria-label="" role="img" loading="lazy" decoding="async" />
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         </div>
      </footer>
      
   </main>
   <!-- ========== END MAIN CONTENT ========== -->
   <script src="https://unpkg.com/lucide@latest"></script>
   <script>
     lucide.createIcons();
   </script>
   <script src="./node_modules/preline/preline.js"></script>
</body>

</html>