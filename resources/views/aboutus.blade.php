<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')

</head>
<body>

<section>
<div class="bg-cover bg-center h-96 w-full" style="background-image: url('img/Aboutus-header.png');">
<div x-data="{ open: false }">
    <nav class="p-6 flex justify-between items-center">
        <div>
            <img src="{{url('/img/logo.png')}}" alt="Logo" class="h-14">
        </div>
        <div>
            <img src="{{url('/img/Kitesurftext-navbar.png')}}" alt="Logo" class="h-14">
        </div>
        <div>
            <h3 class="text-white font-bold">MENU</h3>
        </div>
</div>
</section>

<section class="flex m-20">
    <div class="w-1/2 mx-16">
        <h2 class="text-2xl font-bold">Kitesurfschool</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Sit amet risus nullam eget felis eget nunc lobortis mattis. 
        Consequat id porta nibh venenatis cras sed felis eget velit. Fermentum odio eu feugiat pretium. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Sapien eget mi proin sed libero enim sed faucib 
        </p>
    </div>
    <div class="w-1/2 mx-16">
        <img src="{{url('/img/Aboutus-foto1.png')}}" alt="Afbeelding">
    </div>
</section>

<section class="flex">
<div class="w-1/2 mx-16">
        <img src="{{url('/img/Aboutus-foto1.png')}}" alt="Afbeelding">
    </div>
    <div class="w-1/2 mx-16">
        <h2 class="text-2xl font-bold">Kitesurfschool</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Sit amet risus nullam eget felis eget nunc lobortis mattis. 
        Consequat id porta nibh venenatis cras sed felis eget velit. Fermentum odio eu feugiat pretium. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Sapien eget mi proin sed libero enim sed faucib 
        </p>
    </div>
</section>

<section class="mt-20 flex bg-slate-200">
    <div class="w-1/2 m-16">
        <h2 class="text-2xl font-bold">Kitesurfschool</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Sit amet risus nullam eget felis eget nunc lobortis mattis. 
        Consequat id porta nibh venenatis cras sed felis eget velit. Fermentum odio eu feugiat pretium. Adipiscing elit pellentesque habitant morbi tristique senectus et netus et. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Vitae proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Sapien eget mi proin sed libero enim sed faucib 
        </p>
    </div>
    <div class="w-1/2 m-16">
        <img src="{{url('/img/Aboutus-foto1.png')}}" alt="Afbeelding">
    </div>
</section>

<section class="text-center text-4xl font-bold m-10">
    <p>4.9 STERREN UIT 249 ⭐️</p>
</section>

<section class="flex justify-around my-20">
    <div class="bg-slate-200 rounded p-10 w-1/4">
        <p>Blok 1</p>
    </div>
    <div class="bg-slate-200 rounded p-10 w-1/4">
        <p>Blok 2</p>
    </div>
    <div class="bg-slate-200 rounded p-10 w-1/4">
        <p>Blok 3</p>
    </div>
</section>

<section class="text-center text-4xl font-bold m-10">
    <p>ONZE SOCIALS</p>
</section>

<section class="flex justify-around my-20">
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 1</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 2</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 3</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 3</p>
    </div>
</section>

<section class="text-center text-4xl font-bold m-10">
    <p>ONZE PARTNERS</p>
</section>

<section class="flex justify-around my-20">
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 1</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 2</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 3</p>
    </div>
    <div class="bg-slate-200 rounded p-20 w-1/5">
        <p>Blok 3</p>
    </div>
</section>

<footer class="flex justify-around bg-cover bg-center pt-20 h-96" style="background-image: url('img/Footer-image.png');">
    <div class="text-white">
        <h3 class="font-bold text-5xl mb-2">CONTACT</h3>
        <p>06 18 72 94 44</p>
        <p>info@kitesurfspot.nl</p>
        <p>Strandslag 2, Kijkduin</p>
    </div>
    <div class="text-white">
        <h3 class="font-bold text-5xl mb-2">OPENINGSTIJDEN</h3>
        <p>Ondertitel 2</p>
    </div>
    <div>
            <img src="{{url('/img/Kitesurftext-navbar.png')}}" alt="Logo" class="h-14">
        </div>
</footer>

</body>
</body>
</html>