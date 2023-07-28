@extends('components.head')
@section('title', 'Permintaan Surat')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="form" class="pt-12">
        <div class="container p-10 bg-slate-500/30 backdrop-blur-lg rounded-md justify-center items-center my-12">
            <div class="flex flex-wrap m-10">
                <div class="w-full self-center px-4">
                    <h1 class="font-semibold text-primary md:text-2xl lg:text-4xl text-center max-sm:text-md">FORM
                        PERMOHONAN SURAT</h1>
                </div>
            </div>
            <div class="grid min-h-screen place-items-center -bottom-10 p-0 m-12 max-md:m-0.5">
                <div class="w-auto p-12 bg-white rounded-lg max-md:p-5">
                    <h1 class="text-xl font-semibold">Tolong isi informasi anda dibawah untuk melakukan pengajuan</h1>
                    <form action="/registersurat" method="post" class="mt-6" enctype="multipart/form-data"
                        id="surat">
                        @csrf
                        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Nama<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="name" type="text" name="name" placeholder="Budi" autocomplete="given-name"
                            class="@error('name') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('name') }}" />
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="kelamin" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Jenis
                            Kelamin<span class="text-red-600 text-2xl">*</span></label>
                        <select name="kelamin" id="kelamin"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required>
                            <option value="" disabled selected hidden>Pilih Salah Satu</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('kelamin')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="agama"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Agama<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="agama" type="text" name="agama" placeholder="" autocomplete="given-name"
                            class="@error('name') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('agama') }}" />
                        @error('agama')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="nik" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor
                            Induk Kependudukan (NIK)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="nik" type="text" name="nik" placeholder=""
                            class="@error('nik') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required="{16}" value="{{ old('nik') }}" />
                        @error('nik')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="imagenik" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Upload
                            Kartu Tanda Penduduk (KTP)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="imagenik" type="file" name="imagenik" placeholder=""
                            class="@error('imagenik') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required/>
                        @error('imagenik')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror

                        <label for="ttl" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Tempat
                            Tanggal Lahir (TTL)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="ttl" type="text" name="ttl" placeholder="Jember, 1 Januari 2022"
                            class="@error('ttl') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('ttl') }}" />
                        @error('ttl')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="pekerjaan"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Pekerjaan<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="pekerjaan" type="text" name="pekerjaan" placeholder=""
                            class="@error('pekerjaan') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('pekerjaan') }}" />
                        @error('pekerjaan')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="alamat"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Alamat<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="alamat" type="text" name="alamat" placeholder=""
                            class="@error('alamat') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('alamat') }}" />
                        @error('alamat')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="kk" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor
                            Kartu Keluarga (KK)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="kk" type="text" name="kk" placeholder=""
                            class="@error('kk') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required="{16}" value="{{ old('kk') }}" />
                        @error('kk')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="imagekk" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Upload
                            Kartu Keluarga (KK)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="imagekk" type="file" name="imagekk" placeholder=""
                            class="@error('imagekk') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required/>
                        @error('imagekk')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror

                        <label for="keperluan"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keperluan Surat<span
                                class="text-red-600 text-2xl">*</span></label>
                        <select name="keperluan" id="keperluan"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required>
                            <option value="" disabled selected hidden>Pilih Salah Satu</option>
                            <option value="Surat Keterangan Kepemilikan Kendaraan Bermotor">Surat Keterangan Kepemilikan
                                Kendaraan Bermotor</option>
                            <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                            <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                            <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                            <option value="Surat Keterangan Tidak Memiliki Rumah">Surat Keterangan Tidak Memiliki Rumah
                            </option>
                            <option value="Surat Keterangan Beda Identitas">Surat Keterangan Beda Identitas</option>
                            <option value="Surat Keterangan Organisasi Terlarang">Surat Keterangan Organisasi Terlarang
                                (OT)</option>
                            <option value="Surat Keterangan Domisili Lembaga">Surat Keterangan Domisili Lembaga</option>
                            <option value="Surat Keterangan Domisili/Tempat Tinggal">Surat Keterangan Domisili/Tempat
                                Tinggal</option>
                            <option value="Surat Keterangan Pindah Tempat Tinggal">Surat Keterangan Pindah Tempat
                                Tinggal</option>
                            <option value="Surat Keterangan Belum Pernah Nikah">Surat Keterangan Belum Pernah Nikah
                            </option>
                            <option value="Surat Keterangan Janda-Duda">Surat Keterangan Janda Duda</option>
                            <option value="Surat Keterangan Kenal Lahir">Surat Keterangan Kenal Lahir</option>
                            <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                            <option value="Surat Keterangan Kepemilikan Tanah">Surat Keterangan Kepemilikan Tanah
                            </option>
                            <option value="Surat Keterangan Lain-Lain (Umum)">Surat Keterangan Lain-Lain (Umum)</option>
                        </select>
                        @error('keperluan')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror

                        <div id="dynamic-form">

                        </div>


                        <label for="keterangan"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keterangan<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="keterangan" type="text" name="keterangan" placeholder=""
                            class="@error('keterangan') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('keterangan') }}" />
                        @error('keterangan')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="nohp" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">No.
                            Handphone<span class="text-red-600 text-2xl">*</span></label>
                        <input id="nohp" type="number" name="nohp" placeholder=""
                            class="@error('nohp') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('nohp') }}" />
                        @error('nohp')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="email"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Email</label>
                        <input id="email" type="email" name="email" placeholder=""
                            class="@error('email') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"value="{{ old('email') }}" />
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror


                        <label for="cetak" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Penerimaan Surat<span class="text-red-600 text-2xl">*</span></label>
                        <select name="cetak" id="cetak"
                            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required>
                            <option value="" disabled selected hidden>Pilih Salah Satu</option>
                            <option value="Diambil di Balai Desa">Diambil di Balai Desa</option>
                            <option value="Kirim File PDF VIA WA">Kirim File PDF VIA WA</option>
                        </select>
                        @error('cetak')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror

                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none rounded-lg">
                            Kirim Pengajuan
                        </button>
                    </form>
                    <p><span class="text-red-600 text-2xl">*</span> Diperlukan</p>
                </div>
            </div>
    </section>
    <script>
        const selectOption = document.getElementById("keperluan");
        const dynamicInputContainer = document.getElementById("dynamic-form");
        const dynamicForm = document.getElementById("surat");

        selectOption.addEventListener("change", handleOptionChange);

        function handleOptionChange() {
            // Clear previous dynamic input fields
            dynamicInputContainer.innerHTML = '';

            // Check the selected option and create dynamic input field accordingly
            if (selectOption.value === 'Surat Keterangan Pindah Tempat Tinggal') {
                createRequiredInput('alamatTujuan', 'Alamat Tujuan');
            }
        }

        function createRequiredInput(inputName, label) {
            const inputElement = document.createElement('input');
            inputElement.type = 'text';
            inputElement.name = 'alamattujuan';
            inputElement.id = 'alamaattujuan';
            inputElement.className =
                'block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg';
            inputElement.placeholder = label;
            inputElement.required = true;
            inputElement.value = "{{ old('alamattujuan') }}";

            const inputElement2 = document.createElement('input');
            inputElement2.type = 'string';
            inputElement2.name = 'desa';
            inputElement2.id = 'desa';
            inputElement2.className =
                'block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg';
            inputElement2.placeholder = 'Desa/Kelurahan';
            inputElement2.required = true;
            inputElement2.value = "{{ old('desa') }}";

            const inputElement3 = document.createElement('input');
            inputElement3.type = 'string';
            inputElement3.name = 'kecamatan';
            inputElement3.id = 'kecamatan';
            inputElement3.className =
                'block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg';
            inputElement3.placeholder = 'Kecamatan';
            inputElement3.required = true;
            inputElement3.value = "{{ old('kecamatan') }}";

            const inputElement4 = document.createElement('input');
            inputElement4.type = 'string';
            inputElement4.name = 'kota';
            inputElement4.id = 'kota';
            inputElement4.className =
                'block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg';
            inputElement4.placeholder = 'Kota/Kabupaten';
            inputElement4.required = true;
            inputElement4.value = "{{ old('kota') }}";

            const inputElement5 = document.createElement('input');
            inputElement5.type = 'text';
            inputElement5.name = 'pengikut';
            inputElement5.id = 'Pengikut';
            inputElement5.className =
                'block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg';
            inputElement5.placeholder = 'Pengikut';
            inputElement5.required = true;
            inputElement5.value = "{{ old('pengikut') }}";

            dynamicInputContainer.appendChild(inputElement);
            dynamicInputContainer.appendChild(inputElement2);
            dynamicInputContainer.appendChild(inputElement3);
            dynamicInputContainer.appendChild(inputElement4);
            dynamicInputContainer.appendChild(inputElement5);
        }
    </script>
</body>