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
   <main class="w-full min-h-[2000px] relative flex flex-col items-center lg:block pt-28 pb-32 px-6 lg:px-0">

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
         
      <!-- 3D CUBE WRAPPER -->
      <div class="cube-wrapper relative lg:absolute lg:top-0 lg:left-0 lg:mt-[900px] lg:ml-[1000px] ">
         <div class="cube-scene">
            <div id="cube3d" class="cube">
               <!-- HARAP (May Photo) -->
               <div class="cube-face face-front">
                  <img src="{{ asset('HomePhoto.jpg') }}" alt="Yessha Blanco" class="face-img">
                  <span class="face-badge">Yessha Blanco</span>
               </div>

               <!-- LIKOD -->
               <div class="cube-face face-back">
                  <h3></h3>
                  <p></p>
               </div>

               <!-- KANAN -->
               <div class="cube-face face-right">
                  <h3>Skills</h3>
                  <p>React &bull; Laravel &bull; Tailwind</p>
               </div>

               <!-- KALIWA -->
               <div class="cube-face face-left">
                  <h3>Projects</h3>
                  <p>Portfolio & Web Apps</p>
               </div>

               <!-- ITAAS (Top) -->
               <div class="cube-face face-top">
                  <h3>Top View</h3>
               </div>

               <!-- ILALIM (Bottom) -->
               <div class="cube-face face-bottom">
                  <h3>Contact</h3>
               </div>
            </div>
         </div>
      </div>

   </main>

   <!-- 2. CSS STYLES (3D TRANSFORMS) -->
   <style>
   .cube-wrapper {
      display: flex;
      flex-direction: column;
      user-select: none;
   }

   .cube-hint {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 20px;
   }

   /* 3D SCENE CONTAINER */
   .cube-scene {
      width: 260px;
      height: 260px;
      perspective: 1000px; /* IMPORTANTE: Nagbibigay ng 3D depth */
   }

   /* THE 3D CUBE */
   .cube {
      width: 100%;
      height: 100%;
      position: relative;
      transform-style: preserve-3d; /* IMPORTANTE: 3D coordinates */
      cursor: grab;
      transition: transform 0.05s ease-out;
      transform: rotateX(-15deg) rotateY(35deg);
   }

   .cube:active {
      cursor: grabbing;
   }

   /* LAHAT NG 6 NA MUKHA */
   .cube-face {
      position: absolute;
      width: 260px;
      height: 260px;
      border: 2px solid rgba(219, 39, 119, 0.4);
      box-shadow: 0 0 35px rgba(0, 0, 0, 0.5);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 16px;
      color: white;
      box-sizing: border-box;
      overflow: hidden;
   }

   /* KULAY AT 3D POSITION NG BAWAT GILID (260px / 2 = 130px) */
   .face-front  { background: #160214; transform: rotateY(0deg) translateZ(130px); }
   .face-back   { background: #260522; transform: rotateY(180deg) translateZ(130px); }
   .face-right  { background: #1d4ed8; transform: rotateY(90deg) translateZ(130px); }
   .face-left   { background: #7e22ce; transform: rotateY(-90deg) translateZ(130px); }
   .face-top    { background: #eab308; transform: rotateX(90deg) translateZ(130px); color: #000; }
   .face-bottom { background: #be185d; transform: rotateX(-90deg) translateZ(130px); }

   .face-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .face-badge {
      position: absolute;
      bottom: 10px;
      background: rgba(0,0,0,0.6);
      backdrop-filter: blur(4px);
      padding: 4px 12px;
      border-radius: 9999px;
      font-size: 11px;
   }
   </style>

   <!-- 3. JAVASCRIPT: POINTER DRAG (Left, Right, Top, Bottom) -->
   <script>
   const cube = document.getElementById('cube3d');
   let isDragging = false;
   let startX = 0;
   let startY = 0;
   let rotX = -15; // Panimulang anggulo
   let rotY = 35;

   cube.addEventListener('pointerdown', (e) => {
      isDragging = true;
      startX = e.clientX;
      startY = e.clientY;
      cube.setPointerCapture(e.pointerId);
   });

   window.addEventListener('pointermove', (e) => {
      if (!isDragging) return;

      const deltaX = e.clientX - startX;
      const deltaY = e.clientY - startY;

      // Sensitivity speed: 0.5
      rotY += deltaX * 0.5; // Left & Right rotation
      rotX -= deltaY * 0.5; // Top & Bottom rotation (inverted para natural ang hatak)

      // I-apply ang 3D transform
      cube.style.transform = `rotateX(${rotX}deg) rotateY(${rotY}deg)`;

      startX = e.clientX;
      startY = e.clientY;
   });

   window.addEventListener('pointerup', (e) => {
      isDragging = false;
   });
   </script>

</body>
</html>