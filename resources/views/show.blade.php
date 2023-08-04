@extends('components.head')
@section('title', 'Dashboard')

<body class="bg-default">

    
    {{ $gambarnik = $posts->imagenik }}
    

    <?php 
    $gambarnik=trim($gambarnik, "public");
    ?>

    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="show" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <table
                    class="mb-24 border-separate border-spacing-2 w-full border border-slate-400 bg-white/30 backdrop-blur-lg shadow-sm p-5 rounded-lg text-left">
                    <h2 class="text-center font-semibold text-4xl text-primary mb-5">Detail Surat</h2>
                    <tbody class="bg-white">
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Nama</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="name">{{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('name')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Jenis Kelamin</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kelamin">{{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('kelamin')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Agama</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="agama">{{ $posts->agama }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('agama')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                NIK</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nik">{{ $posts->nik }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('nik')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Tempat, Tanggal Lahir</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="ttl">{{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('ttl')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Pekerjaan</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="pekerjaan">{{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('pekerjaan')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Alamat</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="alamat">{{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('alamat')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                KK</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="kk">{{ $posts->kk }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('kk')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Keperluan</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="keperluan">{{ $posts->keperluan }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('keperluan')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Keterangan</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="keterangan">{{ $posts->keterangan }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('keterangan')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Status</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500">
                                @if ($posts->status === 0)
                                    Belum Disetujui
                                @else
                                    Sudah Disetujui
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                No HP</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nohp">{{ $posts->nohp }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('nohp')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Email</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="email">{{ $posts->email }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('email')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Penerimaan Surat</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500">
                                {{ $posts->name }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                {{-- Alamat Tujuan --}}

                <table
                    class="mb-36 border-separate border-spacing-2 w-full border border-slate-400 bg-white/30 backdrop-blur-lg shadow-sm p-5 rounded-lg text-left">
                    <h2 class="text-center font-semibold text-4xl text-primary mb-5">Pindah Alamat</h2>
                    <tbody class="bg-white">
                        <tr>
                            <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Alamat Tujuan
                            </td>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="alamattujuan">

                            </td>
                            <td class="text-center">
                                <button onclick="copyContent('alamattujuan')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900" id="desa">
                                Desa/Kelurahan
                            </td>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500">

                            </td>
                            <td class="text-center">
                                <button onclick="copyContent('desa')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Kecamatan
                            </td>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kecamatan">

                            </td>
                            <td class="text-center">
                                <button onclick="copyContent('kecamatan')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Kota/Kabupaten
                            </td>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kota">

                            </td>
                            <td class="text-center">
                                <button onclick="copyContent('kota')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Pengikut
                            </td>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="pengikut">

                            </td>
                            <td class="text-center">
                                <button onclick="copyContent('pengikut')" class="p-5">
                                    <i class="fa-regular fa-clipboard"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table
                    class="mb-36 border-separate border-spacing-2 w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                    <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                Nama</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                NIK</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                KK</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                Keperluan</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                Keterangan</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                Status</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                No HP</th>
                            <th
                                class="w-1/8 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 ">
                                Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->name }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->nik }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->kk }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->keperluan }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->keterangan }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                @if ($posts->status === 0)
                                    Belum Disetujui
                                @else
                                    Sudah Disetujui
                                @endif
                            </td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->nohp }}</td>
                            <td
                                class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                {{ $posts->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <x-footer />
    <script>
        const copyContent = async (elementId) => {
            try {
                const content = document.getElementById(elementId).innerHTML;
                await navigator.clipboard.writeText(content);
                console.log(`Content from ${elementId} copied to clipboard`);
            } catch (err) {
                console.error('Failed to copy: ', err);
            }
        }
    </script>
</body>
