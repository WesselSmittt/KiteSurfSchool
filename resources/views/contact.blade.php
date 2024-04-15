<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Contact</title>
</head>
<body>
    <div class="bg-cover bg-center h-96 w-full" style="background-image: url('img/contact-header.png');">
        <h1 class="text-white text-6xl font-bold text-center">CONTACT</h1>
    </div>

<!--Code hieronder is de contact informatie van de kitesurfschool-->
    <section class="flex m-8">
        <div class="w-1/2 m-8 justify-content: center;">
            <h1 class="font-semibold text-2xl mb-2">KITESURFSPOT</h1>
                <p class="w-3/4 mb-8">
                De snelste manier om in contact met ons te komen is om te bellen!
                Krijg je ons niet te pakken?
                Dan bestaat er een dikke kans dat we les aan het geven zijn. 
                Stuur dan een Whatsapp-bericht of gebruik het contactformulier.
                </p>
            <h1 class="font-semibold text-2xl mb-1">KITESURF LOCATIE</h1>
                <h2 class="font-medium text-l mb-4">Locaties:</h2>
                    <div class="flex flex-wrap justify-between">
                        <div class="w-1/2 pr-1">
                            <p>1. Zandvoort</p>
                            <p>2. Wijk aan Zee</p>
                            <p>3. Muiderberg</p>
                        </div>
                        <div class="w-1/2 pl-1">
                            <p>4. Ijmuiden</p>
                            <p>5. Scheveningen</p>
                            <p>6. Hoek van Holland</p>
                        </div>
                    </div>
                    <br>
            <h1 class="font-semibold text-2xl">CONTACT</h1>
                <h2 class="font-medium text-l">Bel of Whatsapp:</h2>
                    <p>06-12345678</p>
                <h2 class="font-medium text-l">Email:</h2>
                    <p>kaas123@gmail.com</p>
        </div>

<!--Code hieronder is het invoer formulier voor de klanten-->   
 
    <div class="w-1/2 m-8 justify-content: center;">
        <h1 class="font-semibold text-2xl mb-4">CONTACTFORMULIER</h1>
            @if(session()->has('success'))
                <p>
                    {{ session()->get('success') }}
                </p>
            @endif

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('contact.store') }}" method="post" class="space-y-4">
            @csrf
            <div class="md:flex md:space-x-2 space-y-4 md:space-y-0">
                <div class="md:flex-1">
                    <label class="block">First Name:</label>
                    <input type="text" name="first_name" class="w-full border-2 border-gray-300 p-2 rounded-md">
                </div>
                <div class="md:flex-1">
                    <label class="block">Last Name:</label>
                    <input type="text" name="last_name" class="w-full border-2 border-gray-300 p-2 rounded-md">
                </div>
            </div>
            <div class="md:flex md:space-x-2 space-y-4 md:space-y-0">
                <div class="md:flex-1">
                    <label class="block">Email:</label>
                    <input type="text" name="email" class="w-full border-2 border-gray-300 p-2 rounded-md">
                </div>
                <div class="md:flex-1">
                    <label class="block">Phone Number:</label>
                    <input type="text" name="phone_number" class="w-full border-2 border-gray-300 p-2 rounded-md">
                </div>
            </div>
            <div class="space-y-4">
                <label class="block">Message:</label>
                <textarea name="message" class="w-full border-2 border-gray-300 p-2 rounded-md h-24"></textarea>
            </div>
            <div class="pt-4">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            </div>
        </form>
    </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>