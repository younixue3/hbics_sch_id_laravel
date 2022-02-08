<template>
    <div>
        <header ref="navbar" class="h-44 fixed top-0 w-screen transition-all ease-in-out duration-300 z-10" id="navBar">
            <div>
                <div :class="show ? 'bg-blue-900 h-20' : 'bg-transparent h-44'"
                     class="transition-all ease-in-out duration-300">
                    <div class="pt-2 grid grid-cols-11 place-items-center content-center text-center text-white">
                        <div class="">
                            <div class="-mr-2 -my-2 md:hidden">
                                <button id="openMenu" type="button"
                                        class="rounded-md p-1 inline-flex items-center justify-center text-gray-200 focus:outline-none transition-all ease-in-out duration-300"
                                        aria-expanded="false">
                                    <span class="sr-only">Open menu</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-span-4 justify-self-end hidden md:block mr-20">
                            <div class="grid grid-cols-2 font-light mb-2">
                                <div>Home</div>
                                <div>Tentang Kami</div>
                            </div>
                            <div class="grid grid-cols-2 gap-x-5 font-bold">
                                <div @mouseover="modalshow('pendaftaran')" @mouseleave="modalclose('pendaftaran')">
                                    <span class="cursor-pointer text-lg">
                                        Pendaftaran
                                    </span>
                                    <div class="py-8 fixed -translate-x-3/4">
                                        <div ref="pendaftaran" id="pendaftaran"
                                             class="h-0 hidden bg-white text-black shadow-xl rounded-2xl border border-2 shadow-lg w-80 z-50 transition-all ease-in-out duration-300 overflow-hidden">
                                            <div class="h-full grid grid-rows-5 divide-y-2">
                                                <div
                                                    class="grid grid-rows-4 items-center justify-items-stretch row-span-4 p-0.5">
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-pen-alt"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Petunjuk Pendaftaran
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Panduan mendaftar Sekolah Harapan Bangsa & Happy
                                                                    Holy Kids
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-trophy"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Program Beasiswa
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Berbagai program Beasiswa Sekolah Harapan Bangsa &
                                                                    Happy Holy Kids
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-user-tie"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Pendaftaran Siswa Baru
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Pendaftaran Calon Siswa Sekolah harapan Bangsa
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-school"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Kunjungi Kami
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Alamat dan jadwal kunjungan ke Sekolah Harapan
                                                                    bangsa
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex justify-center gap-x-5 pt-5">
                                                    <a class="bg-clip-text text-transparent bg-gradient-to-br from-gray-700 hover:from-blue-600 to-gray-700 hover:to-sky-400 text-2xl"
                                                       href="#"><i class="fab fa-facebook"></i></a>
                                                    <a class="bg-clip-text text-transparent bg-gradient-to-br from-gray-700 hover:from-pink-500 to-gray-700 hover:to-violet-500 text-2xl"
                                                       href="#"><i class="fab fa-instagram-square"></i></a>
                                                    <a class="bg-clip-text text-transparent bg-gradient-to-br from-gray-700 hover:from-red-600 to-gray-700 hover:to-rose-400 text-2xl"
                                                       href="#"><i class="fab fa-youtube"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div @mouseover="modalshow('akademis')" @mouseleave="modalclose('akademis')">
                                    <span class="cursor-pointer text-lg">
                                        Akademis
                                    </span>
                                    <div class="py-8 fixed -translate-x-3/4">
                                        <div ref="akademis" id="akademis"
                                             class="h-0 hidden bg-white text-black shadow-xl rounded-2xl border border-2 shadow-lg w-80 z-50 transition-all ease-in-out duration-300 overflow-hidden">
                                            <div class="h-full grid grid-rows-5 divide-y-2">
                                                <div
                                                    class="grid grid-rows-4 items-center justify-items-stretch row-span-4 p-0.5">
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-1 transition-all ease-in duration-200">
                                                                    <img :src="logohhk"></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Happy Holy Kids
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Kelompok bermain & Taman Kanak-kanak
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-2 transition-all ease-in duration-200">
                                                                    <img :src="logo"></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Sekolah Dasar
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Sekolah dasar Harapan Bangsa
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-2 transition-all ease-in duration-200">
                                                                    <img :src="logo"></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Sekolah Menengah Pertama
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Sekolah menegah pertama Harapan Bangsa
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-2 transition-all ease-in duration-200">
                                                                    <img :src="logo"></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Sekolah Menengah Atas
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Sekolah menengah atas Harapan Bangsa
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex justify-between gap-x-5 p-5">
                                                    <a class="bg-clip-text text-transparent bg-gradient-to-br from-gray-700 hover:from-blue-600 to-gray-700 hover:to-sky-400 font-normal"
                                                       href="#"><i class="fas fa-user-graduate text-xs mr-3"></i>Alumni</a>
                                                    <a class="bg-clip-text text-transparent bg-gradient-to-br from-gray-700 hover:from-blue-600 to-gray-700 hover:to-sky-400 font-normal"
                                                       href="#"><i class="fas fa-chalkboard-teacher text-xs mr-3"></i>Guru</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-9 md:col-span-1">
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-16' : 'h-0'"
                                 :src="imagewhite" alt="">
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-0' : 'h-14 md:h-24'"
                                 :src="logo" alt="">
                            <img class="m-auto transition-all ease-in-out duration-300" :class="show ? 'h-0' : 'h-14 md:h-28'"
                                 :src="footerwhite" alt="">
                        </div>
                        <div class="col-span-4 justify-self-start hidden md:block ml-20">
                            <div class="grid grid-cols-2 gap-x-5 font-light mb-2">
                                <div>Hubungi kami</div>
                            </div>
                            <div class="grid grid-cols-2 font-bold">
                                <div @mouseover="modalshow('komunitas')" @mouseleave="modalclose('komunitas')">
                                    <span class="cursor-pointer text-lg">
                                        Komunitas
                                    </span>
                                    <div class="py-8 fixed">
                                        <div ref="komunitas" id="komunitas"
                                             class="h-0 hidden bg-white text-black shadow-xl rounded-2xl border border-2 shadow-lg w-96 z-50 transition-all ease-in-out duration-300 overflow-hidden">
                                            <div class="h-full grid grid-rows-5 divide-y-2">
                                                <div
                                                    class="grid grid-rows-2 items-center justify-items-stretch row-span-2 p-0.5">
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-1 transition-all ease-in duration-200">
                                                                    <i class="fas fa-user-graduate"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Alumni
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Alumni Siswa Sekolah Harapan Bangsa & Happy Holy
                                                                    Kids
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-user-friends"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Orang Tua
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Orang Tua/Wali Siswa dan Alumni Sekolah Harapan
                                                                    Bangsa dan Happy Holy Kids
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-span-3 grid grid-rows-2 px-5">
                                                    <div>
                                                        <span class="text-xs font-light h-5">Alumni</span>
                                                        <div class="grid grid-cols-2 gap-x-2">
                                                            <a href="#"
                                                               class="grid grid-cols-3 gap-x-1 text-center bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl h-16 p-2">
                                                                <img
                                                                    src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                    class="h-12 w-12 rounded-full object-cover">
                                                                <div
                                                                    class="col-span-2 grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                    <div class="leading-3 transition-all ease-in-out">
                                                                        Ricko
                                                                    </div>
                                                                    <div
                                                                        class="leading-3 text-xs font-light transition-all ease-in-out overflow-hidden truncate h-3">
                                                                        Binus University
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#"
                                                               class="grid grid-cols-3 gap-x-1 text-center bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl h-16 p-2">
                                                                <img
                                                                    src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                    class="h-12 w-12 rounded-full object-cover">
                                                                <div
                                                                    class="col-span-2 grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                    <div class="leading-3 transition-all ease-in-out">
                                                                        Ricko
                                                                    </div>
                                                                    <div
                                                                        class="leading-3 text-xs font-light transition-all ease-in-out overflow-hidden truncate h-3">
                                                                        Binus University
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-xs font-light h-5">Orang Tua</span>
                                                        <div class="grid grid-cols-2 gap-2">
                                                            <a href="#"
                                                               class="grid grid-cols-3 gap-x-1 text-center bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl h-16 p-2">
                                                                <img
                                                                    src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                    class="h-12 w-12 rounded-full object-cover">
                                                                <div
                                                                    class="col-span-2 grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                    <div class="leading-3 transition-all ease-in-out">
                                                                        Ricko
                                                                    </div>
                                                                    <div
                                                                        class="leading-3 text-xs font-light transition-all ease-in-out overflow-hidden truncate h-3">
                                                                        Binus University
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#"
                                                               class="grid grid-cols-3 gap-x-1 text-center bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl h-16 p-2">
                                                                <img
                                                                    src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                    class="h-12 w-12 rounded-full object-cover">
                                                                <div
                                                                    class="col-span-2 grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                    <div class="leading-3 transition-all ease-in-out">
                                                                        Ricko
                                                                    </div>
                                                                    <div
                                                                        class="leading-3 text-xs font-light transition-all ease-in-out overflow-hidden truncate h-3">
                                                                        Binus University
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div @mouseover="modalshow('publikasi')" @mouseleave="modalclose('publikasi')">
                                    <span class="cursor-pointer text-lg">
                                        Publikasi
                                    </span>
                                    <div class="py-8 fixed">
                                        <div ref="publikasi" id="publikasi"
                                             class="h-0 hidden bg-white text-black shadow-xl rounded-2xl border border-2 shadow-lg w-[31rem] z-50 transition-all ease-in-out duration-300 overflow-hidden">
                                            <div class="h-full grid grid-rows-5 divide-y-2">
                                                <div
                                                    class="grid grid-rows-3 items-center justify-items-stretch row-span-3 p-0.5">
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 p-1 transition-all ease-in duration-200">
                                                                    <i class="fas fa-newspaper"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Berita
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Berita seputar Sekolah Harapan Bangsa, Happy Holy
                                                                    Kids dan Dunia Pendidikan
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-star"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Acara
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Acara Sekolah Harapan Bangsa dan Happy Holy Kids
                                                                    yang telah di selengarakan
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="bg-white hover:bg-gray-200 rounded-xl p-2 text-black hover:text-amber-500 transition-all ease-in duration-200"
                                                       href="#">
                                                        <div class="flex gap-x-5 text-center">
                                                            <div class="w-20">
                                                                <div
                                                                    class="bg-blue-900 text-white rounded-xl flex items-center justify-center w-12 h-12 transition-all ease-in duration-200">
                                                                    <i class="fas fa-brain"></i></div>
                                                            </div>
                                                            <div
                                                                class="w-full grid grid-rows-2 gap-0 items-center text-left text-sm">
                                                                <div class="leading-3 transition-all ease-in-out">
                                                                    Artikel
                                                                </div>
                                                                <div
                                                                    class="text-xs font-light break-words leading-3 text-black">
                                                                    Artikel Ilmiah edukasi seputar Ilmu pendidikan dan parenting
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="px-5 h-36 row-span-2">
                                                    <span class="text-xs font-light">Alumni</span>
                                                    <div class="grid grid-cols-2 gap-x-5">
                                                        <a href="#"
                                                           class="grid grid-cols-2 gap-x-1 text-center bg-white h-24 rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl p-2">
                                                            <img
                                                                src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                class="h-[4.5rem] w-[4.5rem] rounded-xl object-cover">
                                                            <div class="grid grid-rows-2 gap-0 items-start text-left text-sm py-2">
                                                                <div class="leading-3 transition-all ease-in-out truncate">
                                                                    Lorem Ipsum dolor sit amet, consetanioa n ojdanon
                                                                </div>
                                                                <div class="text-xs font-light leading-3 text-black text-ellipsis overflow-hidden h-9">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta bibendum odio, id egestas ex condimentum vitae. Integer eget ex libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi non nibh eu mi ullamcorper varius. Donec sit amet dolor sed ex pharetra egestas. Aenean malesuada quis est vitae pellentesque. Nullam interdum, mauris nec finibus lacinia, leo risus aliquet nibh, vel imperdiet ex mi feugiat elit. Cras condimentum elit nulla, quis sagittis mauris volutpat eget. Sed tristique eu turpis ultricies pellentesque. Donec at ligula nisl. Nunc porta, quam vitae dapibus tristique, erat quam placerat nibh, vitae auctor leo tortor ac sem.
                                                                    <p>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#"
                                                           class="grid grid-cols-2 gap-x-1 text-center bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all ease-in-out duration-300 hover:shadow-xl p-2">
                                                            <img
                                                                src="http://hbics_sch_id.test/assets/stock_photo_rdev/profile_pic.jpg"
                                                                class="h-[4.5rem] w-[4.5rem] rounded-xl object-cover">
                                                            <div class="grid grid-rows-2 gap-0 items-start text-left text-sm py-2">
                                                                <div class="leading-3 transition-all ease-in-out truncate">
                                                                    Lorem Ipsum dolor sit amet, consetanioa n ojdanon
                                                                </div>
                                                                <div class="text-xs font-light leading-3 text-black text-ellipsis overflow-hidden h-9">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta bibendum odio, id egestas ex condimentum vitae. Integer eget ex libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi non nibh eu mi ullamcorper varius. Donec sit amet dolor sed ex pharetra egestas. Aenean malesuada quis est vitae pellentesque. Nullam interdum, mauris nec finibus lacinia, leo risus aliquet nibh, vel imperdiet ex mi feugiat elit. Cras condimentum elit nulla, quis sagittis mauris volutpat eget. Sed tristique eu turpis ultricies pellentesque. Donec at ligula nisl. Nunc porta, quam vitae dapibus tristique, erat quam placerat nibh, vitae auctor leo tortor ac sem.
                                                                    <p>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=""><div class="hidden md:block">ada</div></div>
                    </div>
                </div>
            </div>
            <div class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-50">
                <div
                    class="rounded-lg shadow-lg ring-1 ring-gray-800 ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-end">
                            <div class="-mr-2">
                                <button id="closeMenu" type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Analytics
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Engagement
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Security
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Integrations
                            </span>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                    </svg>
                                    <span class="ml-3 text-base text-gray-900">
                                Automations
                            </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Docs
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Help Center
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Guides
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Events
                            </a>

                            <a href="#" class="text-base text-gray-900 hover:text-gray-700">
                                Security
                            </a>
                        </div>
                        <div>
                            <a href="#"
                               class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base text-white bg-indigo-600 hover:bg-indigo-700">
                                Sign up
                            </a>
                            <p class="mt-6 text-center text-base text-white">
                                Existing customer?
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false
        }
    },
    props: ['imagewhite', 'footerwhite', 'logo', 'logohhk'],
    created() {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll() {
            // console.log(this.$refs.navbar.getBoundingClientRect())
            // console.log(document.getElementById('hero_section').getBoundingClientRect().bottom)
            if (this.$refs.navbar.getBoundingClientRect().height >= document.getElementById('hero_section').getBoundingClientRect().bottom && this.show === false) {
                // console.log('lewat')
                this.show = true;
                // console.log(this.show)
            } else if (this.$refs.navbar.getBoundingClientRect().height <= document.getElementById('hero_section').getBoundingClientRect().bottom && this.show === true) {
                // console.log('belum lewat')
                this.show = false;
                // console.log(this.show)
            }
        },
        modalshow(navname) {
            // document.getElementById('#')
            eval(navname).classList.remove('hidden')
            setTimeout(function () {
                eval(navname).classList.add('h-80')
            }, 10)

        },
        modalclose(navname) {
            eval(navname).classList.remove('h-80')
            eval(navname).classList.add('h-0')
            setTimeout(function () {
                eval(navname).classList.add('hidden')
            }, 100)
        }
    }
}
</script>
