@extends('layouts.dashboard.master')
@section('title', 'Publikasi')
@section('content')
    <a href="{{route('dashboard.publikasi.create')}}"
       class="bg-green-400 rounded-lg w-20 px-3 flex justify-between text-center"><span>Add</span><i
            class="fa-solid fa-plus my-auto"></i></a>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">Title</th>
                        <th class="py-1">Author</th>
                        <th class="py-1">Category</th>
                        <th class="py-1">Status</th>
                        <th class="py-1">Created</th>
                        <th class="py-1">Updated</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($publikasis as $key => $value)
                        {{--                        {{$value->users_update()->staff()}}--}}
                        {{--                        {{dd($value->user_update()->staff())}}--}}
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1 pl-4">
                                <div class="flex items-center">
                                    <div class="text-left my-auto">
                                        {{$value->title}}
                                    </div>
                                </div>
                            </td>
                            <td class="py-1">
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
                            <td class="py-1">
                                @foreach($value->kategoris_publikasi()->get() as $key => $item)
                                    <span class="bg-gray-200 text-xs rounded-md px-2 pb-0.5">
                                    {{$item->kategoris()->name}}
                                </span>
                                @endforeach
                            </td>
                            <td class="py-1 flex">
                                @if($value->status === 'publish')
                                    <div
                                        class="bg-green-500 m-auto hover:bg-green-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </div>
                                @elseif($value->status === 'reject')
                                    <div
                                        class="bg-red-500 m-auto hover:bg-red-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </div>
                                @elseif($value->status === 'draft')
                                    <div
                                        class="bg-yellow-500 m-auto hover:bg-yellow-600 text-white text-xs rounded-md px-2 pb-0.5 cursor-pointer">
                                        {{$value->status}}
                                    </div>
                                @endif
                            </td>
                            <td class="py-1 text-sm text-gray-500">
                                {{\Carbon\Carbon::parse($value->created_at)->format('d M Y')}}
                            </td>
                            <td class="py-1">
                                <div class="flex items-center text-sm text-gray-500">
                                    @if($value->users_update() != null)
                                        <span>{{\Carbon\Carbon::parse($value->users_update()->updated_at)->setTimezone('Asia/Kuala_Lumpur')->format('d M Y - h:i:s')}}</span>
                                        (
                                        <img class="h-4 w-4 ml-1 mr-1 rounded-full object-cover"
                                             src="{{asset('Upload/foto_profile/'.$value->users_update()->user()->foto_profile()->img)}}"
                                             alt="">
                                        <div class="text-left my-auto text-xs">
                                            <div class="">
                                                {{$value->users_update()->user()->name}}
                                            </div>
                                        </div>
                                        )
                                    @else
                                        <div class="text-center w-full italic">
                                            Tidak ada perubahan
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="py-1 px-3">
                                <button-dot-menu-component
                                    delete_req="{{route('dashboard.publikasi.destroy', $value->randKey)}}"
                                    edit_url="{{route('dashboard.publikasi.edit', $value->randKey)}}"
                                    show_url="{{route('publikasi.show', $value->randKey)}}">
                                </button-dot-menu-component>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$publikasis->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
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
