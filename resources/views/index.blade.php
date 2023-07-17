@extends('components.head')
@section('title', 'Home')

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    <x-header />
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 md:w-2/12">
                    <img src="{{asset('img/lambangkab.png')}}" alt="">
                </div>
                <div class="w-full self-center px-4 md:w-5/12">
                    <h1 class="font-semibold text-primary text-4xl md:text-5xl lg:text-5xl">Desa Semboro</h1>
                    <h2 class="font-medium text-slate-800 text-lg mb-5">Kabupaten Jember</h2>
                    <p class="font-medium text-slate-600 mb-10 leading-relaxed lg:text-2xl">Situs Resmi Desa Semboro</p>
                    <a href="/profil" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Profil Desa</a>
                    <a href="/surat" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out">Ajukan Surat Perizinan</a>
                </div>
                <div class="w-full self-end px-4 md:w-5/12">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="{{ asset('img/surat.png') }}" alt="surat">
                        <span class="absolute bottom-20 -z-10 left-1/2 -translate-x-1/2 md:-bottom-5 lg:bottom-10 md:scale-80">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="400" height="400">
                                <path fill="#fca103" d="M44.5,-77.8C56.8,-70,65.4,-56.3,70.3,-42.4C75.3,-28.4,76.7,-14.2,76.3,-0.2C75.9,13.7,73.6,27.5,68.3,40.8C62.9,54,54.5,66.9,42.6,73.3C30.7,79.7,15.3,79.7,1.1,77.8C-13.2,76,-26.4,72.3,-38.4,65.9C-50.4,59.6,-61.2,50.6,-67.8,39.1C-74.5,27.7,-77,13.8,-76.8,0.1C-76.6,-13.6,-73.6,-27.2,-67.4,-39.4C-61.2,-51.6,-51.7,-62.5,-40,-70.6C-28.2,-78.8,-14.1,-84.2,1,-86C16.1,-87.7,32.2,-85.6,44.5,-77.8Z" transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>