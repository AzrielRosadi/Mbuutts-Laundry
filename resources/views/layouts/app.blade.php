<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mbutt Laundry</title>
    @vite(['resources/css/app.css', 'resources/css/flip-card.css', 'resources/js/flip-card.js'])
</head>

<body class="bg-white text-gray-800">
    <!-- Navbar Utama -->
    <nav class="bg-white text-black py-4 shadow-md fixed w-full top-0 left-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold sm:text-2xl">MBUUTT LAUNDRY</a>

            <!-- Hamburger Menu -->
            <div class="lg:hidden flex items-center">
                <button id="hamburger" class="text-black focus:outline-none">
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="w-6 h-6 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Navigasi Utama -->
            <ul class="hidden lg:flex space-x-6">
                <li><a href="#services" class="hover:underline">Layanan</a></li>
                <li><a href="#contact" class="hover:underline">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Menu Dropdown untuk Hamburger -->
    <div id="mobile-menu" class="hidden fixed top-16 right-0 w-60 bg-gray-800 text-white shadow-md z-50">
        <ul class="flex flex-col items-start space-y-4 py-4 px-6">
            <li><a href="#services" class="hover:underline">Layanan</a></li>
            <li><a href="#contact" class="hover:underline">Kontak</a></li>
        </ul>
    </div>


    <!-- Konten -->
    <div class="container mx-auto p-6 mt-16"> <!-- mt-16 untuk memberi ruang agar konten tidak tertutup navbar -->
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center mt-10">
        <p>&copy; 2024 Mbutt Laundry. Semua Hak Dilindungi.</p>
    </footer>

    <!-- JavaScript for Hamburger Menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>

</html>
