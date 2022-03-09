@extends('layouts.front.master')
@section('title', 'Sejarah')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Sejarah</h1>
        <div class="flex px-10">
            <img class="w-1/2 rounded-3xl shadow-xl transform scale-75 -rotate-3 hover:rotate-2 transition-all ease-in-out duration-500" src="{{asset('assets/stock_photo_rdev/gedung.webp')}}">
            <p class="m-auto text-left">Sekolah Kristen Harapan Bangsa pertama kali Sekolah Dasar Harapan Bangsa didirikan pada tahun 2008 untuk melanjutkan program Taman Kanak-kanak Happy Holy Kids. Kedua sekolah tersebut berafiliasi di bawah Yayasan Tunas Cahaya Bangsa dan didirikan oleh 4 pengurus yaitu Bapak Ronny Runtukahu, Bapak Doni Prasetyo, Bapak Daniel Henson, dan mendiang Ibu Lenny Priskila Tan yang merupakan kepala sekolah pertama di kedua sekolah tersebut. Visi mereka adalah mencetak pemimpin masa depan melalui pendidikan Kristen dan membentuk mereka menjadi intelektual, berpotensi maksimal, dan berkarakter Kristus. </p>
        </div>
        <div class="flex">
            <div class="m-auto px-10 text-left">
                <ol class="relative border-l border-gray-400 dark:border-gray-700">
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full dark:bg-blue-900">
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">2002
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan bimbingan belajar di Pasar Baru & Klandasan</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">17 Juli 2006</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan Hari 1 Happy Holy Kids Balikpapan</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">1 Juli 2007</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pindah gedung ke Graha Martadinata</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">14 Juli 2008</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan Hari 1 SDK Harapan Bangsa Balikpapan</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">22 Juni 2009</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pindah lokasi dari Jalan Martadinata ke Jalan Indrakila</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">17 Juli 2010</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Peresmian gedung baru SDK Harapan Bangsa Balikpapan</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">14 Juli 2014</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan hari 1 SMPK Harapan Bangsa Balikpapan (HBICS)</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Juli 2017</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pembukaan Hari 1 SMAK Harapan Bangsa Balikpapan (HBICS)</p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rebranding Harapan Bangsa dan Yayasan Cahaya Tunas Bangsa menjadi Sekolah K.A.R.Y.A</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Selamat Datang! di Sekolah
                            Harapan Bangsa & Happy Holy Kids Balikpapan</p>
                    </li>
                </ol>
            </div>
        </div>
        <div class="flex px-10">
            <p class="m-auto text-right">Dengan motto “Membuat Hidup Lebih Baik”, para pendiri sekolah percaya bahwa generasi masa depan yang lebih baik perlu memiliki karakter yang saleh, mereka perlu mengetahui tujuan hidup mereka yang sebenarnya sedini mungkin, dan potensi mereka perlu tumbuh dan dipelihara sepenuhnya. Di tahun pertamanya, Sekolah Dasar Kristen Harapan Bangsa memulai perjalanannya dengan kelas yang terdiri dari 20 siswa dan 5 guru, bertempat di gedung sekolah aslinya di Jln. R.E Martadinata, Balikpapan. Tahun berikutnya, Tuhan memberkati sekolah tersebut dengan gedung sekolah baru yang terletak di Jln. Indrakila, Balikpapan utara yang merupakan lokasi kampus kami saat ini. </p>
            <img class="w-1/2 rounded-3xl shadow-xl transform scale-75 rotate-3 hover:-rotate-2 transition-all ease-in-out duration-500" src="{{asset('assets/stock_photo_rdev/hold-hand.webp')}}">
        </div>
        <div class="flex px-10">
            <img class="w-1/2 rounded-3xl shadow-xl transform scale-75 -rotate-3 hover:rotate-2 transition-all ease-in-out duration-500" src="{{asset('assets/stock_photo_rdev/banner.webp')}}">
            <p class="m-auto text-left">Bangunan sekolah yang sekarang ini digunakan pertama kali dibangun pada awal tahun ajaran 2010/2011. Gayung bersambut, masyarakat Balikpapan dengan cepat mengetahui kualitas sekolah dan bagaimana sekolah tersebut menjadi lebih maju dari sekolah konvensional lainnya. Sekolah mulai tumbuh secara eksponensial dan menerima hampir seratus siswa baru setiap tahun. Pada bulan Februari 2014, sekolah mengalami masa sulit karena Ibu Lenny Priskila Tan meninggal dunia, namun atas petunjuk Tuhan, sekolah terus berkembang dengan sekumpulan pimpinan sekolah baru yang dibimbing olehnya. Di tahun yang sama, SMP Kristen Harapan Bangsa resmi berdiri, diikuti oleh SMA di tahun 2017.</p>
        </div>
        <div class="flex px-10">
            <p class="m-auto text-right">Nama Sekolah Kristen Terpadu Harapan Bangsa merupakan urutan sekolah dari Tingkat Sekolah Dasar sampai dengan Sekolah Menengah Atas. Saat ini, HHK dan HBICS memiliki lebih dari 700 siswa dan memiliki sekitar 150 guru dan karyawan. Ke depannya, sekolah ini akan melanjutkan perjalanannya menjadi sekolah Kristen terbaik di Balikpapan yang akan menghasilkan pembelajar dan pemimpin masa depan yang berkualitas. </p>
            <img class="w-1/2 rounded-3xl shadow-xl transform scale-75 rotate-3 hover:-rotate-2 transition-all ease-in-out duration-500" src="{{asset('assets/stock_photo_rdev/IMG_2012.webp')}}">
        </div>
    </div>
@endsection
