<!DOCTYPE html>
<html lang="en" class="[color-scheme:dark]">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio - Home</title>

   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full min-h-screen overflow-x-hidden overflow-y-auto bg-[linear-gradient(to_bottom,rgb(19,18,18)_0%,rgb(70,1,49)_45%,#180214_75%,#0a0108_100%)] bg-fixed bg-no-repeat m-0 p-0 box-border select-none">

   @include('navigation')

   <!-- Main Container: min-h-[1250px] at pb-32 para BUONG makita ang cube nang walang putol sa ilalim -->
   <main class="w-full min-h-[800px] relative flex flex-col items-center lg:block pt-28 pb-32 px-6 lg:px-0">

      <!-- PROFILE PICTURE: lg:absolute para HINDI sumama pababa sa scroll -->
      <div class="relative lg:absolute lg:top-0 lg:left-0 lg:mt-[180px] lg:ml-[240px] w-[250px] h-[250px] sm:w-[320px] sm:h-[320px] lg:w-[380px] lg:h-[380px] rounded-full p-2 bg-gradient-to-tr from-[rgb(88,1,55)] via-[rgb(180,30,110)]/40 to-[rgb(88,1,55)] border-2 border-[rgb(88,1,55)] shadow-[0_0_50px_rgba(219,39,119,0.35)] flex items-center justify-center shrink-0">
         <div class="w-full h-full rounded-full overflow-hidden bg-[#160312] border-2 border-[rgb(88,1,55)]">
            <img src="{{ asset('myphoto.jpg') }}" alt="Yessha Blanco" class="w-full h-full object-cover object-center">
         </div>
      </div>

      <!-- HOME CONTENT: lg:absolute para HINDI sumama pababa sa scroll -->
      <div class="mt-8 lg:mt-0 text-center lg:text-left flex flex-col items-center lg:items-start max-w-xl lg:max-w-none">
         <h1 class="lg:absolute lg:top-0 lg:left-0 lg:mt-[250px] lg:ml-[870px] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] font-bold text-[32px] sm:text-[38px] lg:text-[44px] leading-tight">
            <span class="text-white">Hi, I'm </span>
            <span class="bg-gradient-to-r from-[#ff4d9e] via-[#f472b6] to-[#c084fc] bg-clip-text text-transparent">
               Yessha Blanco
            </span>
         </h1>

         <p class="mt-2 lg:mt-0 lg:absolute lg:top-0 lg:left-0 lg:mt-[330px] lg:ml-[870px] text-[#f9a8d4] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] font-semibold text-[20px] sm:text-[23px] lg:text-[26px]">
            A web developer and designer
         </p>

         <p class="mt-4 lg:mt-0 lg:absolute lg:top-0 lg:left-0 lg:mt-[400px] lg:ml-[870px] text-[rgb(201,167,167)] font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] text-[16px] sm:text-[18px] lg:text-[20px] leading-normal">
            Developing web-based management systems, relational databases, <br class="hidden sm:inline">
            and clean modern interfaces. Blending full-stack programming with <br class="hidden sm:inline">
            technical drafting foundations.
         </p>
      </div>
         
     