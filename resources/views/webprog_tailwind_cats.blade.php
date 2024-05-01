<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $TabTitle ?? 'Kocheng Oren' }}
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/images/catface.png">


    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='resources/js/script.js' defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<div class="flex flex-col" style="font-family: 'Montserrat';">

    <section style="background-image: url('https://www.desktopbackground.org/p/2012/01/28/335376_funny-cats-wallpapers_1920x1080_h.jpg')"
                class="bg-cover bg-center bg-no-repeat">
        <div class="w-1/2 mx-auto bg-red-300 pb-8">
            <h1 class="text-center font-bold text-2xl">Galeri Kochenk</h1>
            <div class="mx-auto bg-red-600 p-2 lg:p-4 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-2 lg:gap-4">
                {{-- @for ($i = 0; $i < 18; $i++) --}}
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/mrfresh.jpeg" alt="cat1" class="rounded-lg w-32 aspect-square">
                <img src="/images/guangdang.png" alt="cat1" class="rounded-lg w-32 aspect-square">
                {{-- @endfor --}}
            </div>
        </div>
    </section>
</body>
</html>
