<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .parallax {
            transition: transform 0.1s;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white flex items-center justify-center min-h-screen relative overflow-hidden">
<div id="particles-js" class="absolute w-full h-full"></div>
<div class="text-center px-6 relative z-10">

    <!-- Illustration -->
    <lottie-player 
    src="https://assets10.lottiefiles.com/packages/lf20_kcsr6fcp.json"
    background="transparent"
    speed="1"
    style="width: 300px; height: 300px;"
    loop
    autoplay>
</lottie-player>

    <!-- Title -->
    <h1 class="text-7xl font-bold text-sky-500">
        Not Found !
    </h1>

    <!-- Text -->
    <p class="mt-4 font-bold text-orange-200">
        Error Page,..
    </p>

    <!-- Text -->
    <p class="mt-3 text-gray-400">
        Halaman tidak ditemukan 😢
    </p>

    <!-- SEARCH BOX -->
    <div class="mt-6">
        <input id="search"
               type="text"
               placeholder="Cari halaman..."
               class="px-4 py-2 rounded text-black w-64">

        <button onclick="searchPage()"
                class="bg-sky-500 px-4 py-2 rounded-lg shadow-lg shadow-sky-500/30">
            Cari
        </button>
    </div>

    <!-- RESULT -->
    <p id="result" class="mt-3 text-sm text-yellow-400"></p>

    <!-- BUTTON -->
    <a href="/" 
        class="inline-block mt-6 bg-sky-48 hover:bg-sky-400 px-6 py-3 rounded-lg transition shadow-lg shadow-sky-500/50">
         ⬅ Kembali ke Beranda
    </a>

</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
    // 🎯 Interaktif: gambar mengikuti mouse
    document.addEventListener("mousemove", function(e) {
        let img = document.getElementById("img404");
        let x = (window.innerWidth / 2 - e.clientX) / 25;
        let y = (window.innerHeight / 2 - e.clientY) / 25;

        img.style.transform = `translate(${x}px, ${y}px)`;
    });

    // 🔍 Simulasi pencarian
    function searchPage() {
        let input = document.getElementById("search").value;
        let result = document.getElementById("result");

        if (input === "") {
            result.innerText = "Silahkan masukkan kata pencarian dulu!";
        } else {
            result.innerText = "Halaman '" + input + "' tidak ditemukan 😵";
        }
    }
</script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script>
particlesJS("particles-js", {
  particles: {
    number: { value: 100 },
    color: { value: "#38bdf8" }, // biru neon
    shape: { type: "circle" },
    opacity: {
      value: 0.5,
      random: true
    },
    size: {
      value: 3,
      random: true
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#38bdf8",
      opacity: 0.3,
      width: 1
    },
    move: {
      enable: true,
      speed: 1.5,
      direction: "none",
      out_mode: "out"
    }
  },
  interactivity: {
    events: {
      onhover: {
        enable: true,
        mode: "repulse"
      }
    }
  }
});
</script>

</body>
</html>