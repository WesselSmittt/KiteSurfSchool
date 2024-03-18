<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body>
    <div class="bg-cover bg-center h-96 w-full" style="background-image: url('img/Aboutus-header.png');">
        <nav class="p-6 flex justify-between items-center">
            <div>
                <img src="../../public/img/logo.png" alt="Logo" class="h-8">
            </div>
            <div class="text-2xl font-bold text-gray-800">
                KITESURF
            </div>
            <div class="relative">

                <button class="text-white text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">
                    <p class="">menu</p>
                    <div class="flex flex-col ml-2">
                        <div class="w-5 h-0.5 bg-black"></div>
                        <div class="w-5 h-0.5 bg-black my-1"></div>
                        <div class="w-5 h-0.5 bg-black"></div>
                    </div>
                </button>

                <div class="dropdown bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow fixed inset-0 w-screen h-screen transform scale-0 transition-transform duration-300 ease-out" id="dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm">Bonnie Green</span>
                        <span class="block text-sm font-medium text-gray-900 truncate">name@flowbite.com</span>
                    </div>
                    <ul class="py-1" aria-labelledby="dropdown">
                        <li>
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                        </li>
                    </ul>
                </div>


                <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
                <script src="{{ asset('js/nav.js') }}"></script>



</body>

</html>