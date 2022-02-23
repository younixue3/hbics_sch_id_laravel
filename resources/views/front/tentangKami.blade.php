@extends('layouts.master')
@section('title', 'Tentang Kami')
@section('content')
    <div class="pt-20 p-32">
        <div id="hero_section" class="h-[35rem] grid grid-cols-3 grid-rows-3 justify-items-stretch gap-5">
            <div class="bg-green-500 rounded-3xl justify-self-start overflow-hidden">
                <img class="h-52 rounded-xl" src="{{asset('assets/stock_photo_rdev/IMG_6818.jpg')}}">
            </div>
            <div class="row-span-3 rounded-3xl overflow-hidden">
                <img class="h-full object-cover rounded-3xl" src="{{asset('assets/stock_photo_rdev/EDUsd-1-scaled.jpg')}}">
            </div>
            <div class="relative flex border rounded-3xl bg-gradient-to-b from-yellow-400 to-amber-500 row-span-2 px-5">
                <div class="m-auto text-sky-900">
                    <span class="text-lg font-semibold">Visi kami :</span>
                    <p class="text-3xl font-bold">
                        “Menjadi sekolah terbaik dalam layanan, maksimal mencerdaskan generasi berkarakter yang menghasilkan karya unggul bagi Indonesia.”
                    </p>
                </div>
            </div>
            <div class="row-span-2">
                <img class="w-full object-cover rounded-3xl" src="{{asset('assets/stock_photo_rdev/IMG_7258.jpg')}}">
            </div>
            <div class="border">
                <img class="h-full object-cover rounded-3xl" src="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}">
            </div>
        </div>
    </div>
    <div class="mt-10 px-32 text-left">
        <h1 class="text-4xl font-bold hover:after:content-['_↗']"><a href="#">Sekolah K.A.R.Y.A</a></h1>
        <p class="font-light text-lg mt-5">“Sekolah K.A.R.Y.A” merupakan filosofi dan arah pendidikan terbaru yang ditetapkan oleh segenap jajaran kepemimpinan Yayasan Tunas Cahaya Bangsa untuk diterapkan di lingkungan KB-TK Happy Holy Kids dan SD Kristen – SMA Kristen Harapan Bangsa Balikpapan sejak bulan Maret 2020. </p>
    </div>
    <div class="flex px-32 mt-10">
        <img class="h-[40rem] w-2/5 object-cover" src="{{asset('assets/stock_photo_rdev/IMG_7266.jpg')}}">
        <div class="m-auto ml-10">
            <h3 class="text-3xl font-bold hover:after:content-['_↗']"><a href="">Sejarah Sekolah Harapan Bangsa</a></h3>
            <div class="flex flex-col gap-y-2 pt-5 text-sm font-light">
                <p>
                    Sekolah Kristen Harapan Bangsa pertama kali Sekolah Dasar Harapan Bangsa didirikan pada tahun 2008 untuk melanjutkan program Taman Kanak-kanak Happy Holy Kids. Kedua sekolah tersebut berafiliasi di bawah Yayasan Tunas Cahaya Bangsa dan didirikan oleh 4 pengurus yaitu Bapak Ronny Runtukahu, Bapak Doni Prasetyo, Bapak Daniel Henson, dan mendiang Ibu Lenny Priskila Tan yang merupakan kepala sekolah pertama di kedua sekolah tersebut. Visi mereka adalah mencetak pemimpin masa depan melalui pendidikan Kristen dan membentuk mereka menjadi intelektual, berpotensi maksimal, dan berkarakter Kristus.
                </p>
                <p>
                    Dengan motto “Membuat Hidup Lebih Baik”, para pendiri sekolah percaya bahwa generasi masa depan yang lebih baik perlu memiliki karakter yang saleh, mereka perlu mengetahui tujuan hidup mereka yang sebenarnya sedini mungkin, dan potensi mereka perlu tumbuh dan dipelihara sepenuhnya. Di tahun pertamanya, Sekolah Dasar Kristen Harapan Bangsa memulai perjalanannya dengan kelas yang terdiri dari 20 siswa dan 5 guru, bertempat di gedung sekolah aslinya di Jln. R.E Martadinata, Balikpapan. Tahun berikutnya, Tuhan memberkati sekolah tersebut dengan gedung sekolah baru yang terletak di Jln. Indrakila, Balikpapan utara yang merupakan lokasi kampus kami saat ini.
                </p>
                <a class="font-normal text-sky-800" href="#">Read More<i class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                <h3 class="text-3xl mt-5 font-bold hover:after:content-['_↗']"><a href="#">Visi & Misi</a></h3>
                <span class="block">Visi :</span>
                <span>
                    Menjadi sekolah <span class="font-semibold">terbaik dalam layanan</span>, maksimal mencerdaskan generasi berkarakter <span class="font-semibold">Kristus</span> yang menghasilkan <span class="font-semibold">karya unggul</span> bagi Indonesia.
                </span>
                <span class="block">Misi :</span>
                <ol class="leading-6">
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Membangun karakter</span> mulia berlandaskan nilai-nilai <span class="font-semibold">Kristus.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Mengarahkan</span> peserta didik <span class="font-semibold">memiliki tujuan hidup</span> yang benar sejak dini.</li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Menggali, menemukan</span> dan <span class="font-semibold">mengembangkan potensi</span> peserta didik secara <span class="font-semibold">maksimal.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Memfasilitasi dan mendorong</span> peserta didik untuk <span class="font-semibold">berinovasi dan berkarya.</span></li>
                    <li><i class="fas fa-check-circle text-green-600 mr-3"></i><span class="font-semibold">Memberikan layanan prima</span> kepada seluruh pemangku kepentingan <span class="font-semibold">sekolah.</span></li>
                </ol>
                <a class="font-normal text-sky-800" href="#">Read More<i class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="px-20">
        <div class="flex relative justify-item-center h-96 w-full bg-cover bg-center mt-10 rounded-3xl overflow-hidden text-white">
            <img class="static object-cover brightness-50 w-full rounded-3xl" src="{{asset('assets/stock_photo_rdev/cambridge.jpeg')}}">
            <div class="absolute text-center">
                <div class="flex h-96">
                    <div class="m-auto">
                        <h1 class="text-5xl font-semibold hover:after:content-['_↗']"><a href="#">Metode Pembelajaran</a></h1>
                        <p class="px-72 font-light my-2">Kurikulum Cambridge yang diadaptasi oleh Sekolah Kristen Harapan Bangsa bertujuan untuk menciptakan generasi yang siap dalam persaingan global. Sesuai namanya, kurikulum Cambridge berasal dari organisasi yang ada di Universitas Cambridge, Inggris.</p>
                        <a class="font-normal" href="#">Read More<i class="ml-1 fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-20">
        <div class="px-20">
            <h1 class="text-3xl font-semibold hover:after:content-['_↗']"><a href="#">Fasilitas</a></h1>
            <p class="my-5">Fasilitas Sekolah adalah sarana dan prasarana yang harus tersedia untuk melancarkan kegiatan belajar mengajar di sekolah. Sekolah Kristen Harapan Bangsa Balikpapan dan Happy Holy Kids Balikpapan menyediakan fasilitas terbaik untuk menunjang kegiatan belajar mengajar siswa/i.</p>
        </div>
        <snap-component></snap-component>
    </div>
@endsection
