<!DOCTYPE html>
<html>
<head>
    <title>Selamat Ulang Tahun!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #1a001a;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-align: center;
            padding: 20px;
            color: white;
            margin: 0;
            overflow-y: auto; /* ✅ Aktifkan scroll vertikal */
        }

        h1 {
            color: #ff66cc;
            font-size: 2em;
            animation: bounce 1s infinite alternate;
            z-index: 1;
            position: relative;
        }

        @keyframes bounce {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .emoji {
            font-size: 1.5em;
            margin-top: 10px;
        }

        .gallery {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            z-index: 1;
            position: relative;
        }

        .gallery img {
            width: 90%;
            max-width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
        }

        footer {
            margin-top: 30px;
            color: #aaa;
            z-index: 1;
            position: relative;
            font-size: 0.9em;
            padding-bottom: 40px;
        }

        /* Fireworks */
        .firework {
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: white;
            border-radius: 50%;
            animation: explode 1s ease-out infinite;
            opacity: 0;
            pointer-events: none;
        }

        @keyframes explode {
            0% {
                transform: scale(0.5) translate(0, 0);
                opacity: 1;
            }
            100% {
                transform: scale(1.5) translate(var(--x), var(--y));
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <?php
        $nama = "URAAWRRR7";
        echo "<h1>HAPPY BIRTHDAY  $nama 😝</h1>";
    ?>
    <div class="emoji">🎂 🥳 </div>

    <div class="gallery">
        <img src="uin.png" alt="Foto 1">
        <img src="selfie.png" alt="Foto 2">
        <img src="gn.png" alt="Foto 3">
    </div>

    <div class="wish">
    <h2>WISH</h2>
    <p>
        Seperti 3726 mdpl, selalu butuh waktu yang lama untuk mendapatkan sesuatu yang indah"
    </p>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> rejaaa 
    </footer>

    <!-- Efek petasan -->
    <?php
        for ($i = 0; $i < 20; $i++) {
            $x = rand(-200, 200) . "px";
            $y = rand(-200, 200) . "px";
            $left = rand(0, 100) . "vw";
            $top = rand(0, 100) . "vh";
            echo "<div class='firework' style='--x: $x; --y: $y; left: $left; top: $top;'></div>";
        }
    ?>

</body>
</html>
