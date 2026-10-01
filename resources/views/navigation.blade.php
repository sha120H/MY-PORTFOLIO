<header class="fixed top-0 left-0 w-full z-30 px-4 sm:px-8 lg:px-16 py-4 flex items-center justify-between bg-transparent">
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

   <!-- Mobile Navigation -->
   <nav class="flex md:hidden max-w-[62%] overflow-x-auto no-scrollbar py-1">
      <ul class="flex items-center gap-1.5 list-none m-0 p-0">
         <li>
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-2.5 py-1 text-[13px] rounded border {{ request()->routeIs('home') ? 'border-pink-600 bg-pink-900/80 text-white font-bold' : 'border-pink-900/60 text-pink-200 bg-black/40' }} font-['Franklin_Gothic_Medium',sans-serif]">
               Home
            </a>
         </li>
         <li>
            <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-2.5 py-1 text-[13px] rounded border {{ request()->routeIs('about') ? 'border-pink-600 bg-pink-900/80 text-white font-bold' : 'border-pink-900/60 text-pink-200 bg-black/40' }} font-['Franklin_Gothic_Medium',sans-serif]">
               About
            </a>
         </li>
         <li>
            <a href="{{ route('skills') }}" class="inline-flex items-center justify-center px-2.5 py-1 text-[13px] rounded border {{ request()->routeIs('skills') ? 'border-pink-600 bg-pink-900/80 text-white font-bold' : 'border-pink-900/60 text-pink-200 bg-black/40' }} font-['Franklin_Gothic_Medium',sans-serif]">
               Skills
            </a>
         </li>
         <li>
            <a href="{{ route('education') }}" class="inline-flex items-center justify-center px-2.5 py-1 text-[13px] rounded border {{ request()->routeIs('education') ? 'border-pink-600 bg-pink-900/80 text-white font-bold' : 'border-pink-900/60 text-pink-200 bg-black/40' }} font-['Franklin_Gothic_Medium',sans-serif]">
               Education
            </a>
         </li>
         <li>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-2.5 py-1 text-[13px] rounded border {{ request()->routeIs('contact') ? 'border-pink-600 bg-pink-900/80 text-white font-bold' : 'border-pink-900/60 text-pink-200 bg-black/40' }} font-['Franklin_Gothic_Medium',sans-serif]">
               Contact
            </a>
         </li>
      </ul>
   </nav>
</header>