@extends('components.head')
@section('title', 'Home')

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    <x-header />
    <section id="home">
        <div class="container">
            <div class="flex justify-center items-center h-screen">
                <img src="{{ asset('img/lambangkab.png') }}" alt="" style="height: 300px" class="items-center">
                <div class="relative mt-10 text-center">
                    <h1 class="font-semibold text-primary text-4xl md:text-5xl lg:text-5xl">Situs Resmi Desa Semboro</h1>
                    <p class="font-medium text-slate-600 mb-10 leading-relaxed lg:text-2xl">Kabupaten Jember</p>
                    <a href="/profil"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Profil
                        Desa</a>
                    <a href="/surat"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Ajukan
                        Surat Perizinan</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
