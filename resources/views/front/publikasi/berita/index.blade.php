@extends('layouts.master')
@section('title', 'Alumni')
@section('content')
    <div id="hero_section" class="h-52"></div>
    <div class="px-10">
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
    </div>
@endsection
