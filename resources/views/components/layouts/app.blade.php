<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Risz Ali | Creative Technologist' }}</title>
    
    <!-- Font Tipografi Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    
    <!-- Vite - Memanggil CSS dan JS bawaan Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- GLOBAL STYLES -->
    <style>
        /* --- GLOBAL CUSTOM SCROLLBAR --- */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #080815;
        }
        ::-webkit-scrollbar-thumb {
            background: #f9005b;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #9d00ff;
        }

        /* --- SEMBUNYIKAN KURSOR BAWAAN (HANYA DESKTOP) --- */
        @media (min-width: 769px) {
            * {
                cursor: none !important;
            }
        }

        /* --- SEMBUNYIKAN CUSTOM CURSOR DI HP --- */
        @media (max-width: 768px) {
            #magic-cursor,
            #magic-orb-cursor {
                display: none !important;
            }
        }

        /* --- STYLING KURSOR BOLA PERAMAL / BULAN (MAGIC ORB) --- */
        #magic-orb-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2px;

            background: radial-gradient(circle at 30% 30%, #ffffff 0%, #f9005b 35%, #5a0099 75%, #080815 100%);
            box-shadow: 
                inset -3px -3px 6px rgba(0,0,0,0.7),    
                inset 2px 2px 4px rgba(255,255,255,0.8), 
                0 0 10px rgba(249, 0, 91, 0.6),          
                0 0 20px rgba(157, 0, 255, 0.4);         
            
            transition: width 0.3s ease, height 0.3s ease, background 0.3s ease, box-shadow 0.3s ease, gap 0.3s ease;
            will-change: transform;
            
            animation: orbPulse 4s infinite alternate ease-in-out;
        }

        #magic-orb-cursor::before,
        #magic-orb-cursor::after {
            content: '';
            display: block;
            width: 8px;
            height: 2px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 3px rgba(255, 255, 255, 0.8);
            transition: width 0.3s ease, height 0.3s ease, transform 0.3s ease;
        }

        #magic-orb-cursor::before { transform: translateX(-2.5px); }
        #magic-orb-cursor::after { transform: translateX(2.5px); }

        @keyframes orbPulse {
            0% { filter: hue-rotate(0deg) brightness(1); }
            100% { filter: hue-rotate(25deg) brightness(1.2); }
        }

        /* --- STYLING KURSOR PARTICLES --- */
        #magic-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9998;
            pointer-events: none;
            mix-blend-mode: screen;
        }

        /* --- HOVER STATE --- */
        .cursor-hover-state #magic-orb-cursor {
            width: 32px; 
            height: 32px;
            gap: 3px;
            background: radial-gradient(circle at 30% 30%, #ffffff 0%, #9d00ff 40%, #f9005b 80%, #000000 100%);
            box-shadow: 
                inset -4px -4px 8px rgba(0,0,0,0.7),
                inset 3px 3px 8px rgba(255,255,255,0.9),
                0 0 18px rgba(157, 0, 255, 0.9),
                0 0 35px rgba(249, 0, 91, 0.6);
            animation-duration: 2s;
        }

        .cursor-hover-state #magic-orb-cursor::before,
        .cursor-hover-state #magic-orb-cursor::after {
            width: 13px;
            height: 2.5px;
        }
        .cursor-hover-state #magic-orb-cursor::before { transform: translateX(-3.5px); }
        .cursor-hover-state #magic-orb-cursor::after { transform: translateX(3.5px); }

        /* ======================================================== */
        /* --- STYLING CYBER WA BUTTON --- */
        /* ======================================================== */
        #cyber-wa-wrapper {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 9997;
            display: flex;
            align-items: center;
            cursor: pointer;
            filter: drop-shadow(0 0 15px rgba(37, 211, 102, 0.3));
        }

        .cyber-wa-panel {
            background: linear-gradient(90deg, rgba(10,10,20,0.95) 0%, rgba(37, 211, 102, 0.8) 100%);
            border: 1px solid rgba(37, 211, 102, 0.5);
            border-right: none;
            height: 48px;
            display: flex;
            align-items: center;
            border-radius: 24px 0 0 24px;
            margin-right: -24px;
            padding-right: 24px;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            white-space: nowrap;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            backdrop-filter: blur(10px);
        }

        .cyber-wa-text {
            color: white;
            font-family: monospace;
            font-size: 0.85rem;
            font-weight: bold;
            letter-spacing: 0.1em;
            padding-left: 20px;
            padding-right: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cyber-wa-text .blink-dot {
            width: 6px;
            height: 6px;
            background-color: #00ff88; 
            border-radius: 50%;
            animation: pulse-dot 1.5s infinite;
            box-shadow: 0 0 8px #00ff88;
        }

        .cyber-wa-core {
            position: relative;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #080815;
            border: 1px solid rgba(37, 211, 102, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transition: all 0.4s ease;
        }

        .cyber-wa-core::before, .cyber-wa-core::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            transition: all 0.4s ease;
            pointer-events: none;
        }

        .cyber-wa-core::before {
            inset: -5px;
            border: 1px dashed rgba(37, 211, 102, 0.6);
            animation: spin-right 8s linear infinite;
        }

        .cyber-wa-core::after {
            inset: -9px;
            border: 1px solid transparent;
            border-left-color: rgba(0, 230, 118, 0.8);
            border-right-color: rgba(0, 230, 118, 0.8);
            animation: spin-left 5s linear infinite;
        }

        .cyber-wa-icon {
            width: 32px;
            height: 32px;
            fill: #ffffff;
            transition: all 0.4s ease;
            filter: drop-shadow(0 0 2px rgba(255,255,255,0.5));
        }

        #cyber-wa-wrapper:hover .cyber-wa-core {
            background: rgba(37, 211, 102, 0.15);
            box-shadow: 0 0 25px rgba(37,211,102,0.6), inset 0 0 15px rgba(37,211,102,0.4);
        }

        #cyber-wa-wrapper:hover .cyber-wa-core::before {
            inset: -7px;
            border-color: #25D366; 
        }

        #cyber-wa-wrapper:hover .cyber-wa-core::after {
            inset: -12px;
            border-left-color: #00E676; 
            border-right-color: #25D366; 
        }

        #cyber-wa-wrapper:hover .cyber-wa-panel {
            max-width: 260px;
            opacity: 1;
            margin-right: -10px;
        }

        #cyber-wa-wrapper:hover .cyber-wa-icon {
            fill: #00E676; 
            transform: scale(1.15);
            filter: drop-shadow(0 0 5px rgba(0,230,118,0.8));
        }

        @keyframes spin-right { 100% { transform: rotate(360deg); } }
        @keyframes spin-left { 100% { transform: rotate(-360deg); } }
        @keyframes pulse-dot { 0%, 100% { opacity: 1; } 50% { opacity: 0.3; } }
    </style>
</head>
<body x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)" class="bg-[#080815] text-gray-100 font-sans antialiased flex flex-col min-h-screen relative">

    <!-- Wadah Kursor Partikel -->
    <div id="magic-cursor"></div>
    <!-- Kursor Bola Peramal / Bulan -->
    <div id="magic-orb-cursor"></div>

    <!-- Navbar yang dipisah (Partials) -->
    @include('partials.navbar')

    <!-- Menampilkan pesan sukses dari Controller -->
    @if(session('success'))
        <div class="fixed top-24 right-6 bg-emerald-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-all">
            {{ session('success') }}
        </div>
    @endif

    <!-- Konten halaman dinamis -->
    <main class="flex-grow w-full relative z-10">
        {{ $slot }}
    </main>

    <!-- Footer yang dipisah (Partials) -->
    @include('partials.footer')

    <!-- ============================================== -->
    <!-- CYBER WA BUTTON (WHATSAPP BRANDING + SCI-FI)   -->
    <!-- ============================================== -->
    <a href="https://wa.me/6282110946254" target="_blank" id="cyber-wa-wrapper" title="Hubungi kami via WhatsApp">
        <!-- Panel Geser (Slide-out) -->
        <div class="cyber-wa-panel">
            <span class="cyber-wa-text">
                <span class="blink-dot"></span>
                CONNECT // WHATSAPP
            </span>
        </div>
        <!-- Lingkaran Utama (Core) -->
        <div class="cyber-wa-core">
            <!-- SVG Ikon Asli WhatsApp Lengkap -->
            <svg class="cyber-wa-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.297 1.262.475 1.694.609.711.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </div>
    </a>

    <!-- SCRIPT LOGIKA KURSOR & PARTIKEL -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mengecek apakah perangkat memiliki layar sentuh (HP)
            const isTouchDevice = (('ontouchstart' in window) || (navigator.maxTouchPoints > 0));
            
            // Jika ini perangkat mobile/touchscreen, matikan kursor untuk menghemat performa
            if (isTouchDevice) return;

            // --- 1. Logika Magic Orb Cursor (Bola Peramal) ---
            const orbCursor = document.getElementById('magic-orb-cursor');
            let mouseX = window.innerWidth / 2;
            let mouseY = window.innerHeight / 2;
            let orbX = window.innerWidth / 2;
            let orbY = window.innerHeight / 2;
            let orbScale = 1;

            // Lacak pergerakan mouse
            window.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
                
                // --- 2. Logika Partikel Berjatuhan (Jejak Bintang) ---
                // Buat partikel dengan kemungkinan 15% setiap kali mouse bergerak
                if (Math.random() > 0.85) {
                    createParticle(e.clientX, e.clientY);
                }
            });

            // Animasi smooth kursor mengikuti mouse
            function animateCursor() {
                orbX += (mouseX - orbX) * 0.08;
                orbY += (mouseY - orbY) * 0.08;
                
                if(orbCursor) {
                    // Posisikan ke tengah kursor dengan translate -50%
                    orbCursor.style.transform = `translate3d(${orbX}px, ${orbY}px, 0) translate(-50%, -50%) scale(${orbScale})`;
                }
                requestAnimationFrame(animateCursor);
            }
            animateCursor();

            // --- 3. Logika Hover State (Kursor membesar ketika mendekati link/tombol) ---
            const interactiveElements = document.querySelectorAll('a, button, input, textarea, select, .cursor-pointer, #cyber-wa-wrapper');
            
            interactiveElements.forEach(el => {
                el.addEventListener('mouseenter', () => {
                    document.body.classList.add('cursor-hover-state');
                });
                el.addEventListener('mouseleave', () => {
                    document.body.classList.remove('cursor-hover-state');
                });
            });

            // --- 4. Fungsi Membuat Partikel DOM Vanilla ---
            const particleContainer = document.getElementById('magic-cursor');
            
            function createParticle(x, y) {
                if(!particleContainer) return;
                
                const particle = document.createElement('div');
                
                // Atur gaya dasar partikel
                particle.style.position = 'absolute';
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                
                // Ukuran acak antara 2px - 5px
                const size = Math.random() * 3 + 2;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                
                // Warna acak (Pink atau Ungu)
                const color = Math.random() > 0.5 ? '#f9005b' : '#9d00ff';
                particle.style.background = color;
                particle.style.boxShadow = `0 0 8px ${color}, 0 0 15px ${color}`;
                particle.style.borderRadius = '50%';
                particle.style.opacity = '1';
                particle.style.pointerEvents = 'none';
                
                // Transisi menyebar dan menghilang
                particle.style.transition = 'transform 1s cubic-bezier(0.1, 0.8, 0.3, 1), opacity 1s ease-out';
                
                particleContainer.appendChild(particle);
                
                // Paksa browser membaca DOM sebentar lalu terapkan efek menyebar
                requestAnimationFrame(() => {
                    const angle = Math.random() * Math.PI * 2;
                    const distance = Math.random() * 40 + 10; // Jarak tembakan partikel
                    const tx = Math.cos(angle) * distance;
                    const ty = Math.sin(angle) * distance;
                    
                    particle.style.transform = `translate(${tx}px, ${ty}px) scale(0)`;
                    particle.style.opacity = '0';
                });
                
                // Hapus elemen partikel dari DOM setelah animasinya selesai
                setTimeout(() => {
                    particle.remove();
                }, 1000);
            }
        });
    </script>
</body>
</html>