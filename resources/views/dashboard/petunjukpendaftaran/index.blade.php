@extends('layouts.dashboard.master')
@section('title', 'Prestasi')
@section('content')
    <button-add-function add_req="{{route('dashboard.petunjuk-pendaftaran.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Prestasi | Table"
                            class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            <div class="px-10">
                <h1>HHK</h1>
                <div class="border-2 rounded-xl px-8 p-5">
                    <ol class="relative border-l border-gray-400">
                        @forelse($petunjuk_pendaftaran_hhk as $key => $value)
                            <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                            </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">{{$value->judul}}</h3>
                                <p class="text-base font-normal text-gray-500">{{$value->isi}}</p>
                                <div class="my-5">
                                    <button-show-component
                                        user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"
                                        delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"
                                        edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>
                                </div>
                            </li>
                            {{--                        <tr class="hover:bg-blue-50 transition-all duration-200">--}}
                            {{--                            <td class="py-1">{{$value->id}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->type}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->judul}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->isi}}</td>--}}
                            {{--                            <td class="py-1">--}}
                            {{--                                <button-show-component user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"--}}
                            {{--                                                       delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"--}}
                            {{--                                                       edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>--}}
                            {{--                            </td>--}}
                            {{--                        </tr>--}}
                        @empty
                            Data kosong
                        @endforelse
                    </ol>
                </div>
                <h1>SD</h1>
                <div class="border-2 rounded-xl px-8 p-5">
                    <ol class="relative border-l border-gray-400">
                        @forelse($petunjuk_pendaftaran_sd as $key => $value)
                            <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                            </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">{{$value->judul}}</h3>
                                <p class="text-base font-normal text-gray-500">{{$value->isi}}</p>
                                <div class="my-5">
                                    <button-show-component
                                        user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"
                                        delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"
                                        edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>
                                </div>
                            </li>
                            {{--                        <tr class="hover:bg-blue-50 transition-all duration-200">--}}
                            {{--                            <td class="py-1">{{$value->id}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->type}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->judul}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->isi}}</td>--}}
                            {{--                            <td class="py-1">--}}
                            {{--                                <button-show-component user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"--}}
                            {{--                                                       delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"--}}
                            {{--                                                       edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>--}}
                            {{--                            </td>--}}
                            {{--                        </tr>--}}
                        @empty
                            Data kosong
                        @endforelse
                    </ol>
                </div>
                <h1>SMP</h1>
                <div class="border-2 rounded-xl px-8 p-5">
                    <ol class="relative border-l border-gray-400">
                        @forelse($petunjuk_pendaftaran_smp as $key => $value)
                            <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                            </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">{{$value->judul}}</h3>
                                <p class="text-base font-normal text-gray-500">{{$value->isi}}</p>
                                <div class="my-5">
                                    <button-show-component
                                        user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"
                                        delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"
                                        edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>
                                </div>
                            </li>
                            {{--                        <tr class="hover:bg-blue-50 transition-all duration-200">--}}
                            {{--                            <td class="py-1">{{$value->id}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->type}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->judul}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->isi}}</td>--}}
                            {{--                            <td class="py-1">--}}
                            {{--                                <button-show-component user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"--}}
                            {{--                                                       delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"--}}
                            {{--                                                       edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>--}}
                            {{--                            </td>--}}
                            {{--                        </tr>--}}
                        @empty
                            Data kosong
                        @endforelse
                    </ol>
                </div>
                <h1>SMA</h1>
                <div class="border-2 rounded-xl px-8 p-5">
                    <ol class="relative border-l border-gray-400">
                        @forelse($petunjuk_pendaftaran_sma as $key => $value)
                            <li class="mb-10 ml-6">
                            <span
                                class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-800 rounded-full">
                            </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900">{{$value->judul}}</h3>
                                <p class="text-base font-normal text-gray-500">{{$value->isi}}</p>
                                <div class="my-5">
                                    <button-show-component
                                        user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"
                                        delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"
                                        edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>
                                </div>
                            </li>
                            {{--                        <tr class="hover:bg-blue-50 transition-all duration-200">--}}
                            {{--                            <td class="py-1">{{$value->id}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->type}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->judul}}</td>--}}
                            {{--                            <td class="py-1 uppercase">{{$value->isi}}</td>--}}
                            {{--                            <td class="py-1">--}}
                            {{--                                <button-show-component user="{{route('dashboard.petunjuk-pendaftaran.show', $value->id)}}"--}}
                            {{--                                                       delete_req="{{route('dashboard.petunjuk-pendaftaran.destroy', $value->id)}}"--}}
                            {{--                                                       edit_req="{{route('dashboard.petunjuk-pendaftaran.update', $value->id)}}"></button-show-component>--}}
                            {{--                            </td>--}}
                            {{--                        </tr>--}}
                        @empty
                            Data kosong
                        @endforelse
                    </ol>
                </div>
            </div>
            {{--            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">--}}
            {{--                {{$petunjuk-pendaftaran->links('widgets.custom_pagination')}}--}}
            {{--            </div>--}}
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
    <form-petunjuk-pendaftaran-component>
    </form-petunjuk-pendaftaran-component>
@endsection
@section('modalEdit')
    <form-petunjuk-pendaftaran-edit-component>
    </form-petunjuk-pendaftaran-edit-component>
@endsection
@section('modalAdd')
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Title
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="title">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Content
            </label>
            <textarea
                class="flex-1 block w-full rounded-xl resize-none focus:outline-none px-3 py-2 border border-gray-300"
                type="text" name="content"></textarea>
        </div>
        <div class="col-start-1 col-span-1">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <select name="type"
                    class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300">
                <option value="hhk">HHK</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
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
