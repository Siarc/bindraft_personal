<header class="fixed top-0 left-0 w-full z-[1000] px-4 transition-all duration-300" 
        x-data="{ open: false, scrolled: false, serviceOpen: false }" 
        x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)">
    
    <nav :class="scrolled ? 'bg-black/80 backdrop-blur-xl rounded-2xl mt-4 shadow-2xl py-3' : 'bg-transparent mt-8 py-4'" 
         class="relative mx-auto max-w-7xl transition-all duration-500 ease-in-out">
        
    <div class="px-6 lg:px-10 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 homeLink">
                <div class="text-2xl font-black text-white lowercase tracking-tighter leading-none">bindraft</div>
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center gap-10 text-[14px] font-semibold text-white/70">
                <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Case Studies</a></li>
                <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Resources</a></li>
            </ul>

            <!-- Right Side Buttons -->
            <div class="flex items-center gap-8">
                <a href="#" class="hidden lg:flex items-center justify-center bg-white text-black px-7 py-3 rounded-full text-sm font-bold hover:bg-[#43C97B] hover:text-white transition-all transform hover:-translate-y-px shadow-xl">
                    Get Started
                </a>
                
                <!-- Mobile Toggle -->
                <button @click="open = !open" 
                        class="lg:hidden relative z-[1001] w-10 h-10 flex flex-col items-center justify-center gap-1.5 transition-all">
                    <span :class="open ? 'rotate-45 translate-y-2' : ''" class="w-7 h-[2px] bg-white transition-all rounded-full"></span>
                    <span :class="open ? 'opacity-0' : ''" class="w-7 h-[2px] bg-white transition-all rounded-full"></span>
                    <span :class="open ? '-rotate-45 -translate-y-2' : ''" class="w-7 h-[2px] bg-white transition-all rounded-full"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="open" 
             x-transition:enter="transition duration-300 ease-out"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition duration-200 ease-in"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="absolute top-full left-0 w-full mt-4 p-4 lg:hidden"
             style="display: none;">
            <div class="bg-white rounded-3xl p-8 shadow-2xl max-h-[80vh] overflow-y-auto">
                <ul class="space-y-6">
                    <li><a href="{{ route('services') }}" class="block text-xl font-bold text-gray-900">Services</a></li>
                    <li><a href="#" class="block text-xl font-bold text-black">Case Studies</a></li>
                    <li><a href="#" class="block text-xl font-bold text-black">About</a></li>
                    <li><a href="#" class="block text-xl font-bold text-black">Careers</a></li>
                    <li><a href="#" class="block text-xl font-bold text-black">Resources</a></li>
                    <li><a href="#" class="block text-xl font-bold text-black">Contact Us</a></li>
                </ul>
                <div class="mt-10 flex flex-col gap-4">
                    <a href="#" class="w-full text-center py-4 rounded-2xl bg-black text-white font-bold hover:bg-[#43C97B] transition-colors">Get Started</a>
                </div>
            </div>
        </div>
    </nav>
</header>
