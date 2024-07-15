<?php



?>

<!DOCTYPE html>
<html lang="es-MX" class="antialiased">

<head>
   <meta charset="UTF-8">
   <!-- ========== PWA ========== -->
   <link rel="manifest" href="./manifest.json" />
   <!-- ========== DEFAULT ========== -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../../public/favicon.ico" type="image/x-icon">
   <!-- ========== RESOURCES ========== -->
   <link rel="stylesheet" href="../resources/css/output.css">
   <link rel="stylesheet" href="../vendor/sweetalert2/sweetalert2.min.css">
   <!-- ========== SEO ========== -->
   <title>Iniciar Sesion | Appdad</title>

</head>

<body class="flex flex-col items-center justify-center w-full h-auto p-4 bg-no-repeat bg-gradient-to-tr from-secondary-500 via-purple-600 to-primary-500 min-h-dvh">
   <!-- ========== MAIN CONTENT ========== -->
   <main class="flex flex-col items-center justify-center gap-1">
      <section class="flex flex-col gap-3 p-6 leading-6 bg-white rounded-lg shadow-lg border-terciary-300 backdrop-blur-2xl sm:p-7 w-80 md:w-96 border-1 text-terciary-950">
         <!-- ========== HEADER FORM ========== -->
         <div class="flex items-center justify-center w-full">
            <img class="object-fill w-48 h-32 aspect-auto" src="../../public/img/logo.webp" alt="Logo | Appdad" title="Logo | Appdad" aria-label="Logo | Appdad" loading="lazy" decoding="async">
         </div>
         <!-- ========== END ========== -->
         <!-- ========== FORM ========== -->
         <form id="LoginForm" class="flex flex-col w-full gap-4 text-sm" action="../tests/LoginTest.php" method="POST" role="form" title="" aria-label="">
            <!-- ========== USERNAME INPUT ========== -->
            <div class="max-w-sm">
               <div>
                  <label for="username" class="block mb-2 text-sm font-semibold">Usuario</label>
                  <div class="relative">
                     <input type="text" id="username" name="username" class="block w-full px-4 py-3 text-sm border rounded-lg border-terciary-200 focus:border-secondary-500 disabled:opacity-50 disabled:pointer-events-none" aria-describedby="username-error-helper" placeholder="Ingresa tu usuario...">
                  </div>
                  <p class="mt-2 text-xs font-semibold text-terciary-400">Nunca compartiremos tu informacion.</p>
               </div>
            </div>
            <!-- ========== END ========== -->
            <!-- ========== PASSWORD INPUT ========== -->
            <div class="max-w-sm">
               <div class="max-w-sm">
                  <label for="password" class="block mb-2 text-sm font-semibold">Contraseña</label>
                  <div class="flex">
                     <div class="relative flex-1">
                        <input type="password" name="password" maxlength="15" minlength="8" id="password" class="block w-full px-4 py-3 text-sm border rounded-md border-terciary-200 focus:border-secondary-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Ingresa tu contraseña...">
                        <!-- ========== PASSWORD POPOVER ========== -->
                        <div id="hs-strong-password-popover" class="absolute z-10 hidden w-full p-4 bg-white rounded-lg shadow-md">
                           <div id="hs-strong-password-in-popover" data-hs-strong-password='{
                                "target": "#password",
                                "hints": "#hs-strong-password-popover",
                                "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-blue-500 opacity-50 mx-1",
                                "mode": "popover",
                                "specialCharactersSet": "!?<>@#$%",
                                "minLength": "8",
                                "maxLength": "15"
                              }' class="flex mt-2 -mx-1">
                           </div>
                           <div class="my-2">
                              <div>
                                 <span class="text-sm text-terciary-950">Nivel de Seguridad:</span>
                                 <span data-hs-strong-password-hints-weakness-text='["Vacio", "Debil", "Medio", "Fuerte", "Muy Fuerte", "Excelente"]' class="text-sm font-semibold text-gray-800 dark:text-neutral-200"></span>
                              </div>

                              <h4 class="mt-2 text-sm font-semibold text-gray-800">
                                 Tu contraseña debe contener al menos:
                              </h4>
                           </div>

                           <ul class="space-y-1 text-sm text-gray-500">
                              <li data-hs-strong-password-hints-rule-text="min-length" class="flex items-center hs-strong-password-active:text-teal-500 gap-x-2">
                                 <span class="hidden" data-check="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="size-4">
                                       <path d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <span data-uncheck="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg>
                                 </span>
                                 8 a 15 caracteres.
                              </li>
                              <li data-hs-strong-password-hints-rule-text="lowercase" class="flex items-center hs-strong-password-active:text-teal-500 gap-x-2">
                                 <span class="hidden" data-check="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="size-4">
                                       <path d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <span data-uncheck="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg>
                                 </span>
                                 Una letra minuscula.
                              </li>
                              <li data-hs-strong-password-hints-rule-text="uppercase" class="flex items-center hs-strong-password-active:text-teal-500 gap-x-2">
                                 <span class="hidden" data-check="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="size-4">
                                       <path d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <span data-uncheck="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg>
                                 </span>
                                 Una letra mayuscula.
                              </li>
                              <li data-hs-strong-password-hints-rule-text="numbers" class="flex items-center hs-strong-password-active:text-teal-500 gap-x-2">
                                 <span class="hidden" data-check="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="size-4">
                                       <path d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <span data-uncheck="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg>
                                 </span>
                                 Un numero (e.g. 1234567890).
                              </li>
                              <li data-hs-strong-password-hints-rule-text="special-characters" class="flex items-center hs-strong-password-active:text-teal-500 gap-x-2">
                                 <span class="hidden" data-check="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="size-4">
                                       <path d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                 </span>
                                 <span data-uncheck="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" class="size-4">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                                    </svg>
                                 </span>
                                 Un caracter especial (e.g. !?<>@#$%).
                              </li>
                           </ul>
                        </div>
                        <!-- ========== END PASSWORD POPOVER ========== -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- ========== END ========== -->
            <button id="btn-login" class="flex items-center justify-center w-full gap-2 py-3 font-bold text-center text-white transition-colors border rounded-lg bg-secondary-600 hover:bg-secondary-800 hover:cursor-pointer text-md disabled:opacity-50 disabled:cursor-not-allowed" type="submit">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
               </svg>
               Iniciar Sesion con Usuario</button>
         </form>
         <!-- ========== END FORM ========== -->
         <!-- ========== OR ========== -->
         <div class="flex items-center justify-center gap-2 font-medium text-md">
            <div class="flex-1 h-[1px] bg-terciary-100"></div>
            <span>o</span>
            <div class="flex-1 h-[1px] bg-terciary-100"></div>
         </div>
         <!-- ========== END ========== -->
         <!-- ========== GOOGLE FORM ========== -->
         <form class="flex w-full text-sm" action="" enctype="" method="" role="" title="" aria-label="">
            <button disabled class="flex items-center justify-center w-full gap-2 py-3 font-medium text-white bg-black border rounded-lg shadow-sm disabled:opacity-50 disabled:cursor-not-allowed" type="submit">
               <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                  <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917" />
                  <path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691" />
                  <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44" />
                  <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917" />
               </svg> Iniciar Sesion con Google</button>
         </form>
         <!-- ========== END GOOGLE FORM ========== -->
         <!-- ========== LEGAL ========== -->
         <p class="w-full text-xs text-center">Al continuar, acepta los <a class="font-bold underline hover:text-secondary-600" href="" title="" aria-label="" target="_blank" rel="noopener noreferrer">Términos de servicio</a> y la <a class="font-bold underline hover:text-secondary-600" href="" title="" aria-label="" target="_blank" rel="noopener noreferrer">Política de privacidad</a> de appdad, recibir correos electrónicos periódicos con actualizaciones y nuestra <a class="font-bold underline hover:text-secondary-600" href="" title="" aria-label="" target="_blank" rel="noopener noreferrer">Configuracion de Notificaciones</a> predeterminada.</p>
         <!-- ========== END ========== -->
      </section>
      <!-- ========== VERSION ========== -->
      <footer>
         <p class="font-semibold tracking-wider text-white text-md">Version 0.0.2 Beta</p>
      </footer>
      <!-- ========== END ========== -->
   </main>
   <!-- ========== END MAIN CONTENT ========== -->
   <!-- ========== FOOTER ========== -->
   <footer>

   </footer>
   <!-- ========== END FOOTER ========== -->
   <script src="../vendor/preline/preline.js"></script>
   <script src="../vendor/sweetalert2/sweetalert2.min.js"></script>

   <script>
      const LoginForm = document.querySelector("#LoginForm");
      LoginForm.addEventListener("submit", (e) => {
         e.preventDefault();
         const username = document.querySelector("#username").value;
         const password = document.querySelector("#password").value;
         const Error = Swal.mixin({
            toast: true,
            position: "bottom-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
               toast.onmouseenter = Swal.stopTimer;
               toast.onmouseleave = Swal.resumeTimer;
            },
         });
         const Success = Swal.mixin({
            toast: true,
            position: "bottom-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
               toast.onmouseenter = Swal.stopTimer;
               toast.onmouseleave = Swal.resumeTimer;
            },
         });
         if (!username || !password) {
            Error.fire({
               icon: "error",
               title: "¡Todos los campos son requeridos!",
            });
            return;
         }
         Success.fire({
            icon: "success",
            title: "Redirigiendo...",
         });
         LoginForm.submit();
      });
   </script>

</body>

</html>