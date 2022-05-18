<template>
    <div class="m-auto">
        <div class="flex">
            <div class="border-2 bg-white rounded-xl flex">
                <button class="w-32 bg-white  rounded-l-xl"
                        :class="tab_active === 'hhk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'hhk'">HHK
                </button>
                <button class="w-32 bg-white"
                        :class="tab_active === 'sdk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'sdk'">SDK
                </button>
                <button class="w-32 bg-white"
                        :class="tab_active === 'smpk' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'smpk'">SMPK
                </button>
                <button class="w-32 bg-white rounded-r-xl"
                        :class="tab_active === 'smak' ? 'bg-blue-600 text-white' : 'hover:bg-blue-100'"
                        @click="tab_active = 'smak'">SMAK
                </button>
            </div>
        </div>
        <div class="m-auto px-10 text-left mt-10">
            <ol v-if="tab_active === 'hhk'" class="relative border-l border-gray-400">
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">Membeli
                        Formulir
                    </h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i membeli formulir
                        pendaftaran</p>
                    <a href="#"
                       class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Beli Formulir</a>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Mengisi Formulir</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i mengisi Formulir
                        sesuai dengan syarat dan ketentuan sekolah yang berlaku, lalu mengembalikan formulir ke
                        pihak sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Test/Observasi</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                        Released
                        on December 2nd, 2021
                    </time>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menjalani
                        test/observasi masuk sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Parents Interview</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        mengikuti Parent Interview dengan Kepala Sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Result Parents
                        Interview</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        menerima hasil keputusan dari kepala sekolah terkait hasil Parents Interview</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Admininstras</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menyelesaikan
                        proses admininstrasi sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pengambilan Perlengkapan
                        Sekolah</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i melakukan proses
                        pengukuran serama, pengambilan buku sekolah dan penempatan kelas</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Selamat Bersekolah!</h3>
                    <p class="text-base font-normal text-gray-500">Selamat Datang! di Sekolah
                        Harapan Bangsa & Happy Holy Kids Balikpapan</p>
                </li>
            </ol>
            <ol v-if="tab_active === 'sdk'" class="relative border-l border-gray-400">
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">Pembelian Formulir
                        Pendaftaran
                    </h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i atau Wali Siswa/i membeli formulir
                        pendaftaran</p>
                    <a href="#"
                       class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Beli Formulir</a>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Mengisi Formulir</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i mengisi Formulir
                        sesuai dengan syarat dan ketentuan sekolah yang berlaku, lalu mengembalikan formulir ke
                        pihak sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Parents Interview</h3>
                    <p class="text-base font-normal text-gray-500">Orang Tua Calon Siswa/i
                        mengikuti Parent Interview dengan Kepala Sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Hasil Parents Interview</h3>
                    <p class="text-base font-normal text-gray-500">Orang Tua Calon Siswa/i menerima hasil dari Parents Interview</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Admininstrasi Keuangan</h3>
                    <p class="text-base font-normal text-gray-500">Orang Tua Calon Siswa/i melakukan proses admininstrasi keuangan</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Validasi Umur Calon Siswa</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i di validasi memiliki kesesuaian umur</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Observasi Usia Berjalan</h3>
                    <p class="text-base font-normal text-gray-500">Observasi usia berjalan oleh Principal atau Pak Rio sesuai prosedur</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Result Observasi</h3>
                    <p class="text-base font-normal text-gray-500">Orang tua Calon Siswa/i menerima hasil Observasi</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Terbit Surat Penerimaan Siswa Baru</h3>
                    <p class="text-base font-normal text-gray-500">Orang tua Calon Siswa/i menerima surat Penerimaan siswa baru</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Ukur Seragam</h3>
                    <p class="text-base font-normal text-gray-500">Pengukuran seragam untuk Siswa/i Baru</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pengambilan Seragam</h3>
                    <p class="text-base font-normal text-gray-500">Pengambilan seragam sekolah Siswa/i Baru</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pengambilan Buku KBM</h3>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Observasi Penempatan Kelas</h3>
                    <p class="text-base font-normal text-gray-500">Observasi penempatan kelas untuk Siswa/i Baru</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Admininstrasi Keuangan sekesai sebelum KBM TA Baru</h3>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">KBM TA Baru di SDK HBICS</h3>
                </li>
            </ol>
            <ol v-if="tab_active === 'smpk'" class="relative border-l border-gray-400">
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">Pembelian Formulir
                        Pendaftaran
                    </h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i atau Wali Siswa/i membeli formulir
                        pendaftaran</p>
                    <a href="#"
                       class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Beli Formulir</a>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Mengisi Formulir</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i mengisi Formulir
                        sesuai dengan syarat dan ketentuan sekolah yang berlaku, lalu mengembalikan formulir ke
                        pihak sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Tes Minat Bakat</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menjalan
                        tes minat dan bakat</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Parents Interview</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        mengikuti Parent Interview dengan Kepala Sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Surat Penerimaan</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        menerima hasil keputusan dari kepala sekolah terkait hasil Parents Interview</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Admininstrasi</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menyelesaikan
                        proses admininstrasi sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Observasi English</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i melakukan proses
                        pengukuran serama, pengambilan buku sekolah dan penempatan kelas</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pengambilan Perlengkapan
                        Sekolah</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i melakukan proses
                        pengukuran serama, pengambilan buku sekolah dan penempatan kelas</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Selamat Bersekolah!</h3>
                    <p class="text-base font-normal text-gray-500">Selamat Datang! di Sekolah
                        Harapan Bangsa & Happy Holy Kids Balikpapan</p>
                </li>
            </ol>
            <ol v-if="tab_active === 'smak'" class="relative border-l border-gray-400">
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">Pembelian Formulir
                        Pendaftaran
                    </h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i atau Wali Siswa/i membeli formulir
                        pendaftaran</p>
                    <a href="#"
                       class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                        Beli Formulir</a>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Mengisi Formulir</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i mengisi Formulir
                        sesuai dengan syarat dan ketentuan sekolah yang berlaku, lalu mengembalikan formulir ke
                        pihak sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Tes Minat Bakat</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menjalan
                        tes minat dan bakat</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Parents Interview</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        mengikuti Parent Interview dengan Kepala Sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Surat Penerimaan</h3>
                    <p class="text-base font-normal text-gray-500">Calon Orang Tua Siswa/i
                        menerima hasil keputusan dari kepala sekolah terkait hasil Parents Interview</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Admininstrasi</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i menyelesaikan
                        proses admininstrasi sekolah</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Observasi English</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i melakukan proses
                        pengukuran serama, pengambilan buku sekolah dan penempatan kelas</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Pengambilan Perlengkapan
                        Sekolah</h3>
                    <p class="text-base font-normal text-gray-500">Calon Siswa/i melakukan proses
                        pengukuran serama, pengambilan buku sekolah dan penempatan kelas</p>
                </li>
                <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                        </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Selamat Bersekolah!</h3>
                    <p class="text-base font-normal text-gray-500">Selamat Datang! di Sekolah
                        Harapan Bangsa & Happy Holy Kids Balikpapan</p>
                </li>
            </ol>
        </div>
    </div>
</template>

<script>
export default {
    name: "TabBarComponent",
    data() {
        return {
            tab_active: 'hhk'
        }
    }
}
</script>

<style scoped>

</style>
