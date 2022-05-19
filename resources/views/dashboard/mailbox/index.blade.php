@extends('layouts.dashboard.master')
@section('title', 'Mailbox')
@section('content')
    <div class="flex">
        <button class="text-gray-500 border px-3 py-1 rounded-l-xl shadow-md"><i class="fas fa-inbox mr-2"></i>Inbox<span
                class="bg-indigo-600 rounded-full text-white px-2 pb-0.5 pt-1 ml-2 mx-1">12</span></button>
        <button class="text-gray-500 border border-r-0 border-l-0 px-3 py-1 shadow-md"><i
                class="fas fa-envelope mr-2"></i>Sent
        </button>
        <button class="text-gray-500 border px-3 py-1 rounded-r-xl shadow-md"><i class="fas fa-trash mr-2"></i>Trash
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-8 gap-5 my-5">
        <div class="md:col-span-3 space-y-3">
            <div class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 flex">
                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="pt-1">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                        <h1 class="text-xs">August 23, 2021</h1>
                    </div>
                    <h2>Apply Resume CV</h2>
                    <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English.
                    </p>
                </div>
            </div>
            <div class="transition-all duration-200 cursor-pointer border rounded-xl bg-gray-100 shadow-lg px-5 py-3 flex">
                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="pt-1">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                        <h1 class="text-xs">August 23, 2021</h1>
                    </div>
                    <h2>Apply Resume CV</h2>
                    <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English.
                    </p>
                </div>
            </div>
            <div class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 flex">
                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="pt-1">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                        <h1 class="text-xs">August 23, 2021</h1>
                    </div>
                    <h2>Apply Resume CV</h2>
                    <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English.
                    </p>
                </div>
            </div>
            <div class="transition-all duration-200 cursor-pointer border rounded-xl bg-white hover:bg-gray-100 shadow-lg px-5 py-3 flex">
                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="pt-1">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                        <h1 class="text-xs">August 23, 2021</h1>
                    </div>
                    <h2>Apply Resume CV</h2>
                    <p class="my-2 h-20 overflow-hidden leading-5 text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English.
                    </p>
                </div>
            </div>
        </div>
        <!--       Not Support for Mobile Version         -->
        <div class="hidden md:block md:col-span-5">
            <div class="border rounded-xl bg-whited shadow-lg px-5 py-3 flex">
                <img class="h-12 w-12 mr-2 md:mr-4 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="pt-1">
                    <div class="flex justify-between">
                        <h1 class="text-lg font-bold leading-4">Jane Doe</h1>
                        <h1 class="text-xs">August 23, 2021</h1>
                    </div>
                    <h1 class="text-sm leading-4">janedoe@example.com</h1>
                    <h2>Apply Resume CV</h2>
                    <p class="my-2 overflow-hidden leading-5 text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English. Many desktop publishing packages and web
                        page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                        ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                        over the years, sometimes by accident, sometimes on purpose (injected humour and the
                        like).
                    </p>
                    <div class="grid grid-cols-3 gap-5 pt-10">
                        <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"
                             src="../public/img/asia-business-woman-success-celebration-keeping-arms-raised-home-office.jpg">
                        <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"
                             src="../public/img/asian-muslim-lady-looking-camera-talk-colleagues-about-plan-video-call-new-normal-office.jpg">
                        <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"
                             src="../public/img/download.jpg">
                        <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"
                             src="../public/img/young-asian-healthy-woman-sportswear-workout-home-exercise-fit-doing-yoga-home-sport-fitness-concept.jpg">
                        <img class="transition-all duration-500 cursor-pointer object-cover h-32 filter hover:grayscale"
                             src="../public/img/hq720.jpg">
                    </div>
                    <div class="flex rounded-md shadow-md mt-10 mb-5">
                        <input type="email"
                               class="flex-1 block border border-r-0 w-full rounded-l-xl focus:outline-none px-3 pt-2 pb-1"
                               placeholder="Search what you want to know">
                        <button class="inline-flex items-center rounded-r-xl border-l-0 border border-l-0 text-white w-12">
                            <i class="far fa-paper-plane text-gray-600 text-xl m-auto"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modalShow')
    <form-prestasi-component>
    </form-prestasi-component>
@endsection
@section('modalEdit')
    <form-prestasi-edit-component>
    </form-prestasi-edit-component>
@endsection
@section('modalAdd')
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="name">
        </div>
        <div class="row-span-2">
            <label class="block font-medium text-gray-700">
                Foto
            </label>
            <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
                <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
            </div>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Prestasi
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="prestasi">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Detail Prestasi
            </label>
            <textarea
                class="resize-none flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                name="detail_prestasi"></textarea>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <select name="area"
                    class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase">
                <option disabled selected>--- Pilih Area ---</option>
                <option>hhk</option>
                <option>sd</option>
                <option>smp</option>
                <option>sma</option>
            </select>
        </div>
    </div>
@endsection
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
        @if(session()->has('success'))
            <notification-component type="success" message="{{ session()->get('success') }}"></notification-component>
        @endif
    </div>
@endsection
