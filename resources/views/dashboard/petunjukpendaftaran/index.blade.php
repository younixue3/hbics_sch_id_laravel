@extends('layouts.dashboard.master')
@section('title', 'Prestasi')
@section('content')
    <button-add-function add_req="{{route('dashboard.petunjuk_pendaftaran.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Prestasi | Table" class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">No</th>
                        <th class="py-1">Area</th>
                        <th class="py-1">Title</th>
                        <th class="py-1 w-96">Content</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($petunjuk_pendaftaran as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1">{{$value->id}}</td>
                            <td class="py-1 uppercase">{{$value->type}}</td>
                            <td class="py-1 uppercase">{{$value->judul}}</td>
                            <td class="py-1 uppercase">{{$value->isi}}</td>
                            <td class="py-1">
                                <button-show-component user="{{route('dashboard.petunjuk_pendaftaran.show', $value->id)}}"
                                                       delete_req="{{route('dashboard.petunjuk_pendaftaran.destroy', $value->id)}}"
                                                       edit_req="{{route('dashboard.petunjuk_pendaftaran.update', $value->id)}}"></button-show-component>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$petunjuk_pendaftaran->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
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
                Title
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="title">
        </div>
        <div class="row-span-2">
            <label class="block font-medium text-gray-700">
                Content
            </label>
            <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
                <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                       type="text" name="title">
            </div>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <select name="type" class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300">
                <option value="hhk">HHK</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
            </select>
{{--            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"--}}
{{--                   type="text" name="prestasi">--}}
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
