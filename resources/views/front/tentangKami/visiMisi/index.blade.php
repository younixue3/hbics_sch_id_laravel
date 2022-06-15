@extends('layouts.front.master')
@section('title', 'Visi Misi')
@section('content')
    <div class="bg-pattern pt-72 pb-10 text-center">
        <h1 id="hero_section" class="mb-20 text-5xl font-bold text-blue-900">Visi Misi</h1>
        <div class="flex">
            <div class="m-auto w-[65rem] px-10">
                <div class="bg-white rounded-3xl shadow-xl p-5">
                    <span class="block">Visi :</span>
                    <div class="my-2">
                        Menjadi sekolah <span class="font-semibold">terbaik dalam layanan</span>, maksimal mencerdaskan
                        generasi berkarakter <span
                            class="font-semibold">Kristus</span> yang menghasilkan <span
                            class="font-semibold">karya unggul</span> bagi Indonesia.
                    </div>
                    <span class="block">Misi :</span>
                    <ol class="leading-6 my-5">
                        <li><i class="fas fa-check-circle text-green-600 my-1 md:my-0 mr-3"></i><span class="font-semibold">Membangun karakter</span>
                            mulia berlandaskan nilai-nilai <span class="font-semibold">Kristus.</span></li>
                        <li><i class="fas fa-check-circle text-green-600 my-1 md:my-0 mr-3"></i><span
                                class="font-semibold">Mengarahkan</span> peserta didik <span class="font-semibold">memiliki tujuan hidup</span>
                            yang benar sejak dini.
                        </li>
                        <li><i class="fas fa-check-circle text-green-600 my-1 md:my-0 mr-3"></i><span class="font-semibold">Menggali, menemukan</span>
                            dan <span class="font-semibold">mengembangkan potensi</span> peserta didik secara <span
                                class="font-semibold">maksimal.</span></li>
                        <li><i class="fas fa-check-circle text-green-600 my-1 md:my-0 mr-3"></i><span class="font-semibold">Memfasilitasi dan mendorong</span>
                            peserta didik untuk <span class="font-semibold">berinovasi dan berkarya.</span></li>
                        <li><i class="fas fa-check-circle text-green-600 my-1 md:my-0 mr-3"></i><span class="font-semibold">Memberikan layanan prima</span>
                            kepada seluruh pemangku kepentingan <span class="font-semibold">sekolah.</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
