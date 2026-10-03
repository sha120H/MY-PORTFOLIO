<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Skills</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        .badge-html:hover { border-color: #f97316 !important; color: #fb923c !important; background-color: rgba(249, 115, 22, 0.12) !important; box-shadow: 0 0 14px rgba(249, 115, 22, 0.4) !important; }
        .badge-css:hover { border-color: #38bdf8 !important; color: #7dd3fc !important; background-color: rgba(56, 189, 248, 0.12) !important; box-shadow: 0 0 14px rgba(56, 189, 248, 0.4) !important; }
        .badge-js:hover { border-color: #facc15 !important; color: #fde047 !important; background-color: rgba(250, 204, 21, 0.14) !important; box-shadow: 0 0 16px rgba(250, 204, 21, 0.45) !important; }
        .badge-php:hover { border-color: #818cf8 !important; color: #a5b4fc !important; background-color: rgba(129, 140, 248, 0.12) !important; box-shadow: 0 0 14px rgba(129, 140, 248, 0.4) !important; }
        .badge-python:hover { border-color: #22d3ee !important; color: #67e8f9 !important; background-color: rgba(34, 211, 238, 0.12) !important; box-shadow: 0 0 14px rgba(34, 211, 238, 0.4) !important; }
        .badge-java:hover { border-color: #f43f5e !important; color: #fb7185 !important; background-color: rgba(244, 63, 94, 0.12) !important; box-shadow: 0 0 14px rgba(244, 63, 94, 0.4) !important; }
        .badge-sql:hover { border-color: #34d399 !important; color: #6ee7b7 !important; background-color: rgba(52, 211, 153, 0.12) !important; box-shadow: 0 0 14px rgba(52, 211, 153, 0.4) !important; }

        .badge-laravel:hover { border-color: #ef4444 !important; color: #f87171 !important; background-color: rgba(239, 68, 68, 0.14) !important; box-shadow: 0 0 14px rgba(239, 68, 68, 0.4) !important; }
        .badge-node:hover { border-color: #22c55e !important; color: #4ade80 !important; background-color: rgba(34, 197, 94, 0.12) !important; box-shadow: 0 0 14px rgba(34, 197, 94, 0.4) !important; }
        .badge-mysql:hover { border-color: #fbbf24 !important; color: #fcd34d !important; background-color: rgba(251, 191, 36, 0.12) !important; box-shadow: 0 0 14px rgba(251, 191, 36, 0.4) !important; }
        .badge-tailwind:hover { border-color: #06b6d4 !important; color: #22d3ee !important; background-color: rgba(6, 182, 212, 0.12) !important; box-shadow: 0 0 14px rgba(6, 182, 212, 0.4) !important; }

        .badge-ai:hover { border-color: #f59e0b !important; color: #fbbf24 !important; background-color: rgba(245, 158, 11, 0.12) !important; box-shadow: 0 0 14px rgba(245, 158, 11, 0.4) !important; }
        .badge-corel:hover { border-color: #a3e635 !important; color: #bef264 !important; background-color: rgba(163, 230, 53, 0.12) !important; box-shadow: 0 0 14px rgba(163, 230, 53, 0.4) !important; }
        .badge-sketchup:hover { border-color: #ef4444 !important; color: #f87171 !important; background-color: rgba(239, 68, 68, 0.12) !important; box-shadow: 0 0 14px rgba(239, 68, 68, 0.4) !important; }
        .badge-canva:hover { border-color: #2dd4bf !important; color: #5eead4 !important; background-color: rgba(45, 212, 191, 0.12) !important; box-shadow: 0 0 14px rgba(45, 212, 191, 0.4) !important; }
        .badge-googlesites:hover { border-color: #60a5fa !important; color: #93c5fd !important; background-color: rgba(96, 165, 250, 0.12) !important; box-shadow: 0 0 14px rgba(96, 165, 250, 0.4) !important; }

        .badge-composer:hover { border-color: #d97706 !important; color: #fbbf24 !important; background-color: rgba(217, 119, 6, 0.12) !important; box-shadow: 0 0 14px rgba(217, 119, 6, 0.4) !important; }
        .badge-docker:hover { border-color: #38bdf8 !important; color: #7dd3fc !important; background-color: rgba(56, 189, 248, 0.12) !important; box-shadow: 0 0 14px rgba(56, 189, 248, 0.4) !important; }

    </style>
</head>

<body class="w-full min-h-[100vh] pb-32 overflow-x-hidden bg-[linear-gradient(to_top,rgba(0,0,0,0.959),rgb(70,1,49),rgb(19,18,18))] m-0 p-0 box-border select-none">

@include('navigation')

    <div class="w-full flex justify-center pt-[130px] z-20">
        <div class="inline-flex items-center text-center justify-center text-[rgb(201,167,167)] font-['Franklin_Gothic_Medium'] text-[26px] border-2 border-solid border-[rgb(88,1,55)] bg-transparent px-[40px] py-[8px] tracking-widest shadow-lg">
            TOOLS
        </div>
    </div>

    <!-- Connector Lines -->
    <div class="w-full max-w-4xl mx-auto h-[75px] hidden md:block relative">
        <svg class="w-full h-full" viewBox="0 0 800 75" preserveAspectRatio="none">
            <path d="M400,0 L70,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
            <path d="M400,0 L200,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
            <path d="M400,0 L330,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
            <path d="M400,0 L470,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
            <path d="M400,0 L600,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
            <path d="M400,0 L730,75" stroke="rgb(88, 1, 55)" stroke-width="3" fill="none" />
        </svg>
    </div>

    <div class="relative w-full max-w-5xl mx-auto mt-2 px-4">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-[rgb(201,167,167)]">
            
            <!-- Tool 1: Google Sheets -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/gss.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="Google Sheets" />
                <div class="hidden w-[60px] h-[60px] rounded bg-emerald-950/80 border border-emerald-500/40 items-center justify-center text-emerald-300 font-bold text-sm">
                    Sheets
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">Google Sheets</span>
            </div>

            <!-- Tool 2: MS Access -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/access.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="Access" />
                <div class="hidden w-[60px] h-[60px] rounded bg-rose-950/80 border border-rose-500/40 items-center justify-center text-rose-300 font-bold text-sm">
                    Access
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">MS Access</span>
            </div>

            <!-- Tool 3: MS Excel -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/excel.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="Excel" />
                <div class="hidden w-[60px] h-[60px] rounded bg-green-950/80 border border-green-500/40 items-center justify-center text-green-300 font-bold text-base">
                    Excel
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">MS Excel</span>
            </div>

            <!-- Tool 4: MS PowerPoint -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/ppt.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="PowerPoint" />
                <div class="hidden w-[60px] h-[60px] rounded bg-orange-950/80 border border-orange-500/40 items-center justify-center text-orange-300 font-bold text-sm">
                    PPT
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">PowerPoint</span>
            </div>

            <!-- Tool 5: MS Word -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/word.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="Word" />
                <div class="hidden w-[60px] h-[60px] rounded bg-blue-950/80 border border-blue-500/40 items-center justify-center text-blue-300 font-bold text-sm">
                    Word
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">MS Word</span>
            </div>

            <!-- Tool 6: Google Sites -->
            <div class="flex flex-col items-center p-3 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/50 transition-all hover:-translate-y-1">
                <img src="{{ asset('photo/gs.png') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" class="w-[60px] h-[60px] object-contain rounded" alt="Google Sites" />
                <div class="hidden w-[60px] h-[60px] rounded bg-sky-950/80 border border-sky-500/40 items-center justify-center text-sky-300 font-bold text-sm">
                    Sites
                </div>
                <span class="mt-2 text-sm font-['Franklin_Gothic_Medium']">Google Sites</span>
            </div>

        </div>
    </div>

    <div class="relative w-full max-w-5xl mx-auto mt-24 px-4">
        
        <!-- Header Title -->
        <div class="w-full border-b-2 border-[rgb(88,1,55)] pb-3 mb-8">
            <h3 class="text-[24px] sm:text-[26px] font-bold text-[rgb(201,167,167)] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] tracking-wider uppercase">
                TECHNICAL SKILLS &amp; PROFICIENCIES
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Card 1: Languages  -->
            <div class="p-5 sm:p-6 rounded-xl border-2 border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/30 transition-all shadow-xl">
                <div class="flex items-center gap-2.5 pb-3 border-b border-[rgb(88,1,55)]/70 mb-4">
                    <span class="px-2.5 py-1 rounded bg-amber-500/15 border border-amber-500/40 text-amber-300 font-mono text-sm font-bold flex items-center justify-center">
                        &lt;/&gt;
                    </span>
                    <h4 class="text-lg font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                        Languages
                    </h4>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="badge-html px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-orange-500 hover:text-orange-400 hover:bg-orange-500/10 transition-all duration-200 cursor-pointer">HTML5</span>
                    <span class="badge-css px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-sky-500 hover:text-sky-400 hover:bg-sky-500/10 transition-all duration-200 cursor-pointer">CSS3</span>
                    <span class="badge-js px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-yellow-400 hover:text-yellow-300 hover:bg-yellow-400/10 transition-all duration-200 cursor-pointer">JavaScript</span>
                    <span class="badge-php px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-indigo-400 hover:text-indigo-300 hover:bg-indigo-400/10 transition-all duration-200 cursor-pointer">PHP</span>
                    <span class="badge-python px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-cyan-400 hover:text-cyan-300 hover:bg-cyan-400/10 transition-all duration-200 cursor-pointer">Python</span>
                    <span class="badge-java px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-rose-500 hover:text-rose-400 hover:bg-rose-500/10 transition-all duration-200 cursor-pointer">Java</span>
                    <span class="badge-sql px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-emerald-400 hover:text-emerald-300 hover:bg-emerald-400/10 transition-all duration-200 cursor-pointer">SQL</span>
                </div>
            </div>

            <!-- Card 2: Frameworks & Databases -->
            <div class="p-5 sm:p-6 rounded-xl border-2 border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/30 transition-all shadow-xl">
                <div class="flex items-center gap-2.5 pb-3 border-b border-[rgb(88,1,55)]/70 mb-4">
                    <span class="px-2.5 py-1 rounded bg-rose-500/15 border border-rose-500/40 text-rose-300 font-mono text-sm font-bold flex items-center justify-center">
                        &#123;&nbsp;&#125;
                    </span>
                    <h4 class="text-lg font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                        Frameworks &amp; Databases
                    </h4>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="badge-laravel px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-red-500 hover:text-red-400 hover:bg-red-500/10 transition-all duration-200 cursor-pointer">Laravel</span>
                    <span class="badge-node px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-green-500 hover:text-green-400 hover:bg-green-500/10 transition-all duration-200 cursor-pointer">Node.js</span>
                    <span class="badge-mysql px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-amber-400 hover:text-amber-300 hover:bg-amber-400/10 transition-all duration-200 cursor-pointer">MySQL</span>
                    <span class="badge-tailwind px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-cyan-400 hover:text-cyan-300 hover:bg-cyan-400/10 transition-all duration-200 cursor-pointer">Tailwind CSS</span>
                </div>
            </div>

            <!-- Card 3: Design & UI -->
            <div class="p-5 sm:p-6 rounded-xl border-2 border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/30 transition-all shadow-xl">
                <div class="flex items-center gap-2.5 pb-3 border-b border-[rgb(88,1,55)]/70 mb-4">
                    <span class="p-1.5 rounded bg-purple-500/15 border border-purple-500/40 text-purple-300 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M3 9h18"></path>
                            <path d="M9 21V9"></path>
                        </svg>
                    </span>
                    <h4 class="text-lg font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                        Design &amp; UI
                    </h4>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="badge-ai px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-amber-500 hover:text-amber-400 hover:bg-amber-500/10 transition-all duration-200 cursor-pointer">Adobe Illustrator</span>
                    <span class="badge-corel px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-lime-400 hover:text-lime-300 hover:bg-lime-400/10 transition-all duration-200 cursor-pointer">CorelDraw</span>
                    <span class="badge-sketchup px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-red-500 hover:text-red-400 hover:bg-red-500/10 transition-all duration-200 cursor-pointer">SketchUp</span>
                    <span class="badge-canva px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-teal-400 hover:text-teal-300 hover:bg-teal-400/10 transition-all duration-200 cursor-pointer">Canva</span>
                    <span class="badge-WordPress px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-blue-400 hover:text-blue-300 hover:bg-blue-400/10 transition-all duration-200 cursor-pointer">WordPress</span>
                    <span class="badge-figma px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-purple-400 hover:text-purple-300 hover:bg-purple-400/10 transition-all duration-200 cursor-pointer">Figma</span>
                </div>
            </div>

            <!-- Card 4: Development Workflow -->
            <div class="p-5 sm:p-6 rounded-xl border-2 border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/20 hover:bg-[rgb(70,1,49)]/30 transition-all shadow-xl">
                <div class="flex items-center gap-2.5 pb-3 border-b border-[rgb(88,1,55)]/70 mb-4">
                    <span class="p-1.5 rounded bg-sky-500/15 border border-sky-500/40 text-sky-300 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="6" x2="6" y1="3" y2="15"></line>
                            <circle cx="18" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M18 9a9 9 0 0 1-9 9"></path>
                        </svg>
                    </span>
                    <h4 class="text-lg font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                        Development Workflow
                    </h4>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="badge-composer px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-amber-600 hover:text-amber-400 hover:bg-amber-600/10 transition-all duration-200 cursor-pointer">Composer</span>
                    <span class="badge-docker px-3.5 py-1.5 rounded-md border border-[rgb(88,1,55)] bg-black/40 text-[rgb(201,167,167)] text-sm font-medium hover:border-sky-400 hover:text-sky-300 hover:bg-sky-400/10 transition-all duration-200 cursor-pointer">Docker</span>
                </div>
            </div>

        </div>
    </div>

</body>
</html>