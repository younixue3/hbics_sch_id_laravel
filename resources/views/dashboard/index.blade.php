@extends('layouts.dashboard.master')
@section('title', '')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-purple-500 text-white rounded-full px-5 py-4 fas fa-newspaper"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$article->count()}}</span>
                <div class="-mt-3 text-lg">Article<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-green-500 text-white rounded-full px-3 py-4 fas fa-users"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$users->count()}}</span>
                <div class="-mt-3 text-lg">Users<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-blue-500 text-white rounded-full px-4 py-4 fas fa-envelope"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$mailbox->count()}}</span>
                <div class="-mt-3 text-lg">Emails<i
                        class="mx-2 text-red-500 fas fa-caret-up transform rotate-180"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-yellow-500 text-white rounded-full px-3.5 py-4 fas fa-id-card-alt"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$insight}}</span>
                <div class="-mt-3 text-lg">Insights<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <mac-card-component cardsname="Staff | Status" class="row-span-1 md:col-span-4 lg:col-span-6 overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                @forelse($users as $key => $value)
                    <div class="text-center">
                        <img class="h-8 w-8 rounded-full mx-auto"
                             src="{{asset('Upload/foto_profile/'.$value->foto_profile()->img)}}"
                             alt="">
                        <h1 class="text-base font-normal">{{$value->name}}</h1>
                        <div class="px-6">
                            <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">1h Ago</h4>
                        </div>
                    </div>
                @empty
                    Data User Kosong
                @endforelse
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Mail | Table" class="md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-fixed w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($mailbox as $key => $value)
                        <tr class="border-b-2 border-gray-200 h-10">
                            <td><a class="text-blue-500" href="#">{{$value->kunjungan != null ? $value->kunjungan()->email : json_decode($value->content)->items->email}}</a></td>
                            <td class="truncate">{{$value->kunjungan != null ? 'Kunjungan_'.$value->kunjungan : 'Pesan Dari '.json_decode($value->content)->items->name}}</td>
                            <td>{{$value->created_at}}</td>
                        </tr>
                    @empty
                        Email kosong
                    @endforelse
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Article | Table" class="row-span-2 md:col-span-4 lg:col-span-12 overflow-hidden">
            <table class="table-fixed w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Article Id</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($article->get(5) as $key => $value)
                    <tr class="border-b-2 border-gray-200 h-10">
                        <td><a class="text-blue-500" href="#">{{$value->randKey}}</a></td>
                        <td class="truncate">{{$value->title}}</td>
                        <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">{{$value->status}}</span></td>
                        <td>{{$value->users_create()->name}}</td>
                        <td>{{$value->created_at}}</td>
                    </tr>
                @empty
                    Data Kosong
                @endforelse
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Event | Table" class="row-span-3 md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-fixed w-full h-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>Order Id</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Experience & Review</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td class="truncate">Template E-Commerce + Pro</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-yellow-500 px-2 py-0.5 text-white rounded-full">Pending</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-blue-500 px-2 py-0.5 text-white rounded-full">Processing</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-green-500 px-2 py-0.5 text-white rounded-full">Success</span></td>
                    <td>5</td>
                </tr>
                <tr class="border-b-2 border-gray-200 h-10">
                    <td><a class="text-blue-500" href="#">OR9842</a></td>
                    <td>Adam</td>
                    <td><span class="bg-red-500 px-2 py-0.5 text-white rounded-full">Expired</span></td>
                    <td>5</td>
                </tr>
                </tbody>
            </table>
            <div class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </div>
        </mac-card-component>
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
        @if(session()->has('error'))
            <notification-component type="error" message="{{ session()->get('error') }}"></notification-component>
        @endif
    </div>
@endsection
