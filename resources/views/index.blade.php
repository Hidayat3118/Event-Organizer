<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Organizer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    {{-- tailwind config --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center p-5">
            <h1 class="text-xl font-bold text-gray-800">Event Organizer</h1>
            <div>
                <a href="#" class="text-gray-800 hover:text-blue-500 px-4">Home</a>
                <a href="#" class="text-gray-800 hover:text-blue-500 px-4">About</a>
                <a href="#" class="text-gray-800 hover:text-blue-500 px-4">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-500 text-white py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Temukan dan Kelola Event dengan Mudah</h2>
            <p class="mt-3 text-lg">Daftar sekarang untuk event terbaik yang ada di kota Anda.</p>
            <button class="mt-5 px-6 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-gray-200">
                Lihat Event
            </button>
        </div>
    </header>

    <!-- Event List -->
    <section class="py-10">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-5">Event Tersedia</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Event Image" class="w-full">
                    <div class="p-5">
                        <h4 class="text-xl font-bold text-gray-800">Nama Event</h4>
                        <p class="text-gray-600 mt-2">Tanggal: 10 Januari 2025</p>
                        <p class="text-gray-600 mt-2">Lokasi: Jakarta</p>
                        <button class="mt-3 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Detail
                        </button>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak card -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-5">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Event Organizer. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
