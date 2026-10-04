<!-- resources/views/education.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Education & Projects</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full min-h-screen overflow-x-hidden bg-[linear-gradient(to_top,rgba(0,0,0,0.959),rgb(70,1,49),rgb(19,18,18))] m-0 p-0 box-border select-none">

    @include('navigation')

    <!-- Main Content Container -->
    <main class="w-full min-h-screen pt-[120px] pb-28 px-4 sm:px-6 max-w-4xl mx-auto z-20">
        
        <!-- Header Banner -->
        <div class="w-full flex justify-center mb-10">
            <div class="inline-flex text-center items-center justify-center whitespace-nowrap text-[rgb(201,167,167)] font-['Franklin_Gothic_Medium'] text-[18px] min-[400px]:text-[22px] sm:text-[26px] border-2 border-solid border-[rgb(88,1,55)] bg-transparent px-5 min-[400px]:px-8 sm:px-[50px] py-[8px] tracking-wider sm:tracking-widest shadow-lg uppercase">
                ACADEMIC BACKGROUND
            </div>
        </div>

        <!-- EDUCATION SECTION -->
        <section class="mb-14">
            <div class="flex items-center gap-3">
                <h2 class="text-[18px] sm:text-[22px] font-bold tracking-wider font-['Franklin_Gothic_Medium','Segoe_UI',sans-serif] text-[rgb(201,167,167)] uppercase">
                    EDUCATION
                </h2>
            </div>
           
            <div class="h-[2px] w-full bg-gradient-to-r from-[rgb(88,1,55)] via-[rgb(201,167,167)]/50 to-transparent mt-2 mb-6"></div>

            <div class="space-y-4">
            
                <div class="p-4 sm:p-6 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/15 hover:bg-[rgb(70,1,49)]/30 hover:border-rose-500/50 transition-all duration-300 shadow-md">
                    <div class="flex flex-row items-center justify-between gap-3 sm:gap-4">
                        <h3 class="min-w-0 text-[17px] sm:text-[20px] font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                            Asian Institute of Science and Technology
                        </h3>
                        <span class="inline-block shrink-0 whitespace-nowrap px-2 sm:px-3 py-1 rounded border border-[rgb(88,1,55)] bg-transparent text-rose-300 font-mono text-xs sm:text-sm font-semibold tracking-wider w-fit">
                            2023 - Present
                        </span>
                    </div>
                    <p class="text-[15px] sm:text-[17px] italic text-[rgb(201,167,167)] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] mt-1.5 font-medium">
                        Bachelor of Science in Computer Science
                    </p>
                </div>

                <div class="p-4 sm:p-6 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/15 hover:bg-[rgb(70,1,49)]/30 hover:border-rose-500/50 transition-all duration-300 shadow-md">
                    <div class="flex flex-row items-center justify-between gap-3 sm:gap-4">
                        <h3 class="min-w-0 text-[17px] sm:text-[20px] font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                            General Pantaleon Garcia
                        </h3>
                        <span class="inline-block shrink-0 whitespace-nowrap px-2 sm:px-3 py-1 rounded border border-[rgb(88,1,55)] bg-transparent text-rose-300 font-mono text-xs sm:text-sm font-semibold tracking-wider w-fit">
                            2021 - 2023
                        </span>
                    </div>
                    <p class="text-[15px] sm:text-[17px] italic text-[rgb(201,167,167)] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] mt-1.5 font-medium">
                        SHS Technical Drafting and Animation
                    </p>
                </div>
            </div>
        </section>

        <!-- ACADEMIC PROJECTS SECTION -->
        <section>
            <div class="flex items-center gap-3">
                <h2 class="text-[18px] sm:text-[22px] font-bold tracking-wider font-['Franklin_Gothic_Medium','Segoe_UI',sans-serif] text-[rgb(201,167,167)] uppercase">
                    ACADEMIC PROJECTS
                </h2>
            </div>

            <div class="h-[2px] w-full bg-gradient-to-r from-[rgb(88,1,55)] via-[rgb(201,167,167)]/50 to-transparent mt-2 mb-6"></div>

            <div class="space-y-6">

                <div class="p-4 sm:p-6 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/15 hover:bg-[rgb(70,1,49)]/30 hover:border-rose-500/50 transition-all duration-300 shadow-md">
                    <div class="flex flex-col sm:flex-row sm:items-baseline sm:justify-between gap-1 sm:gap-3">
                        <h3 class="min-w-0 text-[17px] sm:text-[20px] font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                            Web-Based Management System
                        </h3>
                        <span class="sm:shrink-0 sm:text-right text-xs sm:text-sm text-rose-300 font-medium">
                            Lead Full Stack Developer <span class="text-[rgb(201,167,167)]/70">(School Project)</span>
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2 my-3">
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-orange-400 hover:text-orange-300 transition-all">SQL</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-indigo-400 hover:text-indigo-300 transition-all">PHP</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-rose-400 hover:text-rose-300 transition-all">MVC Architecture</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-amber-400 hover:text-amber-300 transition-all">MySQL Database</span>
                    </div>

                    <!-- Bullet Points -->
                    <ul class="mt-3 space-y-2 text-[15px] sm:text-[16px] text-[rgb(201,167,167)] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] leading-relaxed">
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Built and deployed a functional web application using PHP and modern MVC architecture.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Utilized Composer to safely install, update, and manage third-party packages for user authentication and database migrations.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Designed a relational MySQL database featuring full CRUD functionality for data management.</span>
                        </li>
                    </ul>
                </div>

                <!-- Technical Drafting Thesis -->
                <div class="p-4 sm:p-6 rounded-lg border border-[rgb(88,1,55)] bg-[rgb(70,1,49)]/15 hover:bg-[rgb(70,1,49)]/30 hover:border-rose-500/50 transition-all duration-300 shadow-md">
                    <div class="flex flex-col sm:flex-row sm:items-baseline sm:justify-between gap-1 sm:gap-3">
                        <h3 class="min-w-0 text-[17px] sm:text-[20px] font-bold text-white font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif]">
                            Technical Drafting Thesis
                        </h3>
                        <span class="sm:shrink-0 sm:text-right text-xs sm:text-sm text-rose-300 font-medium">
                            Graphic Designer &amp; Drafter <span class="text-[rgb(201,167,167)]/70">(School Project)</span>
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2 my-3">
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-sky-400 hover:text-sky-300 transition-all">SketchUp 3D</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-cyan-400 hover:text-cyan-300 transition-all">3D Modeling</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-purple-400 hover:text-purple-300 transition-all">Technical Drafting</span>
                        <span class="px-2.5 py-0.5 rounded text-xs font-semibold border border-[rgb(88,1,55)] bg-transparent text-[rgb(201,167,167)] hover:border-emerald-400 hover:text-emerald-300 transition-all">Digital Documentation</span>
                    </div>

                    <!-- Bullet Points -->
                    <ul class="mt-3 space-y-2 text-[15px] sm:text-[16px] text-[rgb(201,167,167)] font-['Segoe_UI',Tahoma,Geneva,Verdana,sans-serif] leading-relaxed">
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Converted freehand concepts into precise, dimensionally accurate 3D models using SketchUp.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Balanced aesthetic design with technical drafting standards to create clear, precise visual layouts.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-400 mt-2 shrink-0"></span>
                            <span>Compiled comprehensive documentation by adapting hand-drawn sketches into finalized digital designs.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </main>

</body>
</html>