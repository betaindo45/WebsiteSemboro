@extends('components.head')
@section('title', 'Profil Desa')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="profile" class="">
        <div class="container">
            <div class="flex flex-wrap justify-center h-screen">
                <section id="profil">
                    <div class="container">
                        <div class="w-full max-sm:m-1">
                            <div class="mx-auto text-center bg-slate-500/30 rounded-md backdrop-blur-lg">
                                <div class="w-auto p-10 mt-24 max-sm:p-0 max-sm:m-0">
                                    <h2 class="font-semibold text-3xl text-primary max-md:text-xl max-sm:text-sm mb-10">
                                        Profil Desa Semboro
                                    </h2>
                                    <p class="text-white text-lg max-md:text-base max-sm:text-sm text-left">&emsp; Desa
                                        Semboro merupakan
                                        salah satu dari 6 desa yang terletak wilayah administrasi Kecamatan Semboro
                                        Kabupaten Jember. Sejarah desa Semboro tidak terlepas dari sejarah masyarakat
                                        campuran antara Jawa dan Madura di Kabupaten Jember. Sepanjang jalan di desa ini
                                        banyak ditumbuhi pohon asem di kanan kirinya. Di desa ini awalnya banyak orang
                                        pendatang yang dikenal sebagai boro (dalam bahasa jawa). Sehingga jadilah nama
                                        Semboro yang berasal dari gabungan dua kata, yaitu asem dan boro.</p>
                                    <p class="text-white text-lg max-md:text-base max-sm:text-sm mt-5 text-left">&emsp;
                                        Wilayah Desa Semboro berada di dataran rendah dan memiliki sungai yang membuat
                                        Desa Semboro memiliki potensi untuk hasil panen yang melimpah. Selain itu
                                        banyaknya pendudukn dan beragamnya budaya yang ada di dalam wilayah desa
                                        menjadikannya sebagai sebuah aset pembangunan yang potensial. Banyaknya penduduk
                                        dengan angkatan kerja di berbagai bidang lapangan dan tingginya potensi
                                        kepemudaan juga membuat Desa Semboro memiliki sumber daya manusia yang cukup
                                        memadai untuk menggerakan ekonomi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <x-footer />
</body>
