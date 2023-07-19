@extends('components.head')
@section('title', 'Home')

<body class="bg-[url('/public/img/semboromap.png')]">
    <x-header />
    <section id="home">
        <div class="container">
            <div class="flex justify-center items-center h-screen">
                <div class="w-auto p-10 bg-slate-500/30 rounded-md backdrop-blur-lg flex justify-center items-center">
                    <img src="{{ asset('img/lambangkab.png') }}" alt="" style="height: 300px">
                    <div class="relative mt-10 text-center">
                        <h1 class="font-semibold text-primary text-4xl md:text-5xl lg:text-5xl">Situs Resmi Desa Semboro
                        </h1>
                        <p class="font-medium text-white mb-10 leading-relaxed lg:text-2xl">Kabupaten Jember</p>
                        <a href="/profil"
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-md hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Profil
                            Desa</a>
                        <a href="/surat"
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-md hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Ajukan
                            Surat Perizinan</a>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>
