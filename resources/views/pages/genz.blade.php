<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Gen Z...</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font: inherit;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            font-family: 'Space Grotesk', sans-serif;
            background: radial-gradient(circle at center, #85D8CE, #085078 90%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .head {
            margin-top: 40px;
            width: 300px;
            height: 270px;
            background: #faad84;
            border-radius: 100px 0 400px 400px;
            box-shadow: inset 0 0 0 4px #d67a4e, inset 0 -20px 0 #faad84, inset 0 -40px 0 -15px #d67a4e;
            position: relative;
            transition: 0.2s ease-in-out;
            cursor: pointer; /* Menambahkan cursor pointer agar pengguna tahu ini bisa diklik/disentuh */
            -webkit-tap-highlight-color: transparent; /* Menghilangkan highlight biru saat disentuh di HP */
        }

        .head:after {
            transition: 0.2s ease-in-out;
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 70px 30px 0 30px;
            border-color: #330004 transparent transparent transparent;
            position: absolute;
            bottom: -45px;
            left: 50%;
            transform-origin: 50% 0%;
            transform: translateX(-50%) scaleY(0);
        }

        /* Saat di Hover (PC) atau kelas is-angry aktif (Mobile/Touch) */
        .head:hover, .head.is-angry {
            background: #ce0010;
            border-radius: 500% 500% 500% 500% / 500% 500% 800% 800%;
            height: 280px;
            box-shadow: inset 0 0 0 5px #99000c, 0 0 700px 60px #99000c, 0 0 0 10000px #000000;
        }

        .head:hover:after, .head.is-angry:after {
            transform: translateX(-50%) scaleY(1);
        }

        .head:hover .eye, .head.is-angry .eye {
            background: linear-gradient(to right, transparent, transparent 10px, #660008 10px, #660008 15px, transparent 15px), #f9eb9c;
            background-position: 5px 25px, center;
            box-shadow: 0 0 0 15px #b3000e;
        }

        .head:hover .eye.second:after, .head.is-angry .eye.second:after {
            box-shadow: 0 5px 0 0 #660008;
        }

        .head:hover .eye:before, .head.is-angry .eye:before {
            background: transparent;
            box-shadow: inset 5px -15px 0 0 #660008;
        }

        .head:hover .ear, .head.is-angry .ear {
            background: #ce0010;
            box-shadow: -3px -3px 0 3px #660008, -3px 3px 0 3px #660008;
            border-radius: 0px 0px 0px 500px;
            transform: skewY(30deg) translateX(-10px) translateY(-10px);
        }

        .head:hover .ear:nth-of-type(2), .head.is-angry .ear:nth-of-type(2) {
            transform: scaleX(-1) skewY(30deg) translateX(-10px) translateY(-10px);
        }

        .head:hover .mouth, .head.is-angry .mouth {
            background: #4d0006;
            transform: translateX(-50%) translateY(20px);
            height: 50px;
            border-radius: 0 0 300% 300% / 0 0 500% 500%;
        }

        .head:hover .mouth .jowl, .head.is-angry .mouth .jowl {
            opacity: 1;
            background: transparent;
            box-shadow: 4px -5px 0 0 #99000c;
            transform: translateX(-10px);
            border-radius: 0 100% 0 100%;
        }

        .head:hover .mouth .jowl:before, .head.is-angry .mouth .jowl:before,
        .head:hover .mouth .jowl:after, .head.is-angry .mouth .jowl:after {
            transition: 0.1s;
            transition-delay: 0.2s;
            transform: scaleY(1);
        }

        .head:hover .mouth .jowl:nth-of-type(2), .head.is-angry .mouth .jowl:nth-of-type(2) {
            box-shadow: -4px -5px 0 0 #99000c;
            transform: translateX(10px);
            border-radius: 100% 0 100% 0;
        }

        .head:hover .mouth .jowl:nth-of-type(2):after, .head.is-angry .mouth .jowl:nth-of-type(2):after {
            display: none;
        }

        .head:hover .mouth:before, .head.is-angry .mouth:before,
        .head:hover .mouth:after, .head.is-angry .mouth:after {
            opacity: 1;
            border-width: 5px 60px 5px 0;
            border-color: transparent #000 transparent transparent;
            left: -10px;
            top: -15px;
            transform: rotate(-15deg);
        }

        .head:hover .mouth:after, .head.is-angry .mouth:after {
            left: auto;
            right: -10px;
            transform: rotate(15deg) scaleX(-1);
        }

        .head:hover .deadanimal, .head.is-angry .deadanimal {
            background: #ce0010;
            width: 100%;
            border-radius: 500% 500% 0 0 / 600% 600% 0 0;
            box-shadow: inset 0 5px 0 0 #660008, inset 5px 5px 0 0 #660008, inset -5px 5px 0 0 #660008;
            transform: translateY(50px);
            height: 200px;
        }

        .head:hover .deadanimal:before, .head.is-angry .deadanimal:before,
        .head:hover .deadanimal:after, .head.is-angry .deadanimal:after {
            background: transparent;
            box-shadow: inset 20px -20px 0px #fdf9e2, inset 20px -40px 0px #faefb9;
            border-radius: 100%;
            transform: translateX(-20px) translateY(-120px) rotate(-25deg);
        }

        .head:hover .deadanimal:after, .head.is-angry .deadanimal:after {
            box-shadow: inset -20px -20px 0px #fdf9e2, inset -20px -40px 0px #faefb9;
            transform: translateX(20px) translateY(-120px) rotate(25deg);
        }

        /* Standby State */
        .deadanimal {
            transition: 0.2s ease-in-out;
            position: relative;
            width: 120%;
            height: 140px;
            background: #ebcb14;
            left: 0;
            top: -110px;
            border-radius: 1500px 0 1500px 0;
            box-shadow: inset 0px -10px 0px #c1a610, inset -15px 5px 0 #ebcb14, inset -12px 0 0 #c1a610, inset -38px 6px 0 #ebcb14, inset -35px 0 0 #c1a610, inset -69px 0 0 #ebcb14, inset -68px -2px 0 #c1a610, inset -115px 0 0 #ebcb14, inset -114px -4px 0 #c1a610, inset -235px 0 0 #ebcb14, -5px 0 0 0 #c1a610, 0 0 0 5px #c1a610;
            z-index: 1;
            display: block;
        }

        .deadanimal:before, .deadanimal:after {
            transition: 0.2s ease-in-out;
            content: '';
            position: absolute;
            left: 0;
            top: 130px;
            width: 40px;
            height: 100px;
            background: #ebcb14;
            display: block;
            border-radius: 0 500px 700px 0 / 0 500px 1500px 0;
            box-shadow: 0 -10px 0 0 #c1a610, -4.5px 0 0 #c1a610, 0 0 0 5px #c1a610;
        }

        .deadanimal:after {
            left: 260px;
            height: 100px;
            top: 130px;
            z-index: -1;
            border-radius: 500px 0 0 600px / 500px 0 0 1500px;
            box-shadow: 0 -10px 0 0 #c1a610, 4.5px 0 0 #c1a610, 4.5px -10px 0 #c1a610, 0 0 0 5px #c1a610;
        }

        .eye {
            transition: 0.2s ease-in-out;
            width: 40px;
            height: 30px;
            position: absolute;
            border-radius: 100%;
            border-bottom: 5px solid #a86136;
            z-index: 3;
            left: 80px;
            top: 70px;
            box-shadow: 0 0 0 15px #fcd9c5;
        }

        .eye:before {
            transition: 0.2s ease-in-out;
            content: '';
            position: absolute;
            width: 80px;
            height: 20px;
            background: #ebcb14;
            left: -20px;
            top: -20px;
            border-radius: 100px 0px 100px 0px;
            box-shadow: 0px 0px 0px 5px #c1a610;
            transform: rotate(15deg);
        }

        .eye.second {
            transition: 0.2s ease-in-out;
            left: auto;
            right: 80px;
            transform: scaleX(-1);
        }

        .eye.second:after {
            transition: 0.2s ease-in-out;
            content: '';
            position: absolute;
            width: 40px;
            height: 30px;
            border-radius: 20%;
            right: -50px;
            top: 30px;
            box-shadow: 0 5px 0 0 #d67a4e;
        }

        .mouth {
            transition: 0.2s ease-in-out;
            position: absolute;
            z-index: 1;
            bottom: 90px;
            left: 50%;
            z-index: 5;
            height: 30px;
            width: 100px;
            transform: translateX(-50%);
            background: linear-gradient(to bottom, #faad84, #faad84 46%, #c65f21 46%, #d67a4e 56%, #faad84 56%);
        }

        .mouth:before, .mouth:after {
            transition: 0.2s ease-in-out;
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 15px 50px 15px 0;
            border-color: transparent #d67a4e transparent transparent;
            border-radius: 250px;
            left: 2px;
            opacity: 0.5;
        }

        .mouth:after {
            transition: 0.2s ease-in-out;
            border-style: solid;
            border-width: 15px 0px 15px 50px;
            border-color: transparent transparent transparent #d67a4e;
            left: auto;
            right: 2px;
        }

        .mouth .jowl {
            transition: 0.2s ease-in-out;
            width: 85px;
            height: 80px;
            position: absolute;
            border-radius: 100%;
            left: -70px;
            top: 0px;
            background: #faad84;
            box-shadow: 1px 5px 0 0 #e59a72;
        }

        .mouth .jowl:before, .mouth .jowl:after {
            transition: 0.2s ease-in-out;
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 25px 10px 0 10px;
            border-color: #fdf9e2 transparent transparent transparent;
            left: 95px;
            top: 0px;
            transform-origin: 50% 0%;
            transform: scaleY(0);
            transition-delay: 0s;
        }

        .mouth .jowl:after {
            left: 145px;
        }

        .mouth .jowl:nth-of-type(2) {
            left: auto;
            right: -70px;
            box-shadow: -1px 5px 0 0 #e59a72;
        }

        .mouth .jowl:nth-of-type(2):before {
            display: none;
        }

        .ear {
            transition: background 0.2s ease-in-out, border-radius 0.2s ease-in-out;
            width: 40px;
            height: 70px;
            background: #faad84;
            position: absolute;
            left: -5px;
            top: 90px;
            z-index: 2;
            border-radius: 100% 0 0 100%;
            box-shadow: -3px 0 0 3px #d67a4e;
        }

        .ear:nth-of-type(2) {
            transform: scaleX(-1);
            left: auto;
            right: -5px;
        }

        /* Pesan Sindiran */
        .message-container {
            position: absolute;
            bottom: 40px;
            text-align: center;
            color: #fff;
            z-index: 10;
            padding: 0 20px; /* Tambahan padding untuk layar kecil */
        }
        
        .message-container h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .message-container p {
            color: #fdf9e2;
            font-size: 14px;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .btn-back {
            display: inline-block;
            background: #ce0010;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(206, 0, 16, 0.4);
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            transform: translateY(-3px) scale(1.05);
            background: white;
            color: #ce0010;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.4);
        }

        /* Penyesuaian responsif untuk layar yang sangat kecil (Mobile) */
        @media (max-width: 400px) {
            .head {
                transform: scale(0.8);
                margin-top: 0;
            }
            .message-container {
                bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Animasi Monster yang Dikonversi dari HAML -->
    <!-- Menambahkan ID untuk menargetkan elemen dengan JS -->
    <div class="head" id="monster-head" title="Arahkan kursor atau sentuh saya!">
        <div class="deadanimal"></div>
        <div class="ear"></div>
        <div class="ear"></div>
        <div class="eye"></div>
        <div class="eye second"></div>
        <div class="mouth">
            <div class="jowl"></div>
            <div class="jowl"></div>
        </div>
    </div>

    <!-- Teks Sindiran HRD & Tombol Kembali -->
    <div class="message-container">
        <h2>Developer Gen Z sedang "Healing" ✨</h2>
        <!-- Teks diubah sedikit agar relevan dengan interaksi tap di HP -->
        <p>Arahkan kursor atau <b>sentuh</b> si tua yang Anda tolak di atas kalau tidak percaya.</p>
        <a href="{{ route('home') }}" class="btn-back">Kembali ke Senior Dev</a>
    </div>

    <!-- Script untuk menangani sentuhan di HP -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headElement = document.getElementById('monster-head');
            
            // Toggle class 'is-angry' saat diklik atau disentuh (touch)
            headElement.addEventListener('click', function() {
                this.classList.toggle('is-angry');
            });
        });
    </script>
</body>
</html>