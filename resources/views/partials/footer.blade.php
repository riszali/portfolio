<footer class="bg-[#050505] border-t border-white/10 pt-20 pb-10 relative overflow-hidden z-20" id="monster-footer">

    <!-- CSS KHUSUS COOKIE MONSTER -->
    <style>
        @keyframes dropCookie {
            0% { 
                top: 0%; 
                transform: translate(-50%, -50%) scale(0) rotate(0deg); 
                opacity: 0;
            }
            15% { 
                opacity: 1; 
                transform: translate(-50%, -50%) scale(1.5) rotate(45deg); 
            }
            85% { 
                opacity: 1; 
                transform: translate(-50%, -50%) scale(1.5) rotate(180deg); 
            }
            100% { 
                top: 120%; 
                transform: translate(-50%, -50%) scale(1) rotate(360deg); 
                opacity: 0; 
            }
        }
        
        #cookie-container {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 1;
            overflow: hidden;
            pointer-events: none;
            margin: 0; padding: 0;
        }
        
        #cookie-container li {
            position: absolute;
            transform: translate(-50%, -50%) scale(0);
            list-style: none;
            opacity: 0;
            font-size: 1.5rem;
            filter: drop-shadow(0 0 5px rgba(249,0,91,0.5));
        }
        
        #cookie-container li.action {
            animation: dropCookie 3s ease-in forwards;
        }
        
        .cm-eye {
            position: relative;
            width: 60px;
            height: 60px;
            background-color: #fff;
            border-radius: 50%;
            border: 4px solid #000;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
        }
        
        .cm-pupil {
            position: absolute;
            background-color: #000;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            transition: transform 0.1s ease-out;
        }
    </style>

    <!-- ==========================================
         EASTER EGG: COOKIE MONSTER BACKGROUND 
         ========================================== -->
    <ul id="cookie-container"></ul>
    
    <div id="cm-container" class="absolute bottom-[-10px] left-1/2 transform -translate-x-1/2 z-0 opacity-20 hover:opacity-100 transition-opacity duration-700 pointer-events-none hidden md:flex flex-col justify-center items-center">
        <div id="cm-face" class="flex flex-col justify-center items-center w-48">
            <ul id="cm-eyes" class="flex justify-between w-full m-0 p-0 z-10 relative">
                <li class="cm-eye list-none">
                    <div class="cm-pupil bottom-[15%] right-[15%]"></div>
                </li>
                <li class="cm-eye list-none">
                    <div class="cm-pupil top-[15%] left-[10%]"></div>
                </li>
            </ul>
            <div id="cm-mouth" class="relative w-64 -mt-6 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 172.603 85" class="w-full drop-shadow-[0_0_20px_rgba(249,0,91,0.3)]" style="fill: #111;">
                    <path d="M40.59,11.688c-.3,1.262-.637,2.518-.9,3.787-.194.925-.3,1.868-.445,2.8a7.692,7.692,0,0,0,2.665.131c3.82-1.244,7.668-2.492,10.507-5.6a6.255,6.255,0,0,1,1.025-.832,10.576,10.576,0,0,1,1.173-.552,34.544,34.544,0,0,1,.3,3.736c-.064,2.326.381,2.681,2.745,2.421,7.555-.829,13.612-4.51,18.89-9.731a3.991,3.991,0,0,1,.956-.88,1.478,1.478,0,0,1,1.206-.07,1.187,1.187,0,0,1,.236,1.127,24.747,24.747,0,0,1-1.722,3.116c-1,1.534-.67,2.556,1.1,2.456a9.282,9.282,0,0,0,4.423-1.3,90.145,90.145,0,0,0,8.36-6.318c1.239-1.04,1.962-1.588,3.312-.1,3.5,3.865,8.356,4.778,13.2,5.574a6.445,6.445,0,0,0,2.02-.268c1.346-.233,1.442-1.032.877-2.067-.609-1.116-1.256-2.211-1.886-3.315l.358-.405a23.669,23.669,0,0,1,2.9,1.435,57.449,57.449,0,0,0,14.633,6.846,33.465,33.465,0,0,0,5.9,1.147,2.181,2.181,0,0,0,1.725-.78c.237-.328-.059-1.158-.295-1.684-.55-1.226-1.208-2.4-1.821-3.6l.436-.418A8.866,8.866,0,0,1,134,9.122c3.9,3.017,8.444,3.788,13.192,3.681,6.9-.155,13.252-1.989,18.753-6.356,1.4-1.115,2.273-2.244,1.654-4.18-.209-.656.186-1.506.305-2.267a9.34,9.34,0,0,1,2.382.647c2.548,1.492,2.622,5.346,1.968,7.5-.119.39-1.229.911-1.526.743-1.449-.82-2.482-.085-3.652.583-3.634,2.075-7.322,4.053-10.946,6.143a3.857,3.857,0,0,0-1.735,1.746c-2.049,6.067-3.863,12.215-5.98,18.257-2.158,6.161-4.582,12.228-6.885,18.339-2.083,5.525-5.7,10.081-9.633,14.3a43.015,43.015,0,0,1-8.543,6.986,62.926,62.926,0,0,1-26.648,9.289,73.6,73.6,0,0,1-31.664-3.356A56.551,56.551,0,0,1,47.96,71.836a41.991,41.991,0,0,1-12.178-14.43c-3.528-7.129-6.83-14.372-10.488-21.432a93.893,93.893,0,0,0-7.118-11.531c-1-1.387-2.935-2.269-4.617-2.957A22.658,22.658,0,0,1,5.192,15.87c-1.227-1.343-2.218-1.437-3.455-.136a6.108,6.108,0,0,1-1.379.826C-.8,13.366,1.012,8.842,3.476,8.324c1.776-.374,2.549.161,2.543,1.946-.006,1.741.881,2.828,2.083,4,6.746,6.571,16.934,6.144,24.423,2.246a47.61,47.61,0,0,0,5.993-4.161,5.515,5.515,0,0,0,.985-1.377Z" transform="translate(0)"></path>
                </svg>
            </div>
        </div>
    </div>
    
    <!-- Efek Cahaya Glow di Latar Belakang -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-32 bg-[#f9005b]/10 blur-[100px] pointer-events-none"></div>

    <!-- ==========================================
         KONTEN UTAMA FOOTER 
         ========================================== -->
    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 pointer-events-none">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16 pointer-events-auto">
            
            <!-- Kolom 1: Branding -->
            <div class="lg:col-span-2">
                <a href="{{ route('home') }}" class="text-4xl md:text-5xl text-white mb-4 inline-block hover:opacity-80 transition-opacity" style="font-family: 'Lobster', cursive;">
                    Risz Ali<span class="text-[#f9005b]">.</span>
                </a>
                <p class="text-gray-400 font-light leading-relaxed max-w-sm text-sm md:text-base mt-2">
                    Creative Technologist & Full-Stack Developer. Membangun pengalaman digital yang melampaui batasan kanvas biasa.
                </p>
            </div>

            <!-- Kolom 2: Quick Links (Sesuai Navbar) -->
            <div>
                <h4 class="text-white font-mono text-xs uppercase tracking-widest mb-6 border-b border-white/10 pb-4 inline-block">Sitemap</h4>
                <ul class="space-y-3">
                    <li><a href="#tentang" class="text-gray-400 hover:text-[#f9005b] transition-colors text-sm font-light flex items-center gap-2 group"><span class="w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span> Tentang</a></li>
                    <li><a href="#portofolio" class="text-gray-400 hover:text-[#f9005b] transition-colors text-sm font-light flex items-center gap-2 group"><span class="w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span> Portofolio</a></li>
                    <li><a href="#layanan" class="text-gray-400 hover:text-[#f9005b] transition-colors text-sm font-light flex items-center gap-2 group"><span class="w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span> Layanan</a></li>
                    <li><a href="#kontak" class="text-gray-400 hover:text-[#f9005b] transition-colors text-sm font-light flex items-center gap-2 group"><span class="w-1 h-1 bg-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span> Kontak</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Connect & Socials -->
            <div>
                <h4 class="text-white font-mono text-xs uppercase tracking-widest mb-6 border-b border-white/10 pb-4 inline-block">Connect</h4>
                <div class="flex gap-3 mb-6">
                    <!-- GitHub -->
                    <a href="https://github.com/riszali" target="_blank" aria-label="GitHub" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 hover:border-white/30 transition-all bg-white/5 backdrop-blur-md shadow-[0_0_0_transparent] hover:shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/rizki-ali-akhbar-068bb5213/" target="_blank" aria-label="LinkedIn" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#0077b5] hover:border-[#0077b5] transition-all bg-white/5 backdrop-blur-md shadow-[0_0_0_transparent] hover:shadow-[0_0_15px_rgba(0,119,181,0.5)]">
                       <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/risz.ali/" target="_blank" aria-label="Instagram" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gradient-to-tr hover:from-[#f09433] hover:via-[#e6683c] hover:to-[#bc1888] hover:border-transparent transition-all bg-white/5 backdrop-blur-md shadow-[0_0_0_transparent] hover:shadow-[0_0_15px_rgba(230,104,60,0.5)]">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.06 3.252.148 4.771 1.691 4.919 4.919.048 1.265.06 1.645.06 4.859s-.012 3.594-.06 4.858c-.148 3.228-1.667 4.771-4.919 4.919-1.266.048-1.646.06-4.85.06-3.204 0-3.584-.012-4.85-.06-3.252-.148-4.771-1.691-4.919-4.919-.048-1.265-.06-1.644-.06-4.859s.012-3.594.06-4.858c.148-3.228 1.667-4.771 4.919-4.919 1.266-.048 1.646-.06 4.85-.06zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.947.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
                <a href="mailto:rizkialiakhbar@gmail.com" class="text-sm font-mono text-gray-400 hover:text-white transition-colors border-b border-[#f9005b] pb-1 block w-fit pointer-events-auto">rizkialiakhbar@gmail.com</a>
            </div>
        </div>

        <!-- Bottom Footer (Copyright & Back to Top) -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-8 border-t border-white/5 pointer-events-auto">
            
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse shadow-[0_0_8px_#00ff88]"></span>
                <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">System Online</span>
            </div>
            
            <p class="text-zinc-500 text-xs md:text-sm font-light text-center md:text-left">
                &copy; {{ date('Y') }} Risz Ali. Designed & Built in Indonesia.
            </p>
            
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="group flex items-center gap-2 text-xs font-mono text-gray-500 hover:text-[#f9005b] uppercase tracking-widest transition-colors focus:outline-none">
                Back to Top
                <svg class="w-4 h-4 transform group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            </button>

        </div>
    </div>

    <!-- SCRIPT KHUSUS ANIMASI COOKIE MONSTER -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const setStargazer = {
                quantity: 60, // Dibatasi agar tidak lag
                selectContainer: "#cookie-container",
                generateItemTag: "li",
                generateItemClass: "cookies",
                generateItemContent: "🍪",
                setMorphClass: "action",
                setMorphSpeed: 2500,
                setMorphQuantity: 8 
            };

            const container = document.querySelector(setStargazer.selectContainer);
            if (!container) return;

            // Generate Biskuit
            for (let i = 0; i < setStargazer.quantity; i++) {
                const cookie = document.createElement(setStargazer.generateItemTag);
                cookie.className = setStargazer.generateItemClass;
                cookie.id = `${setStargazer.generateItemClass}-${i}`;
                cookie.innerHTML = setStargazer.generateItemContent;
                
                // Mulai dari luar kanvas atas
                const x = Math.floor(Math.random() * 100);
                cookie.style.left = `${x}%`;
                cookie.style.top = "-10%"; 
                
                container.appendChild(cookie);
            }

            const generatedItems = document.querySelectorAll(`${setStargazer.selectContainer} > .${setStargazer.generateItemClass}`);

            // Fungsi menjatuhkan biskuit
            function dropCookie() {
                const startID = Math.floor(Math.random() * setStargazer.quantity);
                const selection = document.getElementById(`${setStargazer.generateItemClass}-${startID}`);
                
                if (selection) {
                    selection.classList.add(setStargazer.setMorphClass);
                    setTimeout(() => {
                        selection.classList.remove(setStargazer.setMorphClass);
                        const newX = Math.floor(Math.random() * 100);
                        selection.style.left = `${newX}%`;
                    }, setStargazer.setMorphSpeed);
                }
            }

            // Mulai hujan biskuit
            setInterval(dropCookie, setStargazer.setMorphSpeed / setStargazer.setMorphQuantity);

            // Logika Mata Mengikuti Kursor
            const footer = document.getElementById('monster-footer');
            const pupils = document.querySelectorAll('.cm-pupil');
            
            footer.addEventListener('mousemove', (e) => {
                const rect = footer.getBoundingClientRect();
                
                // Hitung posisi relatif mouse di dalam area footer
                const x = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
                const y = Math.max(0, Math.min(1, (e.clientY - rect.top) / rect.height));
                
                // Translasikan bola mata
                const moveX = (x * 20) - 10; 
                const moveY = (y * 20) - 10;
                
                pupils.forEach(pupil => {
                    pupil.style.transform = `translate(${moveX}px, ${moveY}px)`;
                });
            });
            
            // Kembalikan mata ke tengah saat mouse keluar
            footer.addEventListener('mouseleave', () => {
                pupils.forEach(pupil => {
                    pupil.style.transform = `translate(0px, 0px)`;
                });
            });
        });
    </script>
</footer>