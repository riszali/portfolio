document.addEventListener("DOMContentLoaded", () => {
    // Registrasi ScrollTrigger GSAP
    gsap.registerPlugin(ScrollTrigger);

    // ==========================================
    // PERBAIKAN MOBILE: Abaikan resize dari address bar HP
    // ==========================================
    ScrollTrigger.config({ 
        ignoreMobileResize: true 
    });

    // ==========================================
    // 0. HERO SECTION VIDEO (DIKEMBALIKAN KE ASLI)
    // ==========================================
    gsap.set("#hero-video", { opacity: 0.6 });

    // --- 1. Animasi GSAP Hero Section (Efek Gerbang) ---
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#hero-section",     
            start: "top top",             
            end: "+=150%",                
            scrub: 1,                     
            pin: true,                    
            anticipatePin: 1,
            invalidateOnRefresh: true
        }
    });

    tl.to("#door-image", {
        scale: 30,           
        opacity: 0,          
        transformOrigin: "center center", 
        ease: "power2.inOut"
    }, 0);

    tl.to("#hero-text", {
        opacity: 1,          
        scale: 1,            
        ease: "power2.out",
        duration: 0.5
    }, 0.2); 

    // Refresh ScrollTrigger setelah semua konten selesai dimuat
    window.addEventListener("load", () => {
        ScrollTrigger.refresh();
    });

    // ==========================================
    // 2. TIMELINE PENGALAMAN FADE-IN
    // ==========================================
    const timelineItems = gsap.utils.toArray('.timeline-item');
    timelineItems.forEach((item, i) => {
        gsap.to(item, {
            scrollTrigger: {
                trigger: item,
                start: "top 85%", 
                toggleActions: "play none none reverse"
            },
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: "power3.out",
            delay: i * 0.1
        });
    });

    // ==========================================
    // 3. SLIDER UTAMA (CORE CAPABILITIES) - Manual Interaktif
    // ==========================================
    const sliderTrack = document.getElementById('slider-track');
    const prevSlideBtn = document.getElementById('prev-slide');
    const nextSlideBtn = document.getElementById('next-slide');
    const sliderProgress = document.getElementById('slider-progress');
    const slides = document.querySelectorAll('.slide-item');

    if (sliderTrack && slides.length > 0) {
        let currentIndex = 0;
        let slideWidth = slides[0].offsetWidth + 24; 
        const totalSlides = slides.length;

        function updateSliderPosition() {
            slideWidth = slides[0].offsetWidth + 24;
            const trackWidth = sliderTrack.scrollWidth;
            const viewportWidth = sliderTrack.parentElement.offsetWidth;
            const maxTranslate = Math.max(0, trackWidth - viewportWidth);
            
            let targetX = currentIndex * slideWidth;
            if (targetX > maxTranslate) targetX = maxTranslate;

            gsap.to(sliderTrack, {
                x: -targetX,
                duration: 0.6,
                ease: "power3.out"
            });

            if (sliderProgress) {
                const visibleSlides = Math.max(1, Math.floor(viewportWidth / slideWidth));
                const maxIndexForProgress = totalSlides - visibleSlides;
                const safeMaxIndex = Math.max(1, maxIndexForProgress);
                
                let progressPercent = 20 + (currentIndex / safeMaxIndex) * 80;
                progressPercent = Math.min(100, Math.max(20, progressPercent));

                gsap.to(sliderProgress, {
                    width: `${progressPercent}%`,
                    duration: 0.6,
                    ease: "power3.out"
                });
            }

            if (prevSlideBtn) {
                prevSlideBtn.disabled = currentIndex === 0;
                gsap.to(prevSlideBtn, { opacity: currentIndex === 0 ? 0.2 : 1, duration: 0.3 });
            }
            if (nextSlideBtn) {
                const isAtEnd = targetX >= maxTranslate;
                nextSlideBtn.disabled = isAtEnd;
                gsap.to(nextSlideBtn, { opacity: isAtEnd ? 0.2 : 1, duration: 0.3 });
            }
        }

        if (nextSlideBtn) {
            nextSlideBtn.addEventListener('click', () => {
                slideWidth = slides[0].offsetWidth + 24;
                const viewportWidth = sliderTrack.parentElement.offsetWidth;
                const maxIndex = totalSlides - Math.max(1, Math.floor(viewportWidth / slideWidth));
                if (currentIndex < maxIndex) { currentIndex++; updateSliderPosition(); }
            });
        }

        if (prevSlideBtn) {
            prevSlideBtn.addEventListener('click', () => {
                if (currentIndex > 0) { currentIndex--; updateSliderPosition(); }
            });
        }

        updateSliderPosition();

        let isDragging = false, startX, currentTranslate = 0, prevTranslate = 0;

        const startDrag = (x) => {
            isDragging = true; startX = x;
            sliderTrack.style.cursor = 'grabbing';
            gsap.killTweensOf(sliderTrack);
            prevTranslate = gsap.getProperty(sliderTrack, "x") || 0;
        };

        const stopDrag = () => {
            if (!isDragging) return;
            isDragging = false; sliderTrack.style.cursor = 'grab';
            const movedBy = currentTranslate - prevTranslate;
            slideWidth = slides[0].offsetWidth + 24;
            
            if (movedBy < -50) { 
                const maxIndex = totalSlides - Math.max(1, Math.floor(sliderTrack.parentElement.offsetWidth / slideWidth));
                if (currentIndex < maxIndex) currentIndex++;
            } else if (movedBy > 50) { 
                if (currentIndex > 0) currentIndex--;
            }
            updateSliderPosition();
        };

        const drag = (x) => {
            if (!isDragging) return; 
            const walk = x - startX;
            currentTranslate = prevTranslate + walk;
            const maxTranslate = Math.max(0, sliderTrack.scrollWidth - sliderTrack.parentElement.offsetWidth);
            if (currentTranslate > 0) currentTranslate *= 0.3;
            else if (currentTranslate < -maxTranslate) currentTranslate = -maxTranslate + ((currentTranslate + maxTranslate) * 0.3);
            gsap.set(sliderTrack, { x: currentTranslate });
        };

        sliderTrack.addEventListener('mousedown', (e) => { e.preventDefault(); startDrag(e.pageX); });
        window.addEventListener('mouseup', stopDrag);
        window.addEventListener('mousemove', (e) => drag(e.pageX));
        sliderTrack.addEventListener('touchstart', (e) => startDrag(e.touches[0].clientX), { passive: true });
        window.addEventListener('touchend', stopDrag);
        window.addEventListener('touchmove', (e) => drag(e.touches[0].clientX), { passive: true });
        window.addEventListener('resize', updateSliderPosition);
    }

    // ==========================================
    // 4. EFEK HOVER SPOTLIGHT (TECH CARDS)
    // ==========================================
    const techCards = document.querySelectorAll('.slide-item');
    techCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });


    // ==========================================
    // 5. MAISON DE RAUX - SCROLLTRIGGER GALLERY
    // ==========================================
    const photoViewport = document.getElementById('photo-slider-viewport');
    const photoTrack = document.getElementById('photo-slider-track');

    if (photoViewport && photoTrack) {
        let mm = gsap.matchMedia();

        // --- DESKTOP / TABLET (Lebar > 768px) ---
        mm.add("(min-width: 768px)", () => {
            
            // PERBAIKAN: Set CSS secara paksa via JS agar Native Scroll dari Tailwind/Browser 
            // tidak bentrok (menyebabkan patah-patah/hilang) dengan animasi GSAP.
            gsap.set(photoTrack, {
                display: "flex",
                flexWrap: "nowrap",
                width: "max-content", // Menahan agar elemen tidak mengempis / collapse
                overflowX: "visible"  // Penting agar konten diluar pandangan tidak terpotong
            });
            gsap.set(photoViewport, {
                overflowX: "hidden" // Pembungkus disembunyikan overflow-nya
            });
            
            // PERBAIKAN FOTO TERAKHIR: Hitung dengan tepat lebar total + margin layar ekstra
            function getScrollAmount() {
                // Total lebar deretan foto, dikurangi lebar window, lalu DITAMBAH ekstra offset 
                // agar foto paling kanan punya cukup 'ruang nafas' untuk masuk ke tengah layar.
                let trackWidth = photoTrack.scrollWidth;
                let viewportWidth = window.innerWidth;
                
                // Tambahan margin 20% dari lebar layar agar foto terakhir terseret penuh
                return (trackWidth - viewportWidth) + (viewportWidth * 0.20); 
            }

            const tween = gsap.to(photoTrack, {
                // Pakai ()=> agar dinamis saat layar pengguna di-resize
                x: () => -getScrollAmount(), 
                ease: "none", 
                force3D: true 
            });

            ScrollTrigger.create({
                trigger: photoViewport,
                start: "center center", 
                // Sesuaikan 'end' persis dengan getScrollAmount agar rasio scroll mouse & animasi 1:1
                end: () => `+=${getScrollAmount()}`, 
                pin: true,
                animation: tween,
                scrub: 1.2, // Momentum agar pergerakan mouse halus
                invalidateOnRefresh: true 
            });

            return () => {
                // Pembersihan saat berpindah ke Mobile Mode
                gsap.killTweensOf(photoTrack);
                gsap.set(photoTrack, { clearProps: "all" });
                gsap.set(photoViewport, { clearProps: "overflowX" });
            };
        });

        // --- MOBILE / SMARTPHONE (Lebar < 768px) ---
        mm.add("(max-width: 767px)", () => {
            // Biarkan native swipe dari Tailwind berjalan
            gsap.set(photoTrack, { clearProps: "all" });
            gsap.set(photoViewport, { clearProps: "overflowX" });
        });
    }


    // ==========================================
    // 6. LOGIKA MODAL PREVIEW (WEB & VIDEO FULLSCREEN)
    // ==========================================
    const previewModal = document.getElementById('preview-modal');
    const modalIframe = document.getElementById('modal-iframe');
    const modalLoader = document.getElementById('modal-loader');
    const closeModalBtn = document.getElementById('close-modal-btn');

    if (previewModal) {
        document.body.appendChild(previewModal);
    }

    const loadWebButtons = document.querySelectorAll('.load-iframe-btn');
    
    loadWebButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-url');
            
            modalLoader.style.opacity = '1';
            
            previewModal.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden'; 
            
            modalIframe.src = url;

            modalIframe.onload = () => {
                if (modalIframe.src !== 'about:blank') {
                    modalLoader.style.opacity = '0';
                }
            };
        });
    });

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', () => {
            previewModal.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = ''; 
            modalIframe.src = 'about:blank'; 
        });
    }

    // ==========================================
    // 7. SCRIPT THREE.JS PORTAPLANE
    // ==========================================
    let isPortaplaneVisible = false;
    const portaplaneSection = document.getElementById('section-portaplane');
    const portaplaneObserver = new IntersectionObserver((entries) => {
        isPortaplaneVisible = entries[0].isIntersecting;
    }, { threshold: 0 });
    if (portaplaneSection) portaplaneObserver.observe(portaplaneSection);

    const initPortaplane = () => {
        const settings = { sizes: { width: 0, height: 0 }, boxDimensions: { h: 1.4, w: 1 } };
        const canvasContainer = document.getElementById('portaplane-canvas-wrapper');
        if (!canvasContainer) return;

        settings.sizes.width = canvasContainer.clientWidth;
        settings.sizes.height = canvasContainer.clientHeight;
        if (settings.sizes.width === 0 || settings.sizes.height === 0) {
            settings.sizes.width = window.innerWidth;
            settings.sizes.height = window.innerHeight;
        }

        const textureLoader = new THREE.TextureLoader();
        const textures = {};
        const loadTexture = (url, name) => {
            return new Promise((resolve) => {
            textureLoader.load(url, (texture) => { textures[name] = texture; resolve(texture); }, undefined, 
                (error) => { textures[name] = new THREE.Color(0x888888); resolve(textures[name]); }
            );
            });
        };

        Promise.all([
            loadTexture('https://images.unsplash.com/photo-1647998681311-390a8474174c?q=80&w=1528&auto=format&fit=crop', 'photoTexture02'),
            loadTexture('https://images.unsplash.com/photo-1671963868167-ba3f620c9dac?q=80&w=654&auto=format&fit=crop', 'photoTexture03'),
            loadTexture('https://images.unsplash.com/photo-1662548293729-0da75f4178d0?q=80&w=1740&auto=format&fit=crop', 'photoTexture')
        ]).then(() => {
            textures.photoTexture.wrapS = THREE.RepeatWrapping;
            textures.photoTexture.wrapT = THREE.RepeatWrapping;
            textures.photoTexture.repeat.set( .1, .1 );

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, settings.sizes.width / settings.sizes.height, 0.1, 1000);

            const updateCameraSettings = () => {
                if (window.innerWidth <= 768) { camera.fov = 100; camera.position.set(0, 0, 2.4); } 
                else { camera.fov = 75; camera.position.set(0, 0, 3); }
                camera.aspect = settings.sizes.width / settings.sizes.height;
                camera.updateProjectionMatrix();
            };
            updateCameraSettings();
            camera.lookAt(0, 0, 0);
            scene.add(camera);
            scene.add(new THREE.AmbientLight(0xffffff, .5));
            
            const planeGeometry = new THREE.PlaneGeometry(settings.boxDimensions.w, settings.boxDimensions.h);
            const renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
            renderer.setSize( settings.sizes.width, settings.sizes.height );
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            canvasContainer.appendChild( renderer.domElement );

            function RoundedPortalPhotoPlane(geometry, photoTexture) {
                const material = photoTexture instanceof THREE.Texture 
                    ? new THREE.MeshMatcapMaterial({ matcap: photoTexture, transparent: true })
                    : new THREE.MeshBasicMaterial({ color: photoTexture, transparent: true });
            
                if (photoTexture instanceof THREE.Texture) {
                    material.onBeforeCompile = (shader) => {
                        shader.vertexShader = shader.vertexShader.replace('#include <common>', `#include <common>\nvarying vec4 vPosition;\nvarying vec2 vUv;`);
                        shader.vertexShader = shader.vertexShader.replace('#include <fog_vertex>', `#include <fog_vertex>\nvPosition = mvPosition;\nvUv = uv;`);
                        shader.fragmentShader = shader.fragmentShader.replace(`#include <common>`, `#include <common>\nvarying vec4 vPosition;\nvarying vec2 vUv;\nfloat roundedBoxSDF(vec2 CenterPosition, vec2 Size, float Radius) { return length(max(abs(CenterPosition)-Size+Radius,0.0))-Radius; }`);
                        shader.fragmentShader = shader.fragmentShader.replace(`#include <dithering_fragment>`, `#include <dithering_fragment>\nvec2 size = vec2(1.0, 1.0);\nfloat edgeSoftness  = 0.001;\nfloat radius = 0.08;\nfloat distance  = roundedBoxSDF(vUv.xy - (size/2.0), size/2.0, radius);\nfloat smoothedAlpha =  1.0-smoothstep(0.0, edgeSoftness * 2.0,distance);\ngl_FragColor = vec4(outgoingLight, smoothedAlpha);`);
                    };
                }
                return new THREE.Mesh( geometry, material );
            }
            
            const planeGroup = new THREE.Group();
            const photoPlane01 = new RoundedPortalPhotoPlane(planeGeometry, textures.photoTexture02);
            photoPlane01.position.set(-1, 0, 1); photoPlane01.rotation.y = Math.PI * 0.1; planeGroup.add(photoPlane01);
            const photoPlane02 = new RoundedPortalPhotoPlane(planeGeometry, textures.photoTexture);
            photoPlane02.position.set(0, 0, 0.5); planeGroup.add(photoPlane02);
            const photoPlane03 = new RoundedPortalPhotoPlane(planeGeometry, textures.photoTexture03);
            photoPlane03.position.set(1, 0, 1); photoPlane03.rotation.y = Math.PI * -0.1; planeGroup.add(photoPlane03);
            scene.add(planeGroup);
            
            let currentControlMode = 'mouse';
            const controlInput = new THREE.Vector2();
            let gyroOffset = { alpha: 0, beta: 0, gamma: 0 }, isCalibrated = false;

            const mouseBtn = document.getElementById('mouse-control-btn'), gyroBtn = document.getElementById('gyro-control-btn');
            const calBtn = document.getElementById('calibrate-btn'), permMsg = document.getElementById('permission-message'), reqPermBtn = document.getElementById('request-permission-btn');

            const handleMouseMove = (event) => {
                const rect = canvasContainer.getBoundingClientRect();
                controlInput.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
                controlInput.y = - ((event.clientY - rect.top) / rect.height) * 2 + 1;
            };

            const handleDeviceOrientation = (event) => {
                if (event.alpha === null || event.beta === null || event.gamma === null) return;
                if (!isCalibrated) { gyroOffset.alpha = event.alpha; gyroOffset.beta = event.beta; gyroOffset.gamma = event.gamma; isCalibrated = true; }
                const beta = event.beta - gyroOffset.beta, gamma = event.gamma - gyroOffset.gamma;
                controlInput.x = THREE.MathUtils.clamp(THREE.MathUtils.degToRad(gamma) * -0.8, -Math.PI / 5, Math.PI / 5);
                controlInput.y = THREE.MathUtils.clamp(THREE.MathUtils.degToRad(beta) * 0.8, -Math.PI / 5, Math.PI / 5);
            };

            const setControlMode = (mode) => {
                mouseBtn.classList.remove('active', 'bg-[#f9005b]'); mouseBtn.classList.add('bg-[#080815]');
                gyroBtn.classList.remove('active', 'bg-[#f9005b]'); gyroBtn.classList.add('bg-[#080815]');
                window.removeEventListener('mousemove', handleMouseMove); window.removeEventListener('deviceorientation', handleDeviceOrientation);
                permMsg.style.display = 'none'; currentControlMode = mode;

                if (mode === 'mouse') {
                    window.addEventListener('mousemove', handleMouseMove);
                    mouseBtn.classList.add('active', 'bg-[#f9005b]'); mouseBtn.classList.remove('bg-[#080815]');
                    calBtn.style.display = 'none';
                } else if (mode === 'gyro') {
                    if (typeof DeviceOrientationEvent !== 'undefined' && typeof DeviceOrientationEvent.requestPermission === 'function') {
                        permMsg.style.display = 'flex';
                        
                        reqPermBtn.onclick = () => {
                            DeviceOrientationEvent.requestPermission().then(state => {
                                if (state === 'granted') { 
                                    permMsg.style.display = 'none';
                                    window.addEventListener('deviceorientation', handleDeviceOrientation); 
                                    isCalibrated = false; 
                                } else { 
                                    const pTag = permMsg.querySelector('p');
                                    const originalText = pTag.innerText;
                                    const originalBtnText = reqPermBtn.innerText;
                                    
                                    pTag.innerHTML = "<span class='text-[#f9005b] font-bold text-xl'>Izin Ditolak</span><br><br><span class='text-sm text-gray-300'>Anda menolak akses sensor. Kembali ke mode Mouse.</span>";
                                    reqPermBtn.innerText = "Mengerti";
                                    
                                    reqPermBtn.onclick = () => {
                                        pTag.innerText = originalText;
                                        reqPermBtn.innerText = originalBtnText;
                                        permMsg.style.display = 'none';
                                        setControlMode('mouse');
                                    };
                                }
                            }).catch(err => {
                                console.error("Gyroscope error:", err);
                                const pTag = permMsg.querySelector('p');
                                const originalText = pTag.innerText;
                                const originalBtnText = reqPermBtn.innerText;
                                
                                pTag.innerHTML = "<span class='text-[#f9005b] font-bold text-xl'>Sensor Diblokir</span><br><br><span class='text-sm text-gray-300'>Fitur Gyroscope diblokir karena membutuhkan koneksi aman (HTTPS). Karena Anda menggunakan HTTP lokal, akses ditolak otomatis. Gunakan Ngrok untuk URL HTTPS.</span>";
                                reqPermBtn.innerText = "Tutup & Gunakan Mouse";
                                
                                reqPermBtn.onclick = () => {
                                    pTag.innerText = originalText;
                                    reqPermBtn.innerText = originalBtnText;
                                    permMsg.style.display = 'none';
                                    setControlMode('mouse');
                                };
                            });
                        };
                    } else { 
                        window.addEventListener('deviceorientation', handleDeviceOrientation); 
                    }
                    gyroBtn.classList.add('active', 'bg-[#f9005b]'); gyroBtn.classList.remove('bg-[#080815]');
                    calBtn.style.display = 'inline-block'; isCalibrated = false;
                }
                gsap.to(planeGroup.rotation, { duration: 0.5, x: 0, y: 0, z: 0 }); controlInput.set(0, 0);
            };

            mouseBtn.addEventListener('click', () => setControlMode('mouse'));
            gyroBtn.addEventListener('click', () => setControlMode('gyro'));
            calBtn.addEventListener('click', () => { if (currentControlMode === 'gyro') { isCalibrated = false; controlInput.set(0, 0); gsap.to(planeGroup.rotation, { duration: 0.5, x: 0, y: 0, z: 0 }); } });
            setControlMode('mouse');
            
            const clock = new THREE.Clock();
            renderer.setAnimationLoop(() => {
                if (!isPortaplaneVisible) return;
                const dt = clock.getDelta(), smooth = 7;
                planeGroup.rotation.y += (controlInput.x - planeGroup.rotation.y) * smooth * dt;
                planeGroup.rotation.x += (controlInput.y - planeGroup.rotation.x) * smooth * dt;
                renderer.render(scene, camera);
            });

            window.addEventListener('resize', () => {
                settings.sizes.width = canvasContainer.clientWidth; settings.sizes.height = canvasContainer.clientHeight;
                renderer.setSize(settings.sizes.width, settings.sizes.height);
                renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2)); updateCameraSettings();
            });
        });
    };
    initPortaplane();

    // ==========================================
    // 8. LOGIKA INTERACTIVE BOI CHARACTER
    // ==========================================
    const confirmUI = document.querySelector('.Confirm-UI');
    const boi = document.querySelector('.Boi');
    const btnDelete = document.querySelector('.Confirm-Body-Button_Delete'); // Tombol Rekrut
    const btnCancel = document.querySelector('.Confirm-Body-Button_Cancel'); // Tombol Skip

    if (confirmUI && boi && btnDelete && btnCancel) {
        const current = {
            happiness: 0.9,
            derp: 1,
            px: 0.5,
            py: 0.5
        };
        const target = { ...current };

        confirmUI.addEventListener('mousemove', (e) => {
            let dx1 = e.clientX - btnDelete.getBoundingClientRect().x - btnDelete.getBoundingClientRect().width * 0.5;
            let dy1 = e.clientY - btnDelete.getBoundingClientRect().y - btnDelete.getBoundingClientRect().height * 0.5;
            
            let dx2 = e.clientX - btnCancel.getBoundingClientRect().x - btnCancel.getBoundingClientRect().width * 0.5;
            let dy2 = e.clientY - btnCancel.getBoundingClientRect().y - btnCancel.getBoundingClientRect().height * 0.5;
            
            let px = (e.clientX - confirmUI.getBoundingClientRect().x) / confirmUI.getBoundingClientRect().width;
            let py = (e.clientY - confirmUI.getBoundingClientRect().y) / confirmUI.getBoundingClientRect().height;
            
            let distDelete = Math.sqrt(dx1 * dx1 + dy1 * dy1);
            let distCancel = Math.sqrt(dx2 * dx2 + dy2 * dy2);
            
            // Logika Emosi Boi
            let happiness = Math.pow(distCancel / (distCancel + distDelete), 0.75);

            target.happiness = happiness;
            target.derp = 0;
            target.px = px;
            target.py = py;
        });

        confirmUI.addEventListener('mouseleave', () => {
            target.happiness = 0.9;
            target.derp = 1;
            target.px = 0.5;
            target.py = 0.5;
        });

        function updateBoi() {
            for (let prop in target) {
                if (target[prop] === current[prop]) {
                    continue;
                } else if (Math.abs(target[prop] - current[prop]) < 0.01) {
                    current[prop] = target[prop];
                } else {
                    current[prop] += (target[prop] - current[prop]) * 0.1;
                }
                boi.style.setProperty(`--${prop}`, current[prop]);
            }
            requestAnimationFrame(updateBoi);
        }
        
        updateBoi();
    }
});