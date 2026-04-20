<x-layouts.app title="Home - Risz Ali Portfolio">

    <!-- Mengambil font khusus dari desain Anda -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Space+Grotesk:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Memuat CSS Khusus Halaman Home dengan Cache Busting -->
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}?v={{ time() }}">

    <!-- ==============================================
         SECTION 1: THE HOOK (Hero Section) 
         ============================================== -->
    <section id="hero-section" class="relative w-full h-screen overflow-hidden flex items-center justify-center bg-[#050505]">
        <video id="hero-video" autoplay loop muted playsinline preload="metadata" class="absolute inset-0 w-full h-full object-cover opacity-0 z-0">
            <source src="{{ asset('assets/video/3d-home-page.mp4') }}#t=0.001" type="video/mp4">
        </video>
        
        <div id="hero-text" class="relative z-10 text-center px-4 w-full max-w-5xl mx-auto opacity-0 scale-90 will-change-transform flex flex-col items-center">
            
            <!-- Headline -->
            <h1 class="text-6xl md:text-8xl lg:text-[9rem] text-white mb-6 drop-shadow-2xl leading-none" style="font-family: 'Lobster', cursive; text-shadow: 0 15px 40px rgba(0,0,0,0.8);">
                Beyond The <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-linear-to-r from-[#f9005b] via-[#ff0055] to-[#9d00ff] pr-4">Canvas</span>
            </h1>

            <!-- Subheadline -->
            <p class="text-base md:text-xl text-gray-300 font-sans max-w-3xl mx-auto leading-relaxed font-light text-shadow-sm mt-4">
                Eksplorasi dimensi baru. Saya menerjemahkan narasi brand Anda ke dalam arsitektur visual interaktif dan ekosistem WebGL yang hidup.
            </p>

            <!-- CTA Arrow Down -->
            <div class="mt-12 animate-bounce opacity-70">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </div>
        </div>

        <div class="absolute inset-0 z-20 pointer-events-none flex items-center justify-center overflow-hidden">
            <img id="door-image" 
                    src="{{ asset('assets/images/fantasy-style-entryway-door-with-desert-landscape.png') }}" 
                    onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=2000&auto=format&fit=crop'; this.style.clipPath='polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 0%, 35% 25%, 35% 75%, 65% 75%, 65% 25%, 35% 25%)';"
                    class="w-full h-full object-cover transform-gpu origin-center will-change-transform" 
                    alt="Entryway Door">
        </div>
    </section>

    <!-- ==============================================
         SECTION 2: PROFIL & CURRICULUM VITAE 
         ============================================== -->
    <section id="cv-section" class="py-24 md:py-32 bg-[#000000] relative z-30 border-t border-white/5">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-48 bg-[#f9005b]/10 blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-16 md:mb-24">
                <div class="mb-4 inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-white/10 bg-white/5 backdrop-blur-md">
                    <span class="text-xs font-mono text-[#f9005b] tracking-widest uppercase">/// Profil & Rekam Jejak</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-white drop-shadow-lg font-space tracking-tight">
                    The <span class="text-transparent bg-clip-text bg-linear-to-r from-[#f9005b] to-[#9d00ff]">Architect</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- BAGIAN KIRI: FOTO & BIODATA -->
                <div class="lg:col-span-5 relative">
                    <div class="sticky top-32 flex flex-col items-center lg:items-start text-center lg:text-left">
                        <div class="relative w-56 h-56 md:w-72 md:h-72 mb-8 group">
                            <div class="absolute inset-0 rounded-full border border-[#f9005b]/30 animate-[spin_10s_linear_infinite]"></div>
                            <div class="absolute inset-2 rounded-full border border-[#9d00ff]/30 animate-[spin_15s_linear_infinite_reverse]"></div>
                            
                            <!-- Foto Profil -->
                            <img src="{{ asset('assets/images/IMG_004922.jpg') }}" 
                                 onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop';" 
                                 alt="Risz Ali" 
                                 class="w-full h-full object-cover rounded-full border-4 border-[#050505] shadow-[0_0_40px_rgba(249,0,91,0.2)] group-hover:shadow-[0_0_60px_rgba(249,0,91,0.4)] transition-shadow duration-500 relative z-10">
                        </div>

                        <h3 class="text-4xl font-bold text-white mb-2 font-space tracking-tight">Risz Ali</h3>
                        <p class="text-[#f9005b] font-mono text-sm uppercase tracking-widest mb-6 border-b border-white/10 pb-4 w-full lg:w-3/4">Creative Technologist</p>
                        
                        <p class="text-gray-400 font-light leading-relaxed mb-8 text-base md:text-lg">
                            Saya memadukan logika rekayasa perangkat lunak berskala besar dengan seni visual sinematik. Berfokus pada penciptaan ekosistem digital yang tidak hanya fungsional secara teknis, tetapi juga memberikan pengalaman imersif yang tak terlupakan.
                        </p>

                        <!-- Informasi Biodata Tambahan -->
                        <div class="w-full mb-8 text-sm md:text-base font-light text-gray-300 bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm shadow-xl relative overflow-hidden group hover:border-[#f9005b]/30 transition-colors duration-500">
                            <!-- Efek Glow Internal -->
                            <div class="absolute -top-10 -right-10 w-24 h-24 bg-[#f9005b]/20 rounded-full blur-2xl group-hover:bg-[#f9005b]/40 transition-colors duration-500"></div>

                            <div class="grid grid-cols-[100px_1fr] md:grid-cols-[110px_1fr] gap-y-4 gap-x-4 text-left relative z-10">
                                <div class="text-[#f9005b] font-mono text-xs uppercase tracking-widest mt-1">Telepon</div>
                                <div class="text-white font-medium">082110946254</div>
                                
                                <div class="text-[#f9005b] font-mono text-xs uppercase tracking-widest mt-1">Email</div>
                                <div class="text-white font-medium break-all">rizkialiakhbar@gmail.com</div>
                                
                                <div class="text-[#f9005b] font-mono text-xs uppercase tracking-widest mt-1">Lahir</div>
                                <div class="text-white font-medium">Jakarta, 16 Juli 1995</div>
                                
                                <div class="text-[#f9005b] font-mono text-xs uppercase tracking-widest mt-1">Pendidikan</div>
                                <div class="text-white font-medium">SMA TRIGUNA UTAMA (2014)</div>
                                
                                <div class="text-[#f9005b] font-mono text-xs uppercase tracking-widest mt-1">Alamat</div>
                                <div class="text-white font-medium leading-relaxed">Jl. Taman Cilandak Raya No. 40b, Cilandak Barat, Jakarta Selatan</div>
                            </div>
                        </div>

                        <!-- Download CV & Social Links -->
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 w-full">
                            <a href="#" target="_blank" class="inline-flex items-center gap-2 bg-white/5 hover:bg-[#f9005b] text-white border border-[#f9005b]/50 px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-[0_0_20px_rgba(249,0,91,0.1)] hover:shadow-[0_0_30px_rgba(249,0,91,0.5)] group text-sm">
                                <svg class="w-4 h-4 group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                Unduh CV
                            </a>
                            <a href="#" target="_blank" class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 hover:border-white/30 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" target="_blank" class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 hover:border-white/30 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BAGIAN KANAN: TIMELINE PENGALAMAN -->
                <div class="lg:col-span-7 relative border-l border-white/10 ml-4 md:ml-0 space-y-16 pb-8 lg:mt-6">
                    
                    <div class="timeline-item relative pl-8 md:pl-12 opacity-0 translate-y-10">
                        <div class="absolute -left-2.25 top-1.5 w-4 h-4 rounded-full bg-[#f9005b] shadow-[0_0_15px_#f9005b]"></div>
                        <div class="flex flex-col xl:flex-row xl:items-center justify-between mb-3 gap-2">
                            <h3 class="text-2xl md:text-3xl font-bold text-white font-space tracking-tight">T-Shaped Professional</h3>
                            <span class="text-[#f9005b] font-mono text-sm border border-[#f9005b]/30 bg-[#f9005b]/10 px-4 py-1.5 rounded-full w-fit">PRESENT</span>
                        </div>
                        <h4 class="text-xl text-gray-300 font-serif italic mb-4">Freelancer</h4>
                        
                        <div class="text-gray-400 font-light leading-relaxed mb-6 space-y-4">
                            <p class="text-[#f9005b] font-bold tracking-widest uppercase text-sm mb-2">Client :</p>
                            
                            <div class="bg-white/5 border border-white/10 p-5 rounded-xl hover:border-[#f9005b]/30 transition-colors">
                                <h5 class="text-white font-bold mb-2">KEMENTRIAN PERTAHANAN (2022)</h5>
                                <p class="text-sm">Membuat 1200 animasi 2d dengan durasi 1 - 2 menit</p>
                            </div>

                            <div class="bg-white/5 border border-white/10 p-5 rounded-xl hover:border-[#f9005b]/30 transition-colors">
                                <h5 class="text-white font-bold mb-2">IPTEC (2024)</h5>
                                <p class="text-sm">Mengambil foto dan video untuk kebutuhan sosial media dan website maison de raux, membuat animasi ombak yang interaktif untuk bx sea</p>
                            </div>

                            <div class="bg-white/5 border border-white/10 p-5 rounded-xl hover:border-[#f9005b]/30 transition-colors">
                                <h5 class="text-white font-bold mb-2">GEELY (2025)</h5>
                                <p class="text-sm">Membuat website sales www.geelybsd.id dengan fitur 360°, simulasi kredit, dan berbagai macam fitur. Membuat photo shoot untuk sales, dan juga membuat video cinematic untuk kebutuhan social media</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#f9005b]/50">Web Dev</span>
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#f9005b]/50">Videography</span>
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#f9005b]/50">Animation</span>
                        </div>
                    </div>

                    <div class="timeline-item relative pl-8 md:pl-12 opacity-0 translate-y-10">
                        <div class="absolute -left-2.25 top-1.5 w-4 h-4 rounded-full bg-[#9d00ff] shadow-[0_0_15px_#9d00ff]"></div>
                        <div class="flex flex-col xl:flex-row xl:items-center justify-between mb-3 gap-2">
                            <h3 class="text-2xl md:text-3xl font-bold text-white font-space tracking-tight">Multimedia Specialist</h3>
                            <span class="text-[#9d00ff] font-mono text-sm border border-[#9d00ff]/30 bg-[#9d00ff]/10 px-4 py-1.5 rounded-full w-fit">2019 - 2022</span>
                        </div>
                        <h4 class="text-xl text-gray-300 font-serif italic mb-4">First Solution / Jakarta</h4>
                        <p class="text-gray-400 font-light leading-relaxed mb-6">Web Developer, Pengembang Sistem Sertifikasi Elektronik, Videografer, Fotografer, Desainer, Video Editor, serta Teknisi Perbaikan Laptop Karyawan.</p>
                        
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#9d00ff]/50">Web Development</span>
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#9d00ff]/50">Multimedia Design</span>
                            <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-xs text-gray-300 font-mono transition hover:bg-white/10 hover:border-[#9d00ff]/50">IT Support</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ==============================================
         SECTION 3: THE CAPABILITIES (Slider Redesign Premium) 
         ============================================== -->
    <section id="keahlian-section" class="py-24 text-white overflow-hidden relative z-30 bg-[#020202]">
        
        <!-- Background Image Setup -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <img src="{{ asset('assets/images/img5.jpg') }}" alt="Core Capabilities Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-[#020202]/85"></div>
            <div class="absolute inset-0 bg-linear-to-b from-[#020202] via-transparent to-[#020202]"></div>
        </div>

        <!-- Ornamen Latar (Glow effect lebih menyatu) -->
        <div class="absolute top-10 left-[10%] w-[30rem] h-[30rem] bg-[#f9005b]/15 rounded-full blur-[150px] pointer-events-none z-0 transform-gpu"></div>
        <div class="absolute bottom-10 right-[10%] w-[30rem] h-[30rem] bg-[#9d00ff]/15 rounded-full blur-[150px] pointer-events-none z-0 transform-gpu"></div>

        <div class="max-w-[1400px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10">
            
            <div class="text-left mb-16 flex flex-col items-start">
                <div class="mb-4 inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-white/10 bg-white/5 backdrop-blur-md shadow-xl">
                    <span class="text-xs font-mono text-[#f9005b] tracking-widest uppercase">/// Arsenal & Keahlian</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-normal mb-4 drop-shadow-lg tracking-wide" style="font-family: 'Lobster', cursive;">
                    Core <span class="text-transparent bg-clip-text bg-linear-to-r from-[#f9005b] to-[#9d00ff]">Capabilities</span>
                </h2>
                <p class="text-base md:text-lg text-gray-400 max-w-2xl font-light font-sans leading-relaxed">Spektrum keahlian komprehensif yang menjembatani rekayasa perangkat lunak tingkat lanjut dengan produksi visual komersial berstandar tinggi.</p>
            </div>
            
            <!-- Viewport Slider JS (Struktur Tidak Diubah) -->
            <div class="slider-viewport">
                <div id="slider-track" class="slider-track items-center py-8">
                    
                    <!-- Skill Card 1: Backend -->
                    <!-- Kelas Tailwind diperbarui untuk estetika Neo-Brutalism/Glassmorphism yang mewah -->
                    <article class="slide-item shrink-0 w-[85vw] md:w-[26rem] lg:w-[28rem] h-[34rem] md:h-[38rem] flex flex-col rounded-[2rem] overflow-hidden relative group bg-[#080808] border border-white/10 hover:border-[#f9005b]/60 shadow-[0_15px_40px_rgba(0,0,0,0.8)] hover:shadow-[0_0_50px_rgba(249,0,91,0.25)] transition-all duration-500 cursor-grab active:cursor-grabbing">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.03] to-transparent pointer-events-none z-10"></div>
                        
                        <div class="h-[45%] w-full relative overflow-hidden z-0">
                            <div class="absolute top-6 left-6 z-20">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-[#f9005b]/30 rounded-full font-mono text-[10px] text-white tracking-[0.2em] flex items-center gap-2 shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#f9005b] animate-pulse"></span>
                                    SKILL_01
                                </div>
                            </div>
                            <!-- Efek gambar parallax lambat saat di hover -->
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transform group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 opacity-60 group-hover:opacity-90 mix-blend-lighten" alt="Backend Architecture">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080808] via-[#080808]/50 to-transparent"></div>
                        </div>

                        <div class="px-8 pb-8 pt-2 flex-1 flex flex-col relative z-20">
                            <!-- Floating Icon Box -->
                            <div class="w-14 h-14 bg-[#050505] text-[#f9005b] border border-white/10 rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:-translate-y-2 group-hover:border-[#f9005b]/50 group-hover:shadow-[0_10px_30px_rgba(249,0,91,0.3)] transition-all duration-500 relative -mt-8 backdrop-blur-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-white mb-4 font-space tracking-tight group-hover:text-[#f9005b] transition-colors leading-tight">Backend <br/> Architecture</h3>
                            <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-auto">Membangun pondasi server yang tangguh, aman, dan skalabel dengan Laravel & arsitektur RESTful API modern untuk performa maksimal.</p>
                            
                            <!-- Aksen pemisah di bawah -->
                            <div class="w-full h-px bg-gradient-to-r from-white/10 to-transparent mt-6"></div>
                        </div>
                    </article>

                    <!-- Skill Card 2: Frontend -->
                    <article class="slide-item shrink-0 w-[85vw] md:w-[26rem] lg:w-[28rem] h-[34rem] md:h-[38rem] flex flex-col rounded-[2rem] overflow-hidden relative group bg-[#080808] border border-white/10 hover:border-[#9d00ff]/60 shadow-[0_15px_40px_rgba(0,0,0,0.8)] hover:shadow-[0_0_50px_rgba(157,0,255,0.25)] transition-all duration-500 cursor-grab active:cursor-grabbing">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.03] to-transparent pointer-events-none z-10"></div>
                        
                        <div class="h-[45%] w-full relative overflow-hidden z-0">
                            <div class="absolute top-6 left-6 z-20">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-[#9d00ff]/30 rounded-full font-mono text-[10px] text-white tracking-[0.2em] flex items-center gap-2 shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9d00ff] animate-pulse"></span>
                                    SKILL_02
                                </div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transform group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 opacity-60 group-hover:opacity-90 mix-blend-lighten" alt="Immersive Frontend">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080808] via-[#080808]/50 to-transparent"></div>
                        </div>

                        <div class="px-8 pb-8 pt-2 flex-1 flex flex-col relative z-20">
                            <!-- Floating Icon Box -->
                            <div class="w-14 h-14 bg-[#050505] text-[#9d00ff] border border-white/10 rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:-translate-y-2 group-hover:border-[#9d00ff]/50 group-hover:shadow-[0_10px_30px_rgba(157,0,255,0.3)] transition-all duration-500 relative -mt-8 backdrop-blur-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-white mb-4 font-space tracking-tight group-hover:text-[#9d00ff] transition-colors leading-tight">Immersive <br/> Frontend</h3>
                            <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-auto">Meracik antarmuka pengguna interaktif (React/Vue/Tailwind) yang diperkaya dengan animasi GSAP untuk user experience kelas satu.</p>
                            
                            <div class="w-full h-px bg-gradient-to-r from-white/10 to-transparent mt-6"></div>
                        </div>
                    </article>

                    <!-- Skill Card 3: Videography -->
                    <article class="slide-item shrink-0 w-[85vw] md:w-[26rem] lg:w-[28rem] h-[34rem] md:h-[38rem] flex flex-col rounded-[2rem] overflow-hidden relative group bg-[#080808] border border-white/10 hover:border-white/60 shadow-[0_15px_40px_rgba(0,0,0,0.8)] hover:shadow-[0_0_50px_rgba(255,255,255,0.15)] transition-all duration-500 cursor-grab active:cursor-grabbing">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.03] to-transparent pointer-events-none z-10"></div>
                        
                        <div class="h-[45%] w-full relative overflow-hidden z-0">
                            <div class="absolute top-6 left-6 z-20">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-white/30 rounded-full font-mono text-[10px] text-white tracking-[0.2em] flex items-center gap-2 shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                    SKILL_03
                                </div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transform group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 opacity-60 group-hover:opacity-90 mix-blend-lighten" alt="Cinematography">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080808] via-[#080808]/50 to-transparent"></div>
                        </div>

                        <div class="px-8 pb-8 pt-2 flex-1 flex flex-col relative z-20">
                            <!-- Floating Icon Box -->
                            <div class="w-14 h-14 bg-[#050505] text-white border border-white/10 rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:-translate-y-2 group-hover:border-white/50 group-hover:shadow-[0_10px_30px_rgba(255,255,255,0.2)] transition-all duration-500 relative -mt-8 backdrop-blur-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 00-2-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-white mb-4 font-space tracking-tight group-hover:text-gray-300 transition-colors leading-tight">Advanced <br/> Cinematography</h3>
                            <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-auto">Produksi video komersial, penyutradaraan, dan color grading profesional untuk menghasilkan materi promosi bernilai visual tinggi.</p>
                            
                            <div class="w-full h-px bg-gradient-to-r from-white/10 to-transparent mt-6"></div>
                        </div>
                    </article>

                    <!-- Skill Card 4: Motion Graphics -->
                    <article class="slide-item shrink-0 w-[85vw] md:w-[26rem] lg:w-[28rem] h-[34rem] md:h-[38rem] flex flex-col rounded-[2rem] overflow-hidden relative group bg-[#080808] border border-white/10 hover:border-[#9d00ff]/60 shadow-[0_15px_40px_rgba(0,0,0,0.8)] hover:shadow-[0_0_50px_rgba(157,0,255,0.25)] transition-all duration-500 cursor-grab active:cursor-grabbing">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.03] to-transparent pointer-events-none z-10"></div>
                        
                        <div class="h-[45%] w-full relative overflow-hidden z-0">
                            <div class="absolute top-6 left-6 z-20">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-[#9d00ff]/30 rounded-full font-mono text-[10px] text-white tracking-[0.2em] flex items-center gap-2 shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9d00ff] animate-pulse"></span>
                                    SKILL_04
                                </div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transform group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 opacity-60 group-hover:opacity-90 mix-blend-lighten" alt="VFX & Motion">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080808] via-[#080808]/50 to-transparent"></div>
                        </div>

                        <div class="px-8 pb-8 pt-2 flex-1 flex flex-col relative z-20">
                            <!-- Floating Icon Box -->
                            <div class="w-14 h-14 bg-[#050505] text-[#9d00ff] border border-white/10 rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:-translate-y-2 group-hover:border-[#9d00ff]/50 group-hover:shadow-[0_10px_30px_rgba(157,0,255,0.3)] transition-all duration-500 relative -mt-8 backdrop-blur-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-white mb-4 font-space tracking-tight group-hover:text-[#9d00ff] transition-colors leading-tight">VFX & <br/> Motion Graphics</h3>
                            <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-auto">Integrasi grafis gerak tingkat lanjut (After Effects) untuk menghidupkan elemen diam menjadi karya audio-visual yang dinamis.</p>
                            
                            <div class="w-full h-px bg-gradient-to-r from-white/10 to-transparent mt-6"></div>
                        </div>
                    </article>

                    <!-- Skill Card 5: 3D WebGL -->
                    <article class="slide-item shrink-0 w-[85vw] md:w-[26rem] lg:w-[28rem] h-[34rem] md:h-[38rem] flex flex-col rounded-[2rem] overflow-hidden relative group bg-[#080808] border border-white/10 hover:border-[#f9005b]/60 shadow-[0_15px_40px_rgba(0,0,0,0.8)] hover:shadow-[0_0_50px_rgba(249,0,91,0.25)] transition-all duration-500 cursor-grab active:cursor-grabbing">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/[0.03] to-transparent pointer-events-none z-10"></div>
                        
                        <div class="h-[45%] w-full relative overflow-hidden z-0">
                            <div class="absolute top-6 left-6 z-20">
                                <div class="px-4 py-2 bg-black/60 backdrop-blur-md border border-[#f9005b]/30 rounded-full font-mono text-[10px] text-white tracking-[0.2em] flex items-center gap-2 shadow-lg">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#f9005b] animate-pulse"></span>
                                    SKILL_05
                                </div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transform group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 opacity-60 group-hover:opacity-90 mix-blend-lighten" alt="3D & WebGL">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#080808] via-[#080808]/50 to-transparent"></div>
                        </div>

                        <div class="px-8 pb-8 pt-2 flex-1 flex flex-col relative z-20">
                            <!-- Floating Icon Box -->
                            <div class="w-14 h-14 bg-[#050505] text-[#f9005b] border border-white/10 rounded-2xl flex items-center justify-center mb-6 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:-translate-y-2 group-hover:border-[#f9005b]/50 group-hover:shadow-[0_10px_30px_rgba(249,0,91,0.3)] transition-all duration-500 relative -mt-8 backdrop-blur-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-white mb-4 font-space tracking-tight group-hover:text-[#f9005b] transition-colors leading-tight">3D Web <br/> Environments</h3>
                            <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-auto">Membawa objek kustom 3D ke dalam antarmuka web interaktif (Three.js), mendobrak batasan web 2D tradisional.</p>
                            
                            <div class="w-full h-px bg-gradient-to-r from-white/10 to-transparent mt-6"></div>
                        </div>
                    </article>

                </div>
            </div>

            <!-- Controls Slider GSAP (Tetap Dipertahankan) -->
            <div class="flex flex-col items-center gap-8 mt-12 relative z-20">
                <div class="flex items-center gap-6">
                    <button id="prev-slide" class="btn-nav-slider">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    
                    <!-- Progress Line -->
                    <div class="slider-progress-bg hidden md:block">
                        <div id="slider-progress" class="slider-progress-fill"></div>
                    </div>

                    <button id="next-slide" class="btn-nav-slider">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         SECTION 4: TECH STACK (My Weapons of Choice) 
         ============================================== -->
    <section class="py-20 bg-[#f9005b] overflow-hidden transform -skew-y-2 relative z-20 mt-12 mb-12 shadow-[0_0_50px_rgba(249,0,91,0.3)]">
        <div class="transform skew-y-2">
            <h2 class="text-center text-black font-black uppercase tracking-widest mb-10 text-xl md:text-2xl">My Weapons of Choice</h2>
            
            <div class="marquee-container gap-8 px-4 text-4xl md:text-6xl font-black text-black/80 uppercase tracking-tighter font-space">
                <span>React.JS</span>
                <span>•</span>
                <span>Three.JS</span>
                <span>•</span>
                <span>Laravel 12</span>
                <span>•</span>
                <span>GSAP</span>
                <span>•</span>
                <span>Tailwind CSS</span>
                <span>•</span>
                <span>MySQL</span>
                <span>•</span>
                <span>Vue.JS</span>
                <span>•</span>
                <!-- Duplicate untuk infinite loop yang mulus -->
                <span>React.JS</span>
                <span>•</span>
                <span>Three.JS</span>
                <span>•</span>
                <span>Laravel 12</span>
                <span>•</span>
                <span>GSAP</span>
                <span>•</span>
                <span>Tailwind CSS</span>
                <span>•</span>
                <span>MySQL</span>
                <span>•</span>
                <span>Vue.JS</span>
                <span>•</span>
            </div>
        </div>
    </section>

    <!-- ==============================================
         SECTION 5: THE SHOWCASE (Portaplane)
         ============================================== -->
    <section id="section-portaplane" class="relative w-full h-[95vh] bg-black flex items-center justify-center overflow-hidden z-30 border-t border-white/10">
        <div id="portaplane-canvas-wrapper" class="absolute inset-0 w-full h-full block">
            
            <div class="portaplane-instructions absolute bottom-28 left-1/2 transform -translate-x-1/2 z-100 text-center w-full max-w-4xl px-4 pointer-events-none flex flex-col items-center">
                <h2 class="text-5xl md:text-7xl mb-4 text-transparent bg-clip-text bg-linear-to-r from-[#f9005b] to-[#9d00ff] drop-shadow-2xl" style="font-family: 'Lobster', cursive; padding-bottom: 5px;">Spatial Interaction</h2>
                <p class="text-sm md:text-base text-gray-200 bg-black/60 inline-block px-8 py-4 rounded-3xl backdrop-blur-md border border-white/10 shadow-2xl mt-2 font-light">
                    Eksplorasi kedalaman visual. Gunakan mouse atau sensor perangkat Anda untuk berinteraksi dengan kanvas 3D di bawah ini.
                </p>
            </div>

            <div id="controls-panel" class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-100 flex gap-3 bg-[#f9005b]/20 backdrop-blur-xl p-3 rounded-2xl border border-[#f9005b]/40 shadow-[0_10px_30px_rgba(249,0,91,0.2)]">
                <button id="mouse-control-btn" class="control-btn active bg-[#f9005b] text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all hover:bg-pink-600 shadow-md">Mouse</button>
                <button id="gyro-control-btn" class="control-btn bg-[#050505] text-white hover:bg-[#1a1a2e] border border-white/10 px-5 py-2.5 rounded-xl text-sm font-semibold transition-all hover:text-[#f9005b]">Gyroscope</button>
                <button id="calibrate-btn" class="control-btn bg-[#050505] text-white hover:bg-[#1a1a2e] border border-white/10 px-5 py-2.5 rounded-xl text-sm font-semibold transition-all hover:text-[#f9005b]" style="display: none;">Calibrate</button>
            </div>

            <div id="permission-message" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#050505]/90 backdrop-blur-xl text-white p-8 rounded-2xl text-center z-101 border border-white/20 shadow-2xl" style="display:none;">
                <p class="mb-6 text-lg text-gray-200">To use gyroscope, we need permission:</p>
                <button id="request-permission-btn" class="bg-[#f9005b] hover:bg-pink-600 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg hover:-translate-y-1">Allow Motion Sensor Access</button>
            </div>
        </div>
    </section>

<!-- SECTION 6: SELECTED WORKS (GEELY CASE STUDY) -->
<section id="lab-section" class="py-24 md:py-32 bg-[#000000] relative z-30 border-t border-white/5 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[80%] h-32 bg-[#9d00ff]/20 blur-[100px] pointer-events-none"></div>
    <div class="absolute top-1/2 left-0 w-1/3 h-full bg-linear-to-r from-black to-transparent z-10 pointer-events-none"></div>

    <div class="max-w-360 mx-auto px-6 lg:px-12 relative z-20">
        
        <div class="text-center mb-24">
            <h2 class="text-5xl md:text-7xl font-normal text-transparent bg-clip-text bg-linear-to-r from-[#f9005b] to-[#9d00ff] mb-6 tracking-wide drop-shadow-2xl" style="font-family: 'Lobster', cursive; padding-right: 15px;">Selected Works</h2>
            <p class="text-gray-400 text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto">Kumpulan studi kasus di mana estetika visual berpadu dengan presisi teknis untuk memecahkan tantangan bisnis yang nyata.</p>
        </div>

        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-8 mb-16">
            <div class="max-w-2xl">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-5xl font-black text-transparent bg-clip-text bg-linear-to-br from-gray-700 to-gray-900 font-space">01</span>
                    <div class="h-px w-20 bg-gray-700"></div>
                    <span class="font-mono text-[#f9005b] text-sm uppercase tracking-widest">Web Development</span>
                </div>
                <img src="{{ asset('assets/images/logo-client/logo-geely.png') }}" alt="Geely Logo" class="h-12 md:h-16 w-auto object-contain mb-8 filter brightness-200">
                <h2 class="text-4xl md:text-6xl font-black text-white font-space uppercase tracking-tighter mb-4">The Geely <br><span class="text-[#f9005b]">Digital Fleet</span></h2>
                <p class="text-gray-400 font-light text-lg">
                    Pengembangan platform otomotif berkinerja tinggi. Saya membangun ekosistem digital Geely untuk regional Fatmawati dan BSD dengan fokus pada interaksi imersif, kecepatan loading, dan konversi test-drive.
                </p>
            </div>
            
            <div class="flex gap-4">
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Laravel</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">UI/UX</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">3D Assets</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="portfolio-card relative rounded-3xl overflow-hidden border border-white/10 bg-[#050505] group shadow-2xl">
                <div class="absolute top-4 left-4 z-20 flex gap-2">
                    <span class="px-4 py-1.5 text-xs font-bold font-mono bg-[#f9005b]/20 text-[#f9005b] backdrop-blur-md rounded-full border border-[#f9005b]/30">GEELY FATMAWATI</span>
                </div>
                <div class="relative w-full pt-[56.25%] bg-[#020202] overflow-hidden">
                    <img src="{{ asset('assets/images/2026-03-18 210733.png') }}" alt="Geely Fatmawati Cover" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700 ease-in-out z-0">
                    <div class="absolute inset-0 bg-linear-to-t from-[#050505]/60 via-transparent to-transparent z-0 pointer-events-none"></div>
                    
                    <div class="preview-overlay absolute inset-0 z-10 flex flex-col items-center justify-center opacity-100 lg:opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <button class="load-iframe-btn flex items-center gap-2 md:gap-3 bg-black/70 md:bg-black/50 backdrop-blur-md border border-[#f9005b] text-[#f9005b] px-5 py-2.5 md:px-8 md:py-3.5 rounded-full text-sm md:text-base font-bold hover:bg-[#f9005b] hover:text-white transition-all duration-300 shadow-[0_0_20px_rgba(249,0,91,0.4)] hover:shadow-[0_0_30px_rgba(249,0,91,0.6)] cursor-pointer pointer-events-auto" data-url="https://geelyfatmawati.id" data-title="Geely Fatmawati">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <span class="md:hidden">Tap to Preview</span>
                            <span class="hidden md:inline">Launch Experience</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="portfolio-card relative rounded-3xl overflow-hidden border border-white/10 bg-[#050505] group shadow-2xl md:translate-y-12">
                <div class="absolute top-4 left-4 z-20 flex gap-2">
                    <span class="px-4 py-1.5 text-xs font-bold font-mono bg-[#9d00ff]/20 text-[#9d00ff] backdrop-blur-md rounded-full border border-[#9d00ff]/30">GEELY BSD</span>
                </div>
                <div class="relative w-full pt-[56.25%] bg-[#020202] overflow-hidden">
                    <img src="{{ asset('assets/images/2026-03-18 211448.png') }}" alt="Geely BSD Cover" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700 ease-in-out z-0">
                    <div class="absolute inset-0 bg-linear-to-t from-[#050505]/60 via-transparent to-transparent z-0 pointer-events-none"></div>
                    
                    <div class="preview-overlay absolute inset-0 z-10 flex flex-col items-center justify-center opacity-100 lg:opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        <button class="load-iframe-btn flex items-center gap-2 md:gap-3 bg-black/70 md:bg-black/50 backdrop-blur-md border border-[#9d00ff] text-[#9d00ff] px-5 py-2.5 md:px-8 md:py-3.5 rounded-full text-sm md:text-base font-bold hover:bg-[#9d00ff] hover:text-white transition-all duration-300 shadow-[0_0_20px_rgba(157,0,255,0.4)] hover:shadow-[0_0_30px_rgba(157,0,255,0.6)] cursor-pointer pointer-events-auto" data-url="https://geelybsd.id" data-title="Geely BSD">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <span class="md:hidden">Tap to Preview</span>
                            <span class="hidden md:inline">Launch Experience</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECT 02: MAISON DE RAUX (PHOTOGRAPHY SCROLLTRIGGER) -->
        <div class="mt-40 flex flex-col lg:flex-row-reverse justify-between items-start lg:items-end gap-8 mb-16 border-t border-white/5 pt-20">
            <div class="max-w-2xl text-left lg:text-right">
                <div class="flex items-center lg:justify-end gap-4 mb-6">
                    <span class="font-mono text-[#9d00ff] text-sm uppercase tracking-widest">Photography & Direction</span>
                    <div class="h-px w-20 bg-gray-700"></div>
                    <span class="text-5xl font-black text-transparent bg-clip-text bg-linear-to-bl from-gray-700 to-gray-900 font-space">02</span>
                </div>
                <img src="{{ asset('assets/images/logo-client/images.png') }}" alt="Maison de Raux Logo" class="h-12 md:h-16 w-auto object-cover rounded-2xl mb-8 ml-0 lg:ml-auto">
                <h2 class="text-4xl md:text-6xl font-black text-white font-space uppercase tracking-tighter mb-4">Maison de Raux <br><span class="text-[#9d00ff]">Visuals</span></h2>
                <p class="text-gray-400 font-light text-lg">
                    Arahan visual dan fotografi komersial untuk Maison de Raux. Menangkap esensi dan keanggunan brand melalui komposisi gambar yang elegan dan pencahayaan sinematik.
                </p>
            </div>
            
            <div class="flex gap-4 justify-start">
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Photography</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Art Direction</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Retouching</span>
            </div>
        </div>

        <div class="relative w-full h-auto md:h-screen flex items-center mt-10 md:mt-0 overflow-hidden" id="photo-slider-viewport">
            <div id="photo-slider-track" class="flex flex-nowrap items-center gap-6 md:gap-12 px-4 md:px-12 w-full md:w-max overflow-x-auto md:overflow-visible snap-x snap-mandatory hide-scrollbar md:will-change-transform" style="-webkit-overflow-scrolling: touch;">
                
                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/IMG_8191.JPG') }}" alt="Maison de Raux 1" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/AZS02836.jpg') }}" alt="Maison de Raux 2" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/AZS02960.jpg') }}" alt="Maison de Raux 3" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/AZS03060.jpg') }}" alt="Maison de Raux 4" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/_DSF3577-Edit.jpeg') }}" alt="Maison de Raux 5" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/_DSF3612.jpeg') }}" alt="Maison de Raux 6" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/_DSF3681.jpeg') }}" alt="Maison de Raux 7" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <div class="photo-slide-item shrink-0 w-[80vw] md:w-[35vw] lg:w-[25vw] aspect-[3/4] relative rounded-3xl overflow-hidden group border border-white/10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] snap-center">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                    <img src="{{ asset('assets/images/_DSF8116 copy1 copy.jpeg') }}" alt="Maison de Raux 8" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>

        <!-- PROJECT 03: CINEMATOGRAPHY & MOTION (VIDEO REEL) -->
        <div class="mt-40 flex flex-col lg:flex-row justify-between items-start lg:items-end gap-8 mb-16 border-t border-white/5 pt-20">
            <div class="max-w-2xl text-left">
                <div class="flex items-center justify-start gap-4 mb-6">
                    <span class="text-5xl font-black text-transparent bg-clip-text bg-linear-to-br from-gray-700 to-gray-900 font-space">03</span>
                    <div class="h-px w-20 bg-gray-700"></div>
                    <span class="font-mono text-[#f9005b] text-sm uppercase tracking-widest">Cinematography & Motion</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-white font-space uppercase tracking-tighter mb-4">Motion <br><span class="text-[#f9005b]">Reel</span></h2>
                <p class="text-gray-400 font-light text-lg">
                    Koleksi karya penyutradaraan, videografi, dan motion graphics. Membawa cerita dan pesan brand ke dalam format visual bergerak yang dinamis dan sinematik.
                </p>
            </div>
            
            <div class="flex gap-4 justify-start lg:justify-end">
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Videography</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Motion Graphics</span>
                <span class="px-4 py-2 border border-white/10 rounded-full text-xs font-mono text-gray-400 bg-white/5 backdrop-blur-md">Editing</span>
            </div>
        </div>

        <!-- Grid Layout (2 Kolom HP = 5 Baris, 3 Kolom Desktop = 3 Baris) -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 pb-10 w-full">
            
            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/C0291_2.mp4') }}" data-title="Motion Reel - 01">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/C0291_2.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/1221.mp4') }}" data-title="Motion Reel - 02">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/1221.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/c0026_1.MP4') }}" data-title="Motion Reel - 03">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/c0026_1.MP4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/C0027_1.mp4') }}" data-title="Motion Reel - 04">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/C0027_1.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/fs-edu.mp4') }}" data-title="Motion Reel - 05">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/fs-edu.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/Game deemo.mp4') }}" data-title="Motion Reel - 06">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/Game deemo.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <!-- PENAMBAHAN 3 VIDEO BARU -->
            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/tuyul.mp4') }}" data-title="Motion Reel - 07">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/tuyul.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/0404(1).MP4') }}" data-title="Motion Reel - 08">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/0404(1).MP4') }}#t=0.001" type="video/mp4">
                </video>
            </div>

            <div class="load-iframe-btn relative rounded-2xl overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] aspect-video bg-[#050505] cursor-pointer" data-url="{{ asset('assets/video/IMG_6559.mp4') }}" data-title="Motion Reel - 09">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10 pointer-events-none"></div>
                <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-none transition-opacity duration-500 group-hover:opacity-0">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
                <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                    <source src="{{ asset('assets/video/IMG_6559.mp4') }}#t=0.001" type="video/mp4">
                </video>
            </div>
        </div>
        
    </div>
</section>

    <!-- SECTION 7: INTERACTIVE JOKE CTA -->
    <section class="relative w-full py-32 bg-[#050505] flex items-center justify-center overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,var(--tw-gradient-stops))] from-[#9d00ff]/10 via-[#050505] to-[#050505]"></div>
        
        <div class="w-full max-w-4xl mx-auto px-4 relative z-10">
            <!-- Modal Interaktif Sindiran HRD vs Gen Z -->
            <div class="Confirm-UI bg-black/60 backdrop-blur-xl border border-white/10 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                <div class="Confirm-Header">
                    <a class="Confirm-Header-Button Confirm-Header-Button_Close" href="javascript: void(0)"></a>
                    <a class="Confirm-Header-Button Confirm-Header-Button_Minimize" href="javascript: void(0)"></a>
                    <a class="Confirm-Header-Button Confirm-Header-Button_Maximize" href="javascript: void(0)"></a>
                    <h1 class="Confirm-Header-Title">hire_me.exe</h1>
                </div>
                <div class="Confirm-Body">
                    <h2 class="Confirm-Body-Title font-space">
                        <span class="text-[#f9005b] block text-2xl md:text-3xl mb-2">Peringatan: Senior Dev Detected!</span>
                        <span class="text-sm md:text-base font-light text-gray-300 px-4 md:px-20 block leading-relaxed">
                            Walaupun saya sudah tua dan nggak <i>relate</i> sama tren joget TikTok Gen Z, 
                            tapi logika kodingan saya jauh lebih stabil dari kesehatan mental mereka. ☕ Yakin mau dilewatin?
                        </span>
                    </h2>
                    
                    <!-- Karakter Boi Animasi Mata -->
                    <figure class="Boi">
                        <div class="Boi-Blush Boi-Blush_L"></div>
                        <div class="Boi-Blush Boi-Blush_R"></div>
                        <div class="Boi-Eye Boi-Eye_L"></div>
                        <div class="Boi-Eye Boi-Eye_R"></div>
                        <div class="Boi-Mouth"></div>
                    </figure>
                    
                    <a class="Confirm-Body-Button Confirm-Body-Button_Delete" href="mailto:rizkialiakhbar@gmail.com">Rekrut Si Tua Ini</a>
                    <a class="Confirm-Body-Button Confirm-Body-Button_Cancel" href="{{ route('genz') }}" target="_blank">Skip (Cari Gen Z)</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         MODAL PREVIEW IFRAME (Tampilan Penuh)
         ============================================== -->
    <!-- Diberi style z-index 2147483647 (maksimal int) untuk memastikan dia di atas komponen layout -->
    <div id="preview-modal" class="fixed inset-0 bg-[#000000]/98 backdrop-blur-xl opacity-0 pointer-events-none transition-opacity duration-300" style="z-index: 2147483647 !important;">
        
        <div class="relative w-full h-full flex items-center justify-center p-4 md:p-10 pt-20">
            <!-- Iframe / Video Container -->
            <div class="w-full h-full rounded-2xl overflow-hidden shadow-2xl bg-black relative border border-white/10">
                <!-- HAPUS ATRIBUT SANDBOX AGAR WARNING KUNING DI CONSOLE HILANG -->
                <iframe id="modal-iframe" src="about:blank" class="w-full h-full border-none" allow="autoplay; fullscreen"></iframe>
            </div>

            <!-- Loader -->
            <div id="modal-loader" class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none transition-opacity duration-300">
                <div class="w-12 h-12 border-4 border-white/10 border-t-[#f9005b] rounded-full animate-spin mb-4 shadow-[0_0_15px_rgba(249,0,91,0.5)]"></div>
                <p class="text-[#f9005b] font-mono text-sm tracking-widest animate-pulse bg-black/50 px-4 py-1 rounded-full">MEMUAT MEDIA...</p>
            </div>

            <!-- Tombol Kembali / Tutup (Absolute Floating) -->
            <!-- Diposisikan fixed dan dipastikan paling atas -->
            <button id="close-modal-btn" class="fixed top-6 left-4 md:top-8 md:left-8 flex items-center gap-3 text-white bg-[#f9005b] hover:bg-white hover:text-black border border-white/20 px-6 py-3 rounded-full transition-all duration-300 shadow-[0_0_30px_rgba(249,0,91,0.8)] cursor-pointer pointer-events-auto" style="z-index: 2147483647 !important;">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span class="text-sm font-bold tracking-widest uppercase">Kembali</span>
            </button>
        </div>
    </div>

    <!-- Memuat Dependensi GSAP & Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Memuat Script Animasi & Fungsionalitas Utama dengan Cache Busting -->
    <script src="{{ asset('assets/js/home.js') }}?v={{ time() }}"></script>

</x-layouts.app>