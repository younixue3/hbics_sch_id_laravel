@extends('layouts/master')
@section('content')
<div class="">
    <div class="h-screen">
        <div class="flex h-screen relative text-center mb-10 shadow-xl">
            <img id="hero_section" class="h-screen w-screen object-cover" src="{{asset('assets/stock_photo_rdev/IMG_7266.jpg')}}" alt="">
            <div class="absolute bottom-0 pb-10 bg-gradient-to-t from-gray-900 to-transparent w-full text-center">
            </div>
        </div>
    </div>
    <div class="text-center -mt-32 mb-32">
        <div class="my-2 md:my-10 mx-5 md:mx-20">
            <div class="my-auto text-center md:text-left">
                <h1 class="text-xl md:text-8xl my-10 md:my-0 mb-5 font-bold">About Us</h1>
                <p class="my-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eveniet porro aspernatur nam, quaerat fuga quia, vero neque reprehenderit necessitatibus quas molestiae possimus accusamus provident quae! Corrupti nostrum molestiae perferendis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi deleniti quod natus alias consequuntur fugit beatae laboriosam modi! Nisi eius fugiat temporibus atque reprehenderit culpa mollitia molestias in quo itaque?
                </p>
            </div>
        </div>
    </div>
    <div class="text-center mb-52">
        <div class="md:flex">
            <div class="w-full md:w-1/2 grid grid-cols-2 grid-rows-2">
                <div class="row-span-2 relative">
                    <img class="h-full w-full filter grayscale contrast-50 object-cover" src="../public/img/picture-brunette-female-taking-selfie-with-beautiful-smile.jpg" alt="">
                    <div class="absolute bottom-0 h-full w-full">
                        <div class="bg-gray-800 h-full w-full opacity-40"></div>
                        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 py-5 text-white">
                            <h1>Ricko Tiaka</h1>
                            <div class="italic text-xs">
                                Founder of RDeveloper, Full-Stack Developer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-full w-full filter grayscale contrast-50 object-cover" src="../public/img/thinking-woman-look-copy-space-isolated-grey-background-with-finger-face-asian-beauty.jpg" alt="">
                    <div class="absolute bottom-0 h-full w-full">
                        <div class="bg-gray-800 h-full w-full opacity-40"></div>
                        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 py-5 text-white">
                            <h1>Jane Doe</h1>
                            <div class="italic text-xs">
                                CEO of RDeveloper, Back-End Developer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img class="h-full w-full filter grayscale contrast-50 object-cover" src="../public/img/young-asian-healthy-woman-sportswear-workout-home-exercise-fit-doing-yoga-home-sport-fitness-concept.jpg" alt="">
                    <div class="absolute bottom-0 h-full w-full">
                        <div class="bg-gray-800 h-full w-full opacity-40"></div>
                        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 py-5 text-white">
                            <h1>Jane Doe</h1>
                            <div class="italic text-xs">
                                Front-End Developer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 md:mx-16 my-10 md:my-auto text-center md:text-left">
                <h1 class="text-5xl mb-5 font-bold">Our Team</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi numquam incidunt, nobis sapiente ratione at perferendis maiores cum. Id soluta placeat repudiandae maxime ratione pariatur amet perferendis recusandae consequuntur repellat?
            </div>
        </div>
    </div>
    <div class="text-center my-10 bg-gray-100">
        <div class="md:flex">
            <div class="w-full md:w-1/4 md:mx-16 my-auto text-center md:text-left">
                <h1 class="text-5xl mb-5 font-bold">Partners</h1>
                <p>and more 30+ Company being our Partners</p>
            </div>
            <div class="w-full md:w-3/4 grid grid-cols-3">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/143-1438265_15-black-apple-logo-transparent-background-free-background.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/Google__G__Logo.svg.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/path4979.png">
            </div>
        </div>
    </div>
    <div class="text-center my-10 bg-gray-100">
        <div class="md:flex flex-col-reverse md:flex-row">
            <div class="w-full md:w-1/4 md:mx-16 my-auto text-center md:text-left">
                <h1 class="text-5xl mb-5 font-bold">Costumers</h1>
                <p>and more 120+ Company being our Costumers</p>
            </div>
            <div class="w-full md:w-3/4 grid grid-cols-3 xl:grid-cols-6 ">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/143-1438265_15-black-apple-logo-transparent-background-free-background.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/Google__G__Logo.svg.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/path4979.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/143-1438265_15-black-apple-logo-transparent-background-free-background.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/Google__G__Logo.svg.png">
                <img class="h-28 w-28 md:h-40 md:w-40 p-5 md:p-10 filter grayscale hover:grayscale-0 opacity-50 hover:opacity-100" src="../public/img/path4979.png">
            </div>
        </div>
    </div>
</div>
@endsection
