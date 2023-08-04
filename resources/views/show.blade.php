@extends('components.head')
@section('title', 'Dashboard')

<body class="bg-default">


    {{ $gambarnik = $posts->imagenik }}
    {{ $gambarkk = $posts->imagekk }}

    <?php
    $gambarnik = trim($gambarnik, 'public');
    $gambarkk = trim($gambarkk, 'public');
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
                        {{-- Nama --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Nama</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="name">
                                {{ $posts->name }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('name')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- Jenis Kelamin --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Jenis Kelamin</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kelamin">
                                {{ $posts->kelamin }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('kelamin')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- Agama --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Agama</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="agama">
                                {{ $posts->agama }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('agama')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- NIK --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                NIK</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nik">
                                {{ $posts->nik }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('nik')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- ImageNIK --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                <img src="{{ asset('storage/' . $gambarnik) }}" alt="GAMBARKTP" class="max-h-80">
                            </th>

                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nik"><a
                                    href="{{ asset('storage/' . $gambarnik) }}" target="_blank">Tidak Muncul / Melihat
                                    Lebih Detail</a></td>
                            <td class="text-center">
                            </td>
                        </tr>
                        {{-- Tempat Tanggal Lahir --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Tempat, Tanggal Lahir</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="ttl">
                                {{ $posts->ttl }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('ttl')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- Pekerjaan --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Pekerjaan</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="pekerjaan">
                                {{ $posts->pekerjaan }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('pekerjaan')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- Alamat --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Alamat</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="alamat">
                                {{ $posts->alamat }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('alamat')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- KK --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                KK</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="kk">
                                {{ $posts->kk }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('kk')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- ImageKK --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                <img src="{{ asset('storage/' . $gambarkk) }}" alt="GAMBARKK" class="max-h-80">
                            </th>

                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nik"><a
                                    href="{{ asset('storage/' . $gambarkk) }}" target="_blank">Tidak Muncul / Melihat
                                    Lebih Detail</a></td>
                            <td class="text-center">
                            </td>
                        </tr>
                        {{-- Keperluan --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Keperluan</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="keperluan">
                                {{ $posts->keperluan }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('keperluan')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- Keterangan --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Keterangan</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="keterangan">
                                {{ $posts->keterangan }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('keterangan')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- status --}}
                        <tr>
                            <form method="post" action="{{ $posts->id }}">
                                @method('patch')
                                @csrf
                                <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                    Status</th>
                                <td class="w-8/10 border border-slate-300 p-4 text-slate-500">
                                    <select name="status" id="status"
                                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg">
                                        <option value="" disabled selected hidden>
                                            @if ($posts->status === 0)
                                                Belum Disetujui
                                            @else
                                                Sudah Disetujui
                                            @endif
                                        </option>
                                        <option value='1'>Sudah Disetujui</option>
                                        <option value='0'>Belum Disetujui</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button type="submit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </td>
                            </form>
                        </tr>
                        {{-- No Hp --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                No HP</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="nohp">
                                {{ $posts->nohp }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('nohp')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        {{-- email --}}
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900 ">
                                Email</th>
                            <td class="w-8/10 border border-slate-300 p-4 text-slate-500" id="email">
                                {{ $posts->email }}</td>
                            <td class="text-center">
                                <button onclick="copyContent('email')" class="p-5">
                                    <i class="fa-regular fa-clipboard fa-2xl"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                Penerimaan Surat</th>
                            <td class="w-7/10 border border-slate-300 p-4 text-slate-500">
                                {{ $posts->cetak }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                {{-- Alamat Tujuan --}}
                @if ($posts->keperluan == 'Surat Keterangan Pindah Tempat Tinggal')
                    <table
                        class="mb-36 border-separate border-spacing-2 w-full border border-slate-400 bg-white/30 backdrop-blur-lg shadow-sm p-5 rounded-lg text-left">
                        <h2 class="text-center font-semibold text-4xl text-primary mb-5">Pindah Alamat</h2>
                        <tbody class="bg-white">
                            {{-- Alamat Tujuan --}}
                            <tr>
                                <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                    Alamat Tujuan
                                </td>
                                <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="alamattujuan">
                                    {{ $posts->alamattujuan }}</td>
                                <td class="text-center">
                                    <button onclick="copyContent('alamattujuan')" class="p-5">
                                        <i class="fa-regular fa-clipboard fa-2xl"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- Desa/Kelurahan --}}
                            <tr>
                                <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900"
                                    id="desa">
                                    Desa/Kelurahan
                                </td>
                                <td class="w-7/10 border border-slate-300 p-4 text-slate-500">{{ $posts->desa }}</td>
                                <td class="text-center">
                                    <button onclick="copyContent('desa')" class="p-5">
                                        <i class="fa-regular fa-clipboard fa-2xl"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- Kecamatan --}}
                            <tr>
                                <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                    Kecamatan
                                </td>
                                <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kecamatan">
                                    {{ $posts->kecamatan }}</td>
                                <td class="text-center">
                                    <button onclick="copyContent('kecamatan')" class="p-5">
                                        <i class="fa-regular fa-clipboard fa-2xl"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- Kota/Kabupaten --}}
                            <tr>
                                <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                    Kota/Kabupaten
                                </td>
                                <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="kota">
                                    {{ $posts->kota }}</td>
                                <td class="text-center">
                                    <button onclick="copyContent('kota')" class="p-5">
                                        <i class="fa-regular fa-clipboard fa-2xl"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- Pengikut --}}
                            <tr>
                                <td class="w-1/10 border border-slate-300 font-semibold p-4 text-slate-900">
                                    Pengikut
                                </td>
                                <td class="w-7/10 border border-slate-300 p-4 text-slate-500" id="pengikut">
                                    {{ $posts->pengikut }}</td>
                                <td class="text-center">
                                    <button onclick="copyContent('pengikut')" class="p-5">
                                        <i class="fa-regular fa-clipboard fa-2xl"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endif
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
