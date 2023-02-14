<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Shortener</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- <h1 class="text-3xl font-bold underline"> Halo lur</h1> --}}

    <!-- This example requires Tailwind CSS v3.0+ -->
    <h1 class="text-4xl font-bold text-center pt-[300px]"> Welcome to URL Shortener</h1>
    {{-- form --}}

    <form action="" method="POST">
        @csrf
        {{-- URLbox --}}
        <div class="pt-8 flex flex-col justify-center items-center box-content h-21 w-21 p-3 px-8">
            <input class=" mt-1 px-2 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-96 rounded-md sm:text-sm focus:ring-1 " type="text" placeholder="Masukan URL anda" name="" id="">
        </div>
        {{-- submit --}}
        <div class="flex flex-col justify-center items-center box-content">
            <button class=" text-center text-white font-semibold rounded-full py-2 px-4 bg-sky-500 hover:bg-sky-600 active:bg-sky-800 focus:outline-none focus:ring focus:ring-sky-300 hover:text-slate-300"> Pendekin!</button>
        </div>
    </form>
</body>

</html>
