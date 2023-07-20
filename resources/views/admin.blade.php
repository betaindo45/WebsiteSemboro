@extends('components.head')
@section('title', 'Dashboard')

<body class="bg-gradient-to-r from-rose-100 to-teal-100">
    @auth
    <x-loginheader/>
    @else
    <x-header />
    @endauth
    <section id="admin" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <table class="w-full table-auto border-spacing-2">
                    <thead class="border-b-1 bg-orange-600">
                        <tr>
                            <th class=" text-white text-md font-bold tracking-wide py-2 rounded-s-md">NO</th>
                            <th class=" text-white text-md font-bold tracking-wide">Nama</th>
                            <th class=" text-white text-md font-bold tracking-wide">NIK</th>
                            <th class=" text-white text-md font-bold tracking-wide">Keperluan</th>
                            <th class=" text-white text-md font-bold tracking-wide">Status</th>
                            <th class=" text-white text-md font-bold tracking-wide rounded-e-md">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-yellow-300">
                        @forEach ($posts as $post)
                        <tr>
                            <td class="text-center p-1">{{ $loop->iteration }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->nik }}</td>
                            <td>{{ $post->keperluan }}</td>
                            <td>
                                @if($post->status===0)
                                    Belum Disetujui
                                @else
                                    Sudah Disetujui
                                @endif
                            </td>
                            <td>{{ $loop->iteration }}</td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>  
            </div>
        </div>
    </section>
</body>
