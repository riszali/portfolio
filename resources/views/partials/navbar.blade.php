<nav x-data="{ mobileMenuOpen: false }" 
     :class="{'bg-[#050505]/80 backdrop-blur-xl border-b border-white/10 py-4 shadow-[0_10px_30px_rgba(0,0,0,0.5)]': scrolled, 'py-6 bg-transparent border-b border-transparent': !scrolled}" 
     class="fixed top-0 left-0 w-full z-[100] transition-all duration-500">
     
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') ?? '#' }}" class="text-3xl md:text-4xl text-white flex items-center hover:opacity-80 transition-opacity" style="font-family: 'Lobster', cursive;">
            Risz Ali<span class="text-[#f9005b]">.</span>
        </a>
        
        <!-- Menu Desktop -->
        <div class="hidden md:flex items-center space-x-10 text-sm font-medium text-gray-300 font-space tracking-wide">
            <a href="#cv-section" class="hover:text-[#f9005b] transition-colors">Profil</a>
            <a href="#keahlian-section" class="hover:text-[#f9005b] transition-colors">Keahlian</a>
            <a href="#lab-section" class="hover:text-[#f9005b] transition-colors">Karya</a>
            
            <a href="mailto:rizkialiakhbar@gmail.com" class="group relative bg-white text-black px-6 py-2.5 rounded-full font-bold overflow-hidden transition-all hover:scale-105 shadow-[0_0_15px_rgba(255,255,255,0.2)] hover:shadow-[0_0_25px_rgba(249,0,91,0.6)]">
                <span class="relative z-10 group-hover:text-white transition-colors duration-300">Mari Diskusi</span>
                <div class="absolute inset-0 bg-[#f9005b] translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-0"></div>
            </a>
        </div>

        <!-- Tombol Menu Mobile -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-300 hover:text-white focus:outline-none z-50">
            <!-- Ikon Hamburger -->
            <svg x-show="!mobileMenuOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <!-- Ikon Close (X) -->
            <svg x-show="mobileMenuOpen" style="display: none;" class="w-7 h-7 text-[#f9005b]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Dropdown Menu Mobile -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="-translate-y-full opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="-translate-y-full opacity-0"
         class="md:hidden absolute top-full left-0 w-full bg-[#050505]/95 backdrop-blur-xl border-b border-white/10 shadow-2xl -z-10">
        
        <div class="px-6 py-8 flex flex-col space-y-6 text-center font-space text-lg">
            <a href="#cv-section" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-[#f9005b] py-2 transition-colors">Profil</a>
            <a href="#keahlian-section" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-[#f9005b] py-2 transition-colors">Keahlian</a>
            <a href="#lab-section" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-[#f9005b] py-2 transition-colors">Karya</a>
            
            <div class="pt-4 border-t border-white/10">
                <a href="mailto:rizkialiakhbar@gmail.com" @click="mobileMenuOpen = false" class="inline-block bg-[#f9005b] text-white px-8 py-3 rounded-full font-bold shadow-[0_0_15px_rgba(249,0,91,0.4)]">
                    Mari Diskusi
                </a>
            </div>
        </div>
    </div>
</nav>