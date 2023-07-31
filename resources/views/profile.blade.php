@extends('components.head')
@section('title', 'Profil Desa')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth

    <div id="profil">
        <div class="container">
            <div class="flex flex-wrap justify-center">
                {{-- Profil --}}
                <div
                    class="w-auto my-24 p-10 bg-slate-500/30 rounded-lg backdrop-blur-lg flex flex-wrap justify-between items-center max-md:p-5">
                    <div class="w-full md:w-1/2 flex justify-center items-center px-5">
                        <div class="text-center">
                            <h2 class="font-semibold text-3xl text-primary max-md:text-xl max-sm:text-lg mb-10">
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
                    <div class="w-full md:w-1/2 flex justify-center items-center px-5">
                        <iframe class="rounded-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38955.781847715996!2d113.42090091383017!3d-8.197217450062233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68bd7f36340d7%3A0xb29c4e09cefc0694!2sSemboro%2C%20Jember%20Regency%2C%20East%20Java!5e1!3m2!1sen!2sid!4v1690795166329!5m2!1sen!2sid"
                            width="550" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                {{-- Visi Misi --}}
                <div class="w-auto mt-0 mb-12 p-5 bg-slate-500/30 rounded-lg backdrop-blur-lg flex flex-wrap">
                    <div class="w-full">
                        <h3 class="font-semibold text-4xl text-primary max-md:text-xl max-sm:text-lg mb-10 text-center">
                            Visi dan Misi</h3>
                    </div>
                    <div class="w-full md:w-1/2 mt-5">
                        <h3 class="font-semibold text-2xl text-primary max-md:text-xl max-sm:text-lg mb-10">Visi</h3>
                        <p class="text-white font-lg max-md:text-base">Visi Desa Semboro adalah " terbangunnya tata
                            kelola pemerintahan desa yang baik dan bersih guna mewujudkan kehidupan masyarakat desa yang
                            adil, makmur dan sejahtera"</p>
                    </div>
                    <div class="w-full md:w-1/2 mt-5">
                        <h3 class="font-semibold text-2xl text-primary max-md:text-xl max-sm:text-lg">Misi</h3>
                        <ol class="text-white font-lg max-md:text-base">
                            <li>
                                <p>1. Melakukan sistem kinerja aparatur pemerintahan desa guna meningkatkan kwalitas
                                    pelayanan kepada masyarakat.</p>
                            </li>
                            <li>
                                <p>2. Menyelenggarakan pemerintahan yang bersih, terbebas dari korupsi, serta
                                    bentuk-bentuk penyelewengan lainnya.</p>
                            </li>
                            <li>
                                <p>3. Menyelenggarakan urusan pemerintahan desa secara terbuka dan bertanggung jawab
                                    sesuai dengan peraturan perundang-undangan.</p>
                            </li>
                            <li>
                                <p>4. Meningkatkan perekonomian masyarakat melalui pendampingan berupa penyuluhan khusus
                                    pada UKM, Wiraswasta dan petani.</p>
                            </li>
                            <li>
                                <p>5. Meningkatkan pembangunan lingkungan pedesaan dan mutu kesejahteraan masyarakat
                                    untuk mencapai taraf kehidupan yang lebih baik dan layak sehingga menjadi desa yang
                                    maju dan mandiri.</p>
                            </li>
                        </ol>
                    </div>
                </div>
                {{-- Explore --}}
                <div
                    class="w-auto mt-0 mb-12 p-5 bg-slate-500/30 rounded-lg backdrop-blur-lg flex flex-wrap justify-center">
                    <div class="w-full">
                        <h3 class="font-semibold text-3xl text-primary max-md:text-xl max-sm:text-lg mb-10 text-center">
                            Explore Semboro</h3>
                    </div>
                    <div class="w-full m-5 p-5 bg-white text-center rounded-lg md:w-1/3 overflow-hidden">
                        <img src="{{ asset('img/pasarsemboro.jpg') }}" alt="" class="rounded-lg" width="400"
                            style="object-fit: cover;">
                        <h2 class="text-base md:text-2xl">Pasar Semboro</h2>
                        <p class="text-left mt-5">Pasar Semboro dikenal
                            sebagai pusat perdagangan dan kegiatan ekonomi yang ramai, serta menawarkan
                            berbagai pengalaman berbelanja yang menarik bagi para pengunjungnya.</p>
                    </div>
                    <div class="w-full m-5 p-5 bg-white text-center rounded-lg md:w-1/2 lg:w-1/3">
                        <img src="{{ asset('img/tugusemboro.jpeg') }}" alt="" class="rounded-lg h-300 w-auto">
                        <h2 class="text-base md:text-2xl">Tugu Semboro</h2>
                        <p class="text-left mt-5">Tugu ini berada di pinggir Pasar Semboro berbatasan dengan Desa
                            Sidomekar. Tugu ini menjadi
                            titik menarik yang patut dikunjungi. Selain sebagai objek fotografi yang indah, tugu ini
                            juga memberikan kesempatan untuk merenung tentang arti dan makna dari monumen ini dalam
                            konteks kehidupan masyarakat desa.</p>
                    </div>
                    <div class="w-full m-5 p-5 bg-white text-center rounded-lg md:w-1/2 lg:w-1/3">
                        <img src="{{ asset('img/lapangan.png') }}" alt="" class="rounded-lg h-300 w-auto">
                        <h2 class="text-base md:text-2xl">Lapangan Semboro</h2>
                        <p class="text-left mt-5">Lapangan Semboro berada di sebelah Balai Desa Semboro, lapangan ini
                            sangatlah luas dan biasa digunakan oleh warga setempat untuk melakukan berbagai aktivitas
                            mulai dari jalan santai, berolahraga, maupun untuk latihan berkendara.</p>
                    </div>
                    <div class="w-full m-5 p-5 bg-white text-center rounded-lg md:w-1/2 lg:w-1/3">
                        <img src="{{ asset('img/pgsemboro.jpeg') }}" alt="" class="rounded-lg h-300 w-auto"
                            style="object-fit: cover" width="400px">
                        <h2 class="text-base md:text-2xl">PG Semboro</h2>
                        <p class="text-left mt-5">PG Semboro adalah sebuah pabrik gula yang luar biasa dan menjadi
                            kebanggaan Kabupaten Jember, Jawa Timur. PG (Pabrik Gula) ini merupakan salah satu pabrik
                            gula terkemuka di wilayah tersebut dan telah memainkan peran penting dalam ekonomi dan
                            pertanian daerah selama bertahun-tahun. Selain kontribusinya terhadap ekonomi lokal, PG
                            Semboro juga berperan dalam meningkatkan kesejahteraan petani tebu di sekitar wilayahnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>
