@extends('layouts/master')
@section('title', 'Home')
@section('content')
    <div class="">
        <div class="h-screen">
            <div class="flex h-screen relative text-center mb-10 shadow-xl">
                <img id="hero_section" class="h-screen w-screen object-cover"
                     src="{{asset('assets/stock_photo_rdev/IMG_7266.jpg')}}" alt="">
                <div class="absolute bottom-0 pb-10 bg-gradient-to-t from-gray-900 to-transparent w-full text-center">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-y-10 bg-white">
            <div class=" px-10 lg:px-80">
                <div class="m-auto w-full align-middle">
                    <div
                        class="absolute text-gray-300 -translate-x-10 -translate-y-5 md:-translate-x-10 md:-translate-y-10 text-6xl md:text-8xl">
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="relative my-20 text-lg text-center md:text-left">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis dui tempor, porta
                            justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla fermentum vel nec lorem.
                            Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus finibus ligula non
                            tempus consequat.<span class="mx-3 italic font-light block md:inline"> - Jane Doe - </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="md:flex px-5">
                <div class="md:w-2/5 h-96 bg-white rounded-3xl shadow-lg shadow-neutral-500">
                    <img class="w-full h-96 rounded-3xl object-cover"
                         src="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}">
                </div>
                <div class="md:w-3/5 grid grid-cols-1 gap-5 text-center md:text-start md:pl-10 py-10">
                    <h1 class="text-4xl font-bold">SEKOLAH KARYA</h1>
                    <p class="italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                        quis dui tempor, porta justo vel, suscipit tellus. Vivamus sed lectus nec tellus fringilla
                        fermentum vel nec lorem. Nullam eros urna, rutrum ac euismod eu, ultricies sed nibh. Vivamus
                        finibus ligula non tempus consequat. Vestibulum aliquam maximus odio ac varius. Suspendisse
                        sapien lorem, fringilla ac augue eu, congue tempor magna.</p>
                </div>
            </div>
            <div class="relative flex my-20">
                <div
                    class="absolute bottom-44 w-full h-96 rounded-3xl bg-gradient-to-br from-sky-600 to-blue-900 transform scale-95 skew-y-3 z-0 shadow-lg shadow-neutral-500 transition-all ease-in-out duration-500">

                </div>
                <div class="w-full lg:flex">
                    <div class="w-1/4 pt-10 pl-10 z-10 order-first lg:order-last">
                        <h1 class="text-5xl font-bold uppercase">Prestasi Kami</h1>
                    </div>
                    <div class="lg:w-3/4 h-[46rem] grid md:grid-cols-4 md:grid-rows-2 gap-8 overflow-hidden p-5 lg:p-16 lg:pr-0 z-10">
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="50"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="40"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="20"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="20"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                    </div>
                </div>
            </div>
            <div class="relative md:flex my-20 overflow-hidden">
                <div
                    class="absolute bottom-32 w-full h-80 rounded-3xl bg-gradient-to-br from-yellow-300 to-amber-500 transform scale-110 -skew-y-3 z-0 shadow-lg shadow-neutral-400 transition-all ease-in-out duration-500">

                </div>
                <div class="w-full lg:flex">
                    <div class="w-1/4 pt-10 pl-10 z-10">
                        <h1 class="text-5xl font-bold uppercase">Alumni Harapan Bangsa</h1>
                    </div>
                    <div class="lg:w-3/4 h-[46rem] grid md:grid-cols-4 md:grid-rows-2 gap-8 overflow-hidden p-5 lg:p-16 lg:pl-0 z-10">
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="50"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="40"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="20"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                        <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}" insight="20"
                                                title="Lorem Ipsum"
                                                content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
                    </div>
                </div>
            </div>
            <div class="relative md:flex h-[35rem] overflow-hidden z-0 -mb-36">
                <div
                    class="absolute top-32 w-full h-52 rounded-3xl bg-gradient-to-br from-sky-600 to-blue-900 transform scale-110 skew-y-3 rotate-6 z-0 shadow-lg shadow-neutral-400 transition-all ease-in-out duration-500">

                </div>
                <snap-component></snap-component>
            </div>
        </div>
    </div>
@endsection
