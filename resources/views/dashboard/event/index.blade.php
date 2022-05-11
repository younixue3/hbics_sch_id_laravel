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
                        <th class="py-1 w-52">Date</th>
                        <th class="py-1 w-52">Time</th>
                        <th class="py-1 w-52"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($events as $key => $value)
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
                            <td class="w-52 py-1 text-sm text-gray-500">
                                {{\Carbon\Carbon::parse($value->date)->format('d M Y')}}
                            </td>
                            <td class="w-52 py-1 text-sm text-gray-500 flex justify-center">
                                <div class="px-3 rounded-full bg-gray-100 border border-gray-800 font-semibold">{{\Carbon\Carbon::parse($value->start_at)->format('g:i A')}}</div> <span class="mx-2 font-bold">s/d</span> <div class="px-3 rounded-full bg-gray-100 border border-gray-800 font-semibold">{{\Carbon\Carbon::parse($value->end_at)->format('g:i A')}}</div>
                            </td>

                            <td class="w-52 text-center py-1 px-3">
                                <button-dot-menu-component
                                    delete_req="{{route('dashboard.event.destroy', $value->id)}}"
                                    edit_url="{{route('dashboard.event.edit', $value->id)}}"
                                    show_url="{{route('publikasi.show', \App\Models\Publikasis::find($value->publikasi)->randKey)}}">
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
                {{$events->links('widgets.custom_pagination')}}
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
