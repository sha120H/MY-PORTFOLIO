<header class="fixed top-0 left-0 w-full z-30 px-4 sm:px-8 lg:px-16 py-4 flex items-center justify-between gap-3 bg-transparent">
   <a href="{{ route('home') }}" class="no-underline flex items-center shrink-0">
      <h1 class="text-[20px] sm:text-[28px] lg:text-[35px] font-bold font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] inline-flex items-center">
         <span class="text-white">It's </span>
         <span class="bg-gradient-to-r from-[#ff4d9e] via-[#f472b6] to-[#c084fc] bg-clip-text text-transparent ml-1.5 sm:ml-2">
            me, sha
         </span>
      </h1>
   </a> 

   <!-- Desktop Navigation Menu (Visible sa tablet at desktop) -->
   <nav class="hidden md:flex">
      <ul class="flex items-center gap-1.5 sm:gap-2.5 lg:gap-5 list-none m-0 p-0 text-center">
         <li>
            <button class="flex w-auto h-[36px] sm:h-[40px] rounded-[5px] border-2 border-solid {{ request()->routeIs('home') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] shadow-[0_0_18px_rgba(219,39,119,0.6)]' : 'border-[rgb(180,30,110)]/70 hover:border-pink-400 bg-transparent' }} px-0 overflow-hidden transition-all duration-300">
               <a href="{{ route('home') }}" class="relative z-10 inline-flex items-center justify-center w-auto h-full px-[8px] sm:px-[12px] lg:px-[14px] text-[15px] sm:text-[18px] lg:text-[20px] {{ request()->routeIs('home') ? 'text-white font-bold' : 'text-[rgb(215,185,185)] hover:text-white' }} no-underline font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] before:content-[''] before:absolute before:top-0 before:left-0 before:w-0 before:h-full before:bg-gradient-to-r before:from-[rgb(88,1,55)] before:to-[rgb(140,20,80)] before:-z-10 before:transition-all before:duration-400 hover:before:w-[120%]">
                  Home
               </a>
            </button>
         </li>

         <li>
            <button class="flex w-auto h-[36px] sm:h-[40px] rounded-[5px] border-2 border-solid {{ request()->routeIs('about') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] shadow-[0_0_18px_rgba(219,39,119,0.6)]' : 'border-[rgb(180,30,110)]/70 hover:border-pink-400 bg-transparent' }} px-0 overflow-hidden transition-all duration-300">
               <a href="{{ route('about') }}" class="relative z-10 inline-flex items-center justify-center w-auto h-full px-[8px] sm:px-[12px] lg:px-[14px] text-[15px] sm:text-[18px] lg:text-[20px] {{ request()->routeIs('about') ? 'text-white font-bold' : 'text-[rgb(215,185,185)] hover:text-white' }} no-underline font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] before:content-[''] before:absolute before:top-0 before:left-0 before:w-0 before:h-full before:bg-gradient-to-r before:from-[rgb(88,1,55)] before:to-[rgb(140,20,80)] before:-z-10 before:transition-all before:duration-400 hover:before:w-[120%]">
                  About
               </a>
            </button>
         </li>

         <li>
            <button class="flex w-auto h-[36px] sm:h-[40px] rounded-[5px] border-2 border-solid {{ request()->routeIs('skills') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] shadow-[0_0_18px_rgba(219,39,119,0.6)]' : 'border-[rgb(180,30,110)]/70 hover:border-pink-400 bg-transparent' }} px-0 overflow-hidden transition-all duration-300">
               <a href="{{ route('skills') }}" class="relative z-10 inline-flex items-center justify-center w-auto h-full px-[8px] sm:px-[12px] lg:px-[14px] text-[15px] sm:text-[18px] lg:text-[20px] {{ request()->routeIs('skills') ? 'text-white font-bold' : 'text-[rgb(215,185,185)] hover:text-white' }} no-underline font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] before:content-[''] before:absolute before:top-0 before:left-0 before:w-0 before:h-full before:bg-gradient-to-r before:from-[rgb(88,1,55)] before:to-[rgb(140,20,80)] before:-z-10 before:transition-all before:duration-400 hover:before:w-[120%]">
                  Skills
               </a>
            </button>
         </li>

         <li>
            <button class="flex w-auto h-[36px] sm:h-[40px] rounded-[5px] border-2 border-solid {{ request()->routeIs('education') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] shadow-[0_0_18px_rgba(219,39,119,0.6)]' : 'border-[rgb(180,30,110)]/70 hover:border-pink-400 bg-transparent' }} px-0 overflow-hidden transition-all duration-300">
               <a href="{{ route('education') }}" class="relative z-10 inline-flex items-center justify-center w-auto h-full px-[8px] sm:px-[12px] lg:px-[14px] text-[15px] sm:text-[18px] lg:text-[20px] {{ request()->routeIs('education') ? 'text-white font-bold' : 'text-[rgb(215,185,185)] hover:text-white' }} no-underline font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] before:content-[''] before:absolute before:top-0 before:left-0 before:w-0 before:h-full before:bg-gradient-to-r before:from-[rgb(88,1,55)] before:to-[rgb(140,20,80)] before:-z-10 before:transition-all before:duration-400 hover:before:w-[120%]">
                  Education
               </a>
            </button>
         </li>

         <li>
            <button class="flex w-auto h-[36px] sm:h-[40px] rounded-[5px] border-2 border-solid {{ request()->routeIs('contact') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] shadow-[0_0_18px_rgba(219,39,119,0.6)]' : 'border-[rgb(180,30,110)]/70 hover:border-pink-400 bg-transparent' }} px-0 overflow-hidden transition-all duration-300">
               <a href="{{ route('contact') }}" class="relative z-10 inline-flex items-center justify-center w-auto h-full px-[8px] sm:px-[12px] lg:px-[14px] text-[15px] sm:text-[18px] lg:text-[20px] {{ request()->routeIs('contact') ? 'text-white font-bold' : 'text-[rgb(215,185,185)] hover:text-white' }} no-underline font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] before:content-[''] before:absolute before:top-0 before:left-0 before:w-0 before:h-full before:bg-gradient-to-r before:from-[rgb(88,1,55)] before:to-[rgb(140,20,80)] before:-z-10 before:transition-all before:duration-400 hover:before:w-[120%]">
                  Contact
               </a>
            </button>
         </li>
      </ul>
   </nav>

   <button id="menu-open" type="button" aria-label="Open menu" aria-controls="mobile-drawer" aria-expanded="false" class="md:hidden shrink-0 inline-flex items-center justify-center w-10 h-10 rounded border border-pink-700/70 bg-black/40 text-pink-200 hover:text-white hover:border-pink-400 transition-all">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
   </button>
</header>

<!-- Mobile Overlay -->
<div id="menu-overlay" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 md:hidden"></div>

<aside id="mobile-drawer" aria-hidden="true" class="fixed top-0 right-0 z-50 h-full w-[75%] max-w-[300px] translate-x-full transition-transform duration-300 ease-in-out md:hidden bg-[linear-gradient(to_top,rgba(0,0,0,0.959),rgb(70,1,49),rgb(19,18,18))] border-l border-pink-900/60 shadow-[-10px_0_35px_rgba(0,0,0,0.6)] flex flex-col">
   <div class="flex items-center justify-between px-5 py-4 border-b border-pink-900/50">
      <span class="text-[18px] font-bold text-pink-200 font-['Franklin_Gothic_Medium',sans-serif] tracking-wider uppercase">Menu</span>
      <button id="menu-close" type="button" aria-label="Close menu" class="inline-flex items-center justify-center w-9 h-9 rounded border border-pink-700/70 bg-black/40 text-pink-200 hover:text-white hover:border-pink-400 transition-all">
         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6l12 12M18 6L6 18" />
         </svg>
      </button>
   </div>

   <ul class="flex flex-col gap-3 list-none m-0 p-5">
      <li>
         <a href="{{ route('home') }}" class="flex items-center w-full px-4 py-3 text-[18px] rounded-md border-2 no-underline {{ request()->routeIs('home') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] text-white font-bold shadow-[0_0_18px_rgba(219,39,119,0.5)]' : 'border-[rgb(180,30,110)]/60 text-[rgb(215,185,185)] hover:text-white hover:border-pink-400 bg-transparent' }} font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] transition-all">
            Home
         </a>
      </li>
      <li>
         <a href="{{ route('about') }}" class="flex items-center w-full px-4 py-3 text-[18px] rounded-md border-2 no-underline {{ request()->routeIs('about') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] text-white font-bold shadow-[0_0_18px_rgba(219,39,119,0.5)]' : 'border-[rgb(180,30,110)]/60 text-[rgb(215,185,185)] hover:text-white hover:border-pink-400 bg-transparent' }} font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] transition-all">
            About
         </a>
      </li>
      <li>
         <a href="{{ route('skills') }}" class="flex items-center w-full px-4 py-3 text-[18px] rounded-md border-2 no-underline {{ request()->routeIs('skills') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] text-white font-bold shadow-[0_0_18px_rgba(219,39,119,0.5)]' : 'border-[rgb(180,30,110)]/60 text-[rgb(215,185,185)] hover:text-white hover:border-pink-400 bg-transparent' }} font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] transition-all">
            Skills
         </a>
      </li>
      <li>
         <a href="{{ route('education') }}" class="flex items-center w-full px-4 py-3 text-[18px] rounded-md border-2 no-underline {{ request()->routeIs('education') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] text-white font-bold shadow-[0_0_18px_rgba(219,39,119,0.5)]' : 'border-[rgb(180,30,110)]/60 text-[rgb(215,185,185)] hover:text-white hover:border-pink-400 bg-transparent' }} font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] transition-all">
            Education
         </a>
      </li>
      <li>
         <a href="{{ route('contact') }}" class="flex items-center w-full px-4 py-3 text-[18px] rounded-md border-2 no-underline {{ request()->routeIs('contact') ? 'border-pink-700 bg-gradient-to-r from-[rgb(65,1,55)] to-[rgb(100,20,80)] text-white font-bold shadow-[0_0_18px_rgba(219,39,119,0.5)]' : 'border-[rgb(180,30,110)]/60 text-[rgb(215,185,185)] hover:text-white hover:border-pink-400 bg-transparent' }} font-['Franklin_Gothic_Medium','Arial_Narrow',Arial,sans-serif] transition-all">
            Contact
         </a>
      </li>
   </ul>
</aside>

<script>
   (function () {
      var openBtn = document.getElementById('menu-open');
      var closeBtn = document.getElementById('menu-close');
      var overlay = document.getElementById('menu-overlay');
      var drawer = document.getElementById('mobile-drawer');
      if (!openBtn || !closeBtn || !overlay || !drawer) return;

      function openMenu() {
         drawer.classList.remove('translate-x-full');
         overlay.classList.remove('opacity-0', 'pointer-events-none');
         drawer.setAttribute('aria-hidden', 'false');
         openBtn.setAttribute('aria-expanded', 'true');
         document.body.style.overflow = 'hidden';
      }

      function closeMenu() {
         drawer.classList.add('translate-x-full');
         overlay.classList.add('opacity-0', 'pointer-events-none');
         drawer.setAttribute('aria-hidden', 'true');
         openBtn.setAttribute('aria-expanded', 'false');
         document.body.style.overflow = '';
      }

      openBtn.addEventListener('click', openMenu);
      closeBtn.addEventListener('click', closeMenu);
      overlay.addEventListener('click', closeMenu);
      document.addEventListener('keydown', function (e) {
         if (e.key === 'Escape') closeMenu();
      });

      window.addEventListener('resize', function () {
         if (window.innerWidth >= 768) closeMenu();
      });
   })();
</script>