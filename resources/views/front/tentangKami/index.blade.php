@extends('layouts.master')
@section('title', 'Tentang Kami')
@section('content')
    <div class="pt-52 p-32 px-10 lg:px-16 xl:px-32">
        <div class="h-[35rem] grid grid-cols-3 grid-rows-4 lg:grid-rows-3 justify-items-stretch  gap-2 :gap-5">
            <div
                class="bg-gray-100 rounded-xl md:rounded-3xl justify-self-start order-last md:order-none overflow-hidden">
                <img class="h-full md:h-52 rounded-xl" src="{{asset('assets/stock_photo_rdev/IMG_6818.jpg')}}">
            </div>
            <div
                class="row-span-3 col-span-3 md:col-span-2 lg:col-span-1 sm:order-first lg:order-none bg-gray-100 rounded-3xl overflow-hidden">
                <img class="h-full w-full object-cover rounded-3xl"
                     src="{{asset('assets/stock_photo_rdev/EDUsd-1-scaled.jpg')}}">
            </div>
            <div id="hero_section"
                 class="relative flex border order-first col-span-3 md:col-span-1 lg:order-none rounded-3xl bg-gradient-to-b from-yellow-400 to-amber-500 row-span-2 md:row-span-3 lg:row-span-2 px-5">
                <div class="m-auto text-sky-900">
                    <span class="text-sm xl:text-lg font-semibold">Visi kami :</span>
                    <p class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-bold">
                        “Menjadi sekolah terbaik dalam layanan, maksimal mencerdaskan generasi berkarakter yang
                        menghasilkan karya unggul bagi Indonesia.”
                    </p>
                </div>
            </div>
            <div class="lg:row-span-2 bg-gray-100">
                <img class="w-full object-cover rounded-xl md:rounded-3xl"
                     src="{{asset('assets/stock_photo_rdev/IMG_7258.jpg')}}">
            </div>
            <div class="bg-gray-100">
                <img class="h-full object-cover rounded-xl md:rounded-3xl"
                     src="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}">
            </div>
        </div>
    </div>
    <div class="mt-10 px-5 lg:px-16 xl:px-32 text-left">
        <h1 class="text-3xl font-bold hover:after:content-['_↗']"><a href="{{route('filosofi-pendidikan')}}">Sekolah K.A.R.Y.A</a></h1>
        <p class="font-light text-sm mt-5 mb-2">“Sekolah K.A.R.Y.A” merupakan filosofi dan arah pendidikan terbaru yang
            ditetapkan oleh segenap jajaran kepemimpinan Yayasan Tunas Cahaya Bangsa untuk diterapkan di lingkungan
            KB-TK Happy Holy Kids dan SD Kristen – SMA Kristen Harapan Bangsa Balikpapan sejak bulan Maret 2020. </p>
        <a class="font-normal text-sm text-sky-800" href="{{route('filosofi-pendidikan')}}">Read More<i
                class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
    </div>
    <div class="lg:flex md:px-10 lg:px-16 xl:px-32 mt-10">
        <img class="md:h-full lg:h-[40rem] lg:w-2/5 mb-10 lg:mb-0 object-cover"
             src="{{asset('assets/stock_photo_rdev/IMG_7266.jpg')}}">
        <div class="m-auto px-5 lg:pl-10">
            <h3 class="text-3xl font-bold hover:after:content-['_↗']"><a href="{{route('sejarah')}}">Sejarah Sekolah Harapan Bangsa</a></h3>
            <div class="flex flex-col gap-y-2 pt-5 text-sm font-light">
                <p>
                    Sekolah Kristen Harapan Bangsa pertama kali Sekolah Dasar Harapan Bangsa didirikan pada tahun 2008
                    untuk melanjutkan program Taman Kanak-kanak Happy Holy Kids. Kedua sekolah tersebut berafiliasi di
                    bawah Yayasan Tunas Cahaya Bangsa dan didirikan oleh 4 pengurus yaitu Bapak Ronny Runtukahu, Bapak
                    Doni Prasetyo, Bapak Daniel Henson, dan mendiang Ibu Lenny Priskila Tan yang merupakan kepala
                    sekolah pertama di kedua sekolah tersebut. Visi mereka adalah mencetak pemimpin masa depan melalui
                    pendidikan Kristen dan membentuk mereka menjadi intelektual, berpotensi maksimal, dan berkarakter
                    Kristus.
                </p>
                <p>
                    Dengan motto “Membuat Hidup Lebih Baik”, para pendiri sekolah percaya bahwa generasi masa depan yang
                    lebih baik perlu memiliki karakter yang saleh, mereka perlu mengetahui tujuan hidup mereka yang
                    sebenarnya sedini mungkin, dan potensi mereka perlu tumbuh dan dipelihara sepenuhnya. Di tahun
                    pertamanya, Sekolah Dasar Kristen Harapan Bangsa memulai perjalanannya dengan kelas yang terdiri
                    dari 20 siswa dan 5 guru, bertempat di gedung sekolah aslinya di Jln. R.E Martadinata, Balikpapan.
                    Tahun berikutnya, Tuhan memberkati sekolah tersebut dengan gedung sekolah baru yang terletak di Jln.
                    Indrakila, Balikpapan utara yang merupakan lokasi kampus kami saat ini.
                </p>
                <a class="font-normal text-sky-800" href="{{route('sejarah')}}">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                <h3 class="text-3xl mt-5 font-bold hover:after:content-['_↗']"><a href="{{route('visi-misi')}}">Visi & Misi</a></h3>
                <span class="block">Visi :</span>
                <span>
                    Menjadi sekolah <span class="font-semibold">terbaik dalam layanan</span>, maksimal mencerdaskan generasi berkarakter <span
                        class="font-semibold">Kristus</span> yang menghasilkan <span
                        class="font-semibold">karya unggul</span> bagi Indonesia.
                </span>
                <span class="block">Misi :</span>
                <ol class="leading-6">
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Membangun karakter</span>
                        mulia berlandaskan nilai-nilai <span class="font-semibold">Kristus.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span
                            class="font-semibold">Mengarahkan</span> peserta didik <span class="font-semibold">memiliki tujuan hidup</span>
                        yang benar sejak dini.
                    </li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Menggali, menemukan</span>
                        dan <span class="font-semibold">mengembangkan potensi</span> peserta didik secara <span
                            class="font-semibold">maksimal.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Memfasilitasi dan mendorong</span>
                        peserta didik untuk <span class="font-semibold">berinovasi dan berkarya.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Memberikan layanan prima</span>
                        kepada seluruh pemangku kepentingan <span class="font-semibold">sekolah.</span></li>
                </ol>
                <a class="font-normal text-sky-800" href="{{route('visi-misi')}}">Read More<i
                        class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="px-5 md:px-10 lg:px-16 xl:px-20">
        <div
            class="flex relative justify-item-center h-72 md:h-96 w-full bg-cover bg-center mt-10 rounded-3xl overflow-hidden text-white">
            <img class="static object-cover brightness-50 w-full rounded-3xl"
                 src="{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}">
            <div class="absolute text-center">
                <div class="flex h-72 md:h-96">
                    <div class="m-auto">
                        <h1 class="text-3xl md:text-5xl font-semibold hover:after:content-['_↗']"><a href="{{route('metode-pembelajaran')}}">Metode
                                Pembelajaran</a></h1>
                        <p class="px-5 md:px-24 xl:px-72 text-sm md:text-base font-light my-2 overflow-hidden h-16 leading-4">
                            Kurikulum Cambridge yang diadaptasi oleh Sekolah Kristen Harapan Bangsa bertujuan untuk
                            menciptakan generasi yang siap dalam persaingan global. Sesuai namanya, kurikulum Cambridge
                            berasal dari organisasi yang ada di Universitas Cambridge, Inggris.</p>
                        <a class="font-normal" href="{{route('metode-pembelajaran')}}">Read More<i class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-10 md:my-20">
        <div class="px-12 xl:px-20">
            <h1 class="text-3xl font-semibold hover:after:content-['_↗']"><a href="{{route('fasilitas')}}">Fasilitas</a></h1>
            <p class="my-5">Fasilitas Sekolah adalah sarana dan prasarana yang harus tersedia untuk melancarkan kegiatan
                belajar mengajar di sekolah. Sekolah Kristen Harapan Bangsa Balikpapan dan Happy Holy Kids Balikpapan
                menyediakan fasilitas terbaik untuk menunjang kegiatan belajar mengajar siswa/i.</p>
        </div>
        <snap-component></snap-component>
    </div>
    <div class="my-20 bg-gray-200 h-full text-center py-10">
        <h3 class="mb-10 text-xl md:text-3xl uppercase">Our Partnership</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 px-10 md:px-32 lg:px-52 gap-10 items-center justify-items-center">
            <img class="lg:h-14 object-contain grayscale hover:grayscale-0 transition-all ease-in-out"
                 src="{{asset('assets/logo/microsoft.png')}}">
            <img class="lg:h-14 object-contain grayscale hover:grayscale-0 transition-all ease-in-out"
                 src="{{asset('assets/logo/ocbc.png')}}">
            <img class="lg:h-14 object-contain grayscale hover:grayscale-0 transition-all ease-in-out"
                 src="{{asset('assets/logo/flazz.png')}}">
            <img class="lg:h-14 object-contain grayscale hover:grayscale-0 transition-all ease-in-out"
                 src="{{asset('assets/logo/yamaha.png')}}">
        </div>
    </div>
@endsection
