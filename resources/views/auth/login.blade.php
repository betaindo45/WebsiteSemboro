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
    <section id="login" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center">
                    <!-- component -->
                    <div class="min-h-screen  flex flex-col justify-center sm:py-12">
                        <div class="p-0 xs:p-0 mx-auto md:w-full md:max-w-md">
                            <h1 class="font-bold text-center text-2xl mb-5">Semboro Mail</h1>
                            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                                <div class="px-5 py-7">
                                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Username</label>
                                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                                    <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                                    <button type="button" class="transition duration-200 bg-primary hover:bg-hover focus:bg-secondary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 hover:text-black focus:text-yellow-100   text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                        <span class="inline-block mr-2">Login</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="py-5">
                                <div class="grid grid-cols-2 gap-1">
                                    <div class="text-center sm:text-left whitespace-nowrap">
                                        <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset" onclick="window.location.href='/';">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>
                                            <span class="inline-block ml-1">Back Homepage</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>