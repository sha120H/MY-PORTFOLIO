<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Get In Touch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="w-full min-h-screen overflow-x-hidden bg-[linear-gradient(to_top,rgba(0,0,0,0.959),rgb(70,1,49),rgb(19,18,18))] m-0 p-0 box-border select-none text-[#fce7f3]">

    @include('navigation')

    <!-- Main Container -->
    <main class="w-full min-h-screen pt-[120px] pb-24 px-4 sm:px-6 max-w-4xl mx-auto flex flex-col items-center">

        <!-- GET IN TOUCH -->
        <div class="w-full flex flex-col items-center justify-center mb-10 text-center">
            <div class="inline-flex items-center justify-center whitespace-nowrap text-[#fce7f3] font-['Franklin_Gothic_Medium','Plus_Jakarta_Sans',sans-serif] text-[18px] min-[400px]:text-[22px] sm:text-[25px] font-bold border-2 border-solid border-pink-700/80 bg-[#21051b]/80 px-5 min-[400px]:px-6 sm:px-[50px] py-[8px] tracking-[0.15em] sm:tracking-[0.25em] shadow-[0_0_25px_rgba(219,39,119,0.35)] uppercase">
                GET IN TOUCH
            </div>
            <p class="text-[13px] min-[400px]:text-[14px] sm:text-[15px] text-pink-200/80 mt-4 max-w-lg leading-relaxed font-normal">
                Have an inquiry, project or collaboration opportunity? Reach out directly through phone, email, or send a message below.
            </p>
        </div>

        <!-- Contact Card Box-->
        <div class="w-full max-w-3xl rounded-2xl border border-pink-900/60 bg-[#190416]/90 backdrop-blur-sm p-4 sm:p-8 shadow-[0_8px_35px_rgba(0,0,0,0.6)]">
            
            <!-- DIRECT CONTACT CHANNELS -->
            <div class="flex items-center justify-between gap-2 pb-4 border-b border-pink-900/40 mb-6">
                <div class="flex items-center gap-1.5 sm:gap-2 text-pink-400 font-bold text-[11px] tracking-normal min-[400px]:text-xs min-[400px]:tracking-wider sm:text-sm uppercase whitespace-nowrap">
                    <!-- Sparkle Icon -->
                    <svg class="w-4 h-4 text-pink-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span>DIRECT CONTACT CHANNELS</span>
                </div>

                <!-- Save vCard Button -->
                <button onclick="downloadVCard()" class="inline-flex items-center gap-1.5 shrink-0 whitespace-nowrap px-2.5 sm:px-3 py-1 rounded-md bg-[#24061f] border border-pink-900/60 text-[11px] sm:text-xs text-pink-200 hover:text-white hover:border-pink-500 transition-all cursor-pointer">
                    <!-- Download Icon -->
                    <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>Save vCard</span>
                </button>
            </div>

            <!-- Contact Number Row -->
            <div class="mb-4 p-4 sm:p-5 rounded-xl bg-[#120210]/95 border border-pink-900/50 hover:border-pink-700/60 transition-all shadow-inner">
                <div class="flex items-center gap-2 text-xs sm:text-sm font-medium text-pink-300/80 mb-1.5">
                    <!-- Phone Icon -->
                    <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Contact Number:</span>
                </div>
                
                <div class="flex items-center justify-between gap-3 mt-1">
                    <a href="tel:09617103750" class="text-[13px] min-[400px]:text-[14px] sm:text-[16px] font-bold font-['JetBrains_Mono',monospace] tracking-wider text-white hover:text-pink-300 transition-colors no-underline whitespace-nowrap">
                        0961-710-3750
                    </a>
                    
                    <div class="flex items-center gap-2 shrink-0">
                        <button onclick="copyToClipboard('0961-710-3750', 'Phone Number')" 
                                class="p-2 sm:px-3 sm:py-1.5 rounded-lg bg-[#270722] border border-pink-800/70 text-pink-200 hover:text-white hover:border-pink-500 transition-all cursor-pointer flex items-center justify-center"
                                title="Copy phone number">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                        <!-- Call Button -->
                        <a href="tel:09617103750" 
                           class="px-3 sm:px-4 py-1.5 rounded-lg bg-pink-900/60 border border-pink-700/80 text-xs sm:text-sm font-semibold text-pink-100 hover:bg-pink-800/80 hover:border-pink-500 transition-all cursor-pointer no-underline flex items-center justify-center">
                            Call
                        </a>
                    </div>
                </div>
            </div>

            <!-- E-mail Row -->
            <div class="mb-6 p-4 sm:p-5 rounded-xl bg-[#120210]/95 border border-pink-900/50 hover:border-pink-700/60 transition-all shadow-inner">
                <div class="flex items-center gap-2 text-xs sm:text-sm font-medium text-pink-300/80 mb-1.5">
                    <!-- Mail Icon -->
                    <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>E-mail:</span>
                </div>
                
                <div class="flex flex-col items-start gap-3 sm:flex-row sm:items-center sm:justify-between mt-1">
                    <a href="mailto:yesshahernandez12@gmail.com" class="max-w-full whitespace-nowrap text-[13px] min-[400px]:text-[14px] sm:text-[16px] font-semibold text-white hover:text-pink-300 transition-colors no-underline">
                        yesshahernandez12@gmail.com
                    </a>
                    
                    <div class="flex items-center gap-2 shrink-0 self-end sm:self-auto">
                        <!-- Copy Button -->
                        <button onclick="copyToClipboard('yesshahernandez12@gmail.com', 'Email Address')" 
                                class="p-2 sm:px-3 sm:py-1.5 rounded-lg bg-[#270722] border border-pink-800/70 text-pink-200 hover:text-white hover:border-pink-500 transition-all cursor-pointer flex items-center justify-center"
                                title="Copy email address">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                        <!-- Email Button -->
                        <a href="mailto:yesshahernandez12@gmail.com" 
                           class="px-3 sm:px-4 py-1.5 rounded-lg bg-pink-900/60 border border-pink-700/80 text-xs sm:text-sm font-semibold text-pink-100 hover:bg-pink-800/80 hover:border-pink-500 transition-all cursor-pointer no-underline flex items-center justify-center">
                            Email
                        </a>
                    </div>
                </div>
            </div>

            <!-- Location Row -->
            <div class="pt-4 border-t border-pink-900/40 flex items-center gap-2 text-xs sm:text-sm text-pink-300/80 font-medium">
                <!-- Location Pin Icon -->
                <svg class="w-4 h-4 text-pink-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Cavite / Metro Manila, Philippines</span>
            </div>

        </div>

    </main>

    <!-- Floating Toast Notification -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 hidden items-center gap-2.5 px-4 py-3 rounded-xl bg-[#290722] border border-pink-500 text-white shadow-[0_0_25px_rgba(219,39,119,0.35)] text-sm font-medium">
        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="toast-text">Copied to clipboard!</span>
    </div>

    <!-- Download vCard -->
    <script>
        function copyToClipboard(text, label) {
            navigator.clipboard.writeText(text);
            const toast = document.getElementById('toast');
            const toastText = document.getElementById('toast-text');
            toastText.textContent = 'Copied ' + label + ' to clipboard!';
            toast.classList.remove('hidden');
            toast.classList.add('flex');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 2500);
        }

        function downloadVCard() {
            const vCardData = `BEGIN:VCARD
NAME: Yessha Blanco
NUMBER: 0961-710-3750
EMAIL: yesshahernandez12@gmail.com`;
            const blob = new Blob([vCardData], { type: 'text/vcard;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.setAttribute('download', 'yessha_hernandez_contact.vcf');
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            const toast = document.getElementById('toast');
            const toastText = document.getElementById('toast-text');
            toastText.textContent = "Downloaded Sha's vCard!";
            toast.classList.remove('hidden');
            toast.classList.add('flex');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 2500);
        }
    </script>

</body>
</html>