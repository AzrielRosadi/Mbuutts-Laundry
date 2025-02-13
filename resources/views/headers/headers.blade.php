<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-roboto text-gray-800">

<header class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-1/4 bg-gray-900 text-white p-6 flex flex-col">
        <div class="text-xl font-bold mb-6">Mbuutt Laundry</div>
        <hr class="border-white mb-6">
        <ul class="space-y-4 flex-1">
            @if(auth()->user()->role == 'admin')
                <li><a href="{{ route('dashboard.admin') }}" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded-md"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span></a></li>
                <li><a href="{{ route('create') }}" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded-md"><span class="material-symbols-outlined">add_box</span><span>Input Data</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded-md"><span class="material-symbols-outlined">folder_open</span><span>Data Laundry</span></a></li>
            @else
                <li><a href="{{ route('dashboard.admin') }}" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded-md"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span></a></li>
            @endif
        </ul>

        <!-- Logout Button at the Bottom -->
        <div class="mt-auto">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('post-form').submit();" class="flex items-center space-x-2 hover:bg-red-700 p-2 rounded-md text-red-500">
                    <span class="material-symbols-outlined">logout</span><span>Logout</span>
                </a>
                <form id="post-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            </li>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="flex-1 p-6 bg-gray-100">
        @yield('content')
    </main>
</header>

</body>
</html>