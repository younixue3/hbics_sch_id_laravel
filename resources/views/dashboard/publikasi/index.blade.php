@extends('layouts.dashboard.master')
@section('title', 'Staff')
@section('content')
    <button-add-function add_req="{{route('dashboard.staff.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">Title</th>
                        <th class="py-1">Author</th>
                        <th class="py-1">Category</th>
                        <th class="py-1">Created Date</th>
                        <th class="py-1">Updated Date</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($publikasis as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1 pl-4">
                                <div class="flex items-center">
                                    <div class="text-left my-auto">
                                        {{$value->title}}
                                        <div class="text-sm text-gray-500">{{$value->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-1 uppercase">{{$value->area}}</td>
                            <td class="py-1.5 grid grid-cols-3 gap-1">
{{--                                @foreach($value->roles_user()->get() as $key => $item)--}}
{{--                                    <span class="bg-gray-200 text-xs rounded-md px-2 pb-0.5">--}}
{{--                                        {{$item->roles()->first()->name}}--}}
{{--                                    </span>--}}
{{--                                @endforeach--}}
                            </td>
                            <td class="py-1">
                                <button><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
@endsection
@section('modalEdit')
@endsection
@section('modalAdd')
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
