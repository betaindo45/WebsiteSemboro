<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Surat - Desa Semboro</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    <x-header />
    <section id="form" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <h1 class="font-semibold text-primary text-4xl md:text-5xl lg:text-5xl text-center">FORM PERMOHONAN SURAT</h1>
                </div>
            </div>
            <div class="grid min-h-screen place-items-center -bottom-10 p-0">
                <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                    <h1 class="text-xl font-semibold">Tolong isi informasi anda dibawah untuk melakukan pengajuan</h1>
                    <form class="mt-6">
                        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Nama</label>
                        <input id="name" type="text" name="firstname" placeholder="Budi" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="nik" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor Induk Kependudukan (NIK)</label>
                        <input id="nik" type="text" name="nik" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="nokk" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor Kartu Keluarga (KK)</label>
                        <input id="nokk" type="text" name="nokk" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="keperluan" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keperluan Surat</label>
                        <input id="keperluan" type="text" name="keperluan" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="keterangan" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keterangan</label>
                        <input id="keterangan" type="text" name="keterangan" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="nohp" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">No. Handphone</label>
                        <input id="nohp" type="text" name="nohp" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Email</label>
                        <input id="email" type="email" name="email" placeholder="" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            Kirim Pengajuan
                        </button>
                    </form>
                </div>
            </div>
    </section>
</body>