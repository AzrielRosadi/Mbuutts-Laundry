<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Laundry - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="flex bg-gray-800 rounded-lg shadow-lg overflow-hidden w-[900px]">
        <!-- Gambar -->
        <div class="w-1/2 hidden md:block relative">
            <img src="{{ asset('assets/img/search-picture.png') }}" alt="Laundry Admin Image" 
                class="w-4/5 h-4/5 object-cover opacity-75 mx-auto my-auto">
        </div>

        <!-- Form Login -->
        <div class="w-full md:w-1/2 p-8 text-white">
            <h2 class="text-2xl font-semibold text-center mb-6">Admin/Owner Laundry - Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                        class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="text-indigo-600 focus:ring-indigo-500 rounded">
                    <label for="remember_me" class="ml-2 text-sm">Remember me</label>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-md">Log In</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
