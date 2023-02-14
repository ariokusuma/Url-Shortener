<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Error Bro</title>
</head>
<body>
    <div class="text-center pt-[210px]">
        <p class="text-4xl text-sky-600 font-semibold">404</p>
        <h1 class="mt-4 font-bold tracking-tight text-3xl text-gray-900 sm:text-5xl"> Halaman tidak ditemukan</h1>
        <p class="mt-6 text-base leading-7 text-gray-500">Maaf, Halaman yang Anda cari tidak tersedia atau sudah dipindahkan</p>

        {{-- tombol --}}
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ url('/') }}" class=" text-white rounded-md bg-sky-500 px-3.5 py-2.5 font-semibold shadow-sm hover:bg-sky-700 focus:ring">Kembali ke Halaman Utama</a>
            {{-- <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a> --}}
        </div>
        {{-- <a href="">Hubun</a> --}}
    </div>

{{-- <main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8"> --}}
    {{-- <div class="text-center">
      <p class="text-base font-semibold text-indigo-600">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking for.</p>

      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
        <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
      </div>
    </div>
  </main> --}}

</body>
</html>
