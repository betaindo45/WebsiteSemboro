<div class="w-full mx-auto bg-primary fixed top-0 z-10">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
            <a class="flex items-center text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl ml-5"
                href="#">
                <span class="font-semibold text-lg md:text-xl text-center">Semboro</span>
            </a>
        </div>
        <div class="flex items-center space-x-4 px-6">
            <a href="/surat"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Buat Surat
            </a>
            <a href="/admin-user"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Admin
            </a>
            <div class="relative ml-auto mx-5">
                <div class="relative inline-block">
                    <a href="#"
                        class="inline-block text-primary bg-white no-underline text-center h-10 w-10 rounded-full items-center justify-center transform hover:scale-105 duration-300 ease-in-out"
                        id="profileButton">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div
                        class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg hidden"
                        id="profileOptions">
                        <a href="/admin-home"
                            class="block px-4 py-2 text-secondary hover:bg-gray-100">Dashboard</a>
                        <a href="/logout"
                            class="block px-4 py-2 text-secondary hover:bg-gray-100">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>