@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-48 px-6 md:px-16 lg:px-36 bg-blue-50 bg-cover bg-center relative mb-12"
        style="background-image: url('/assets/img/home.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="overlay bg-black bg-opacity-50 absolute top-0 left-0 w-full h-full"></div>
        <div class="relative z-10">
            <h2 class="text-4xl font-bold text-white">Laundry Berkualitas untuk Pakaian Bersih & Segar</h2>
            <p class="text-white mt-4">Layanan terbaik untuk kenyamanan Anda.</p>
        </div>
    </section>


    <!-- Layanan Kami -->
    <section id="services" class="py-16 bg-gray-50 mt-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-black mb-12">Layanan Laundry Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-12">
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1635274605638-d44babc08a4f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Laundry Kiloan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Kiloan</h3>
                        <p class="text-gray-700 mt-2">Cuci banyak tanpa khawatir tercampur.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1598808503746-f34c53b9323e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Satuan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Jas</h3>
                        <p class="text-gray-700 mt-2">Perawatan khusus untuk pakaian kantoran Anda.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566454544259-f4b94c3d758c?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Perlengkapan Bayi" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Perlengkapan Bayi</h3>
                        <p class="text-gray-700 mt-2">Pakaian bayi bersih dan aman.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1589863465747-f337e97f8f3d?q=80&w=2038&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Boneka" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Boneka</h3>
                        <p class="text-gray-700 mt-2">Cuci boneka agar bebas bakteri.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600166898405-da9535204843?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q0FSUEVUfGVufDB8fDB8fHww"
                        alt="Karpet" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Karpet</h3>
                        <p class="text-gray-700 mt-2">Bersihkan debu dan bau dari karpet.</p>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1539208175673-6b9149754096?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Q1VSVEFJTnxlbnwwfHwwfHx8MA%3D%3D"
                        alt="Gordyn" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black">Gordyn</h3>
                        <p class="text-gray-700 mt-2">Udara lebih segar dengan gordyn bersih.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="bg-gray-100 py-16">
        <div class="container mx-auto p-4">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-1/2 p-4">
                    <h2 class="text-green-600 font-bold text-sm">HUBUNGI</h2>
                    <h1 class="text-3xl font-bold mb-4">Masukan kontak Anda untuk melihat Laundryan anda!</h1>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="Jane Smith"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address <span
                                    class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="email@website.com"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone number <span
                                    class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" value="555-555-5555"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
                        </div>
                        <div class="flex items-start">
                            <input id="store-data" name="store-data" type="checkbox"
                                class="h-4 w-4 text-green-600 border-gray-300 rounded">
                            <label for="store-data" class="ml-2 block text-sm text-gray-900">Saya mengizinkan situs web ini
                                menyimpan kiriman saya sehingga mereka dapat menanggapi. <span
                                    class="text-red-500">*</span></label>
                        </div>
                        <button type="submit"
                            class="w-full bg-green-600 text-white font-bold py-2 rounded-md">SUBMIT</button>
                    </form>
                </div>
                <div class="w-full lg:w-1/2 p-4">
                    <div class="bg-gray-200 p-4 rounded-md mb-4">
                        <div class="bg-white p-4 rounded-md">
                            <!-- Google Maps Embed -->
                            <iframe class="w-full h-64 rounded-md"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135063986!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x9b7ace99f5a4b4e8!2sMonumen%20Nasional%20(Monas)!5e0!3m2!1sid!2sid!4v1635274605638!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-2">Hubungi</h2>
                    <p class="mb-4"><i class="fas fa-envelope"></i> <a href="mailto:azrieldepok12@gmail.com"
                            class="text-blue-600">azrieldepok12@gmail.com</a></p>
                    <h2 class="text-xl font-bold mb-2">Hours</h2>
                    <ul class="space-y-1">
                        <li>Senin <span class="float-right">9:00am – 10:00pm</span></li>
                        <li>Selasa <span class="float-right">9:00am – 10:00pm</span></li>
                        <li>Rabu <span class="float-right">9:00am – 10:00pm</span></li>
                        <li>Kamis <span class="float-right">9:00am – 10:00pm</span></li>
                        <li>Jum'at <span class="float-right">9:00am – 10:00pm</span></li>
                        <li>Sabtu <span class="float-right">9:00am – 6:00pm</span></li>
                        <li>Minggu <span class="float-right">9:00am – 12:00pm</span></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Form Pencarian Pesanan -->
    <section class="text-center py-10">
        <h2 class="text-2xl font-bold text-blue-600">Cari Pesanan Anda!</h2>
        @if (session('error'))
            <p class="text-red-500">{{ session('error') }}</p>
        @endif
        <form class="mt-4 flex justify-center space-x-4" action="{{ route('search.noHp') }}" method="POST">
            @csrf
            <input class="border border-gray-300 p-2 rounded-md" type="text" placeholder="Masukkan Nomer 81234"
                name="noHp" required>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md">Cari</button>
        </form>
    </section>
@endsection
