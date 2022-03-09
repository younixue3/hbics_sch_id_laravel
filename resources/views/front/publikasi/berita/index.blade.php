@extends('layouts.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-5 md:px-10">
        <div
            class="w-full h-full lg:h-[35rem] grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-5 lg:gap-8 overflow-hidden px-5 md:px-0 z-10">
            <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}"
                                    insight="50"
                                    title="Lorem Ipsum"
                                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
            <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}"
                                    insight="40"
                                    title="Lorem Ipsum"
                                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
            <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}"
                                    insight="20"
                                    title="Lorem Ipsum"
                                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
            <content-card-component imagecontent="{{asset('assets/stock_photo_rdev/Pic-1.jpg')}}"
                                    insight="20"
                                    title="Lorem Ipsum"
                                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a mauris ut ipsum varius blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed nisl non ante semper vehicula. Morbi pretium, nisl in egestas iaculis, augue enim scelerisque neque, in scelerisque dolor justo quis sapien. Mauris suscipit eleifend eros non condimentum. Maecenas felis mi, efficitur tincidunt accumsan vel, lacinia sed nisi. Cras cursus elit sed ligula volutpat, id malesuada felis facilisis. Suspendisse mauris quam, scelerisque nec purus eget, pretium volutpat magna. Vivamus tempus sit amet nibh vitae imperdiet. Curabitur congue dignissim consequat. Maecenas quis sapien ut nibh consectetur feugiat id ut arcu. Cras odio nulla, laoreet sed metus a, malesuada dictum dui. Nulla rutrum, ipsum sit amet tristique cursus, ligula dui sagittis quam, a mattis ipsum sapien sit amet est."></content-card-component>
        </div>
        <div class="md:px-20 my-10">
            <div class="grid md:grid-rows-6 grid-cols-1 md:grid-cols-3 gap-5">
                <div class="md:row-span-2">
                    <img class="md:h-[49.25rem] w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/CTA.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/chris-ried-bN5XdU-bap4-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-2">
                    <video class="md:h-[49.25rem] w-full object-cover rounded-2xl object-cover" autoplay loop muted>
                        <source src="{{asset('assets/stock_photo_rdev/pexels-宇航-钱-10641436.mp4')}}">
                    </video>
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/marvin-meyer-SYTO3xs06fU-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-2">
                    <img class="md:h-[49.25rem] w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/luca-bravo-XJXWbfSo2f0-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/alex-knight-2EJCSULRwC8-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-2">
                    <video class="md:h-[49.25rem] w-full object-cover rounded-2xl object-cover" autoplay loop muted>
                        <source src="{{asset('assets/stock_photo_rdev/Pexels_Videos_1350205.mp4')}}">
                    </video>
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <img class="md:h-96 w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/domenico-loia-hGV2TfOh0ns-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-2">
                    <img class="md:h-[49.25rem] w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/austin-poon-JO_S6ewBqAk-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <video class="md:h-96 w-full object-cover rounded-2xl object-cover" autoplay loop muted>
                        <source src="{{asset('assets/stock_photo_rdev/video.mp4')}}">
                    </video>
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-2">
                    <img class="md:h-[49.25rem] w-full object-cover rounded-2xl" src="{{asset('assets/stock_photo_rdev/andras-vas-Bd7gNnWJBkU-unsplash.jpg')}}">
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="md:row-span-1">
                    <video class="md:h-96 w-full object-cover rounded-2xl object-cover" autoplay loop muted>
                        <source src="{{asset('assets/stock_photo_rdev/pexels-anna-nekrashevich-6799742.mp4')}}">
                    </video>
                    <div class="h-36 px-3 py-2 pt-3">
                        <div class="w-full flex justify-between mb-1">
                            <div class="flex h-6 gap-x-1 align-text-bottom mb-2">
                                <img class="rounded-full h-6 w-6 md:h-8 md:w-8 object-cover" src="{{asset('assets/stock_photo_rdev/JaneDoe.jpg')}}">
                                <div class="m-auto text-xs md:text-base truncate">
                                    Ricko Tiaka
                                </div>
                            </div>
                            <div class="flex h-5 gap-x-5">
                                <button class="text-xs md:text-lg"><i class="fas fa-heart"></i></button>
                                <button class="text-xs md:text-lg"><i class="fas fa-share"></i></button>
                            </div>
                        </div>
                        <h3 class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
