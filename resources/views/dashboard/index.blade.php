@extends('layouts.dashboard.master')
@section('title', '')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-sky-800 text-white rounded-full px-5 py-4 fas fa-newspaper"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$article->count()}}</span>
                <div class="text-lg">Article<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-orange-300 text-white rounded-full px-3 py-4 fas fa-users"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$users->count()}}</span>
                <div class="text-lg">Users<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-blue-500 text-white rounded-full px-4 py-4 fas fa-envelope"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$mailbox->count()}}</span>
                <div class=text-lg">Emails<i
                        class="mx-2 text-red-500 fas fa-caret-up transform rotate-180"></i></div>
            </div>
        </div>
        <div class="md:col-span-3 bg-gray-100 shadow-md text-gray-800 rounded-xl flex">
            <div class="w-1/3 text-4xl p-5">
                <i class="bg-yellow-500 text-white rounded-full px-3.5 py-4 fas fa-id-card-alt"></i>
            </div>
            <div class="w-2/3 ml-10 my-auto">
                <span class="text-4xl">{{$insight}}</span>
                <div class="text-lg">Insights<i class="mx-2 text-green-500 fas fa-caret-up"></i></div>
            </div>
        </div>
        <mac-card-component cardsname="Staff | Status" class="row-span-1 md:col-span-4 lg:col-span-6 overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                @forelse($users->take(8) as $key => $value)
                    <div class="text-center">
                        <img class="h-8 w-8 rounded-full mx-auto"
                             src="{{asset('Upload/foto_profile/'.$value->foto_profile()->img)}}"
                             alt="">
                        <h1 class="text-base font-normal">{{$value->name}}</h1>
                        <div class="px-6">
                            <h4 class="text-xs bg-indigo-200 rounded-full pt-0.5 font-raleway">{{$value->last_activity === null ? 'Active Now' : Carbon\Carbon::parse($value->last_activity)->diffForHumans()}}</h4>
                        </div>
                    </div>
                @empty
                    Data User Kosong
                @endforelse
            </div>
        </mac-card-component>
        <mac-card-component cardsname="Mail | Table" class="md:col-span-4 lg:col-span-6 overflow-hidden">
            <table class="table-auto w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($mailbox->take(8) as $key => $value)
                            <tr class="border-b-2 border-gray-200 h-10">
                                <td class="py-1">{{$value->id}}</td>
                                <td class="truncate pl-3">{{$value->kunjungan != null ? $value->kunjungan()->email : json_decode($value->content)->items->email}}</td>
                                <td class="truncate">{{$value->kunjungan != null ? 'Kunjungan_'.$value->kunjungan : 'Pesan Dari '.json_decode($value->content)->items->name}}</td>
                                <td class="truncate">{{$value->created_at}}</td>
                            </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            <a href="{{route('dashboard.mailbox.index')}}" class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </a>
        </mac-card-component>
        <mac-card-component cardsname="Article | Table" class="row-span-2 md:col-span-4 lg:col-span-12 overflow-hidden">
            <table class="table-auto w-full text-xs md:text-base mb-4">
                <thead class="border-b-4">
                <tr>
                    <th>No</th>
                    <th>Article Id</th>
                    <th class="w-96">Title</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($article->take(8) as $key => $value)
                    <tr class="border-b-2 border-gray-200 h-10">
                        <td class="text-center">{{$value->id}}</td>
                        <td class="px-3"><a class="text-blue-500" href="{{route('dashboard.publikasi.edit', $value->randKey)}}">{{$value->randKey}}</a></td>
                        <td class="w-96 truncate">{{$value->title}}</td>
                        <td class="py-1 flex">
                            @if($value->status === 'publish')
                                <span
                                    class="bg-green-500 m-auto hover:bg-green-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </span>
                            @elseif($value->status === 'reject')
                                <span
                                    class="bg-red-500 m-auto hover:bg-red-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </span>
                            @elseif($value->status === 'draft')
                                <span
                                    class="bg-yellow-500 m-auto hover:bg-yellow-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </span>
                            @endif
                        </td>
                        <td>
                            <div class="flex items-center">
                                <img class="h-8 w-8 mr-2 rounded-full object-cover"
                                     src="{{asset('Upload/foto_profile/'.$value->users_create()->user()->foto_profile()->img)}}"
                                     alt="">
                                <div class="text-left my-auto">
                                    <div
                                        class="text-sm text-gray-500">{{$value->users_create()->user()->name}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">{{$value->created_at}}</td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            <a href="{{route('dashboard.publikasi.index')}}" class="w-full absolute bottom-0 bg-gray-600 text-white">
                <button class=w-full>View All Orders</button>
            </a>
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
