@extends('layouts.dashboard.master')
@section('title', 'Pages')
@section('content')
    <button-add-function add_req="{{route('dashboard.pages.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5 my-5 h-[50rem]">
        @forelse($pages as $key => $value)
        <div class="rounded-2xl bg-white overflow-hidden">
            <div class="grid grid-rows-5 h-full">
                <img class="row-span-2 w-full h-full object-cover" src="{{asset('assets/stock_photo_rdev/cambridge.webp')}}">
                <div class="row-span-3 w-full h-full p-5">
                    <h3>{{$value->name}}</h3>
                    <h4 class="text-sm italic font-normal">{{'/'.$value->url}}</h4>
                    <div class="mt-5 grid grid-cols-3 gap-2 w-28">
                        <a href="{{route($value->url, $value->id)}}" class="w-8 h-8 flex bg-green-400 text-white text-lg font-semibold rounded-lg"><i class="fas fa-eye m-auto text-sm"></i></a>
                        <a href="{{route('dashboard.pages.edit', $value->id)}}" class="w-8 h-8 flex bg-amber-400 text-white text-lg font-semibold rounded-lg"><i class="fas fa-edit m-auto text-sm"></i></a>
                        <button-delete-pages-function delete_req="{{route('dashboard.pages.destroy', $value->id)}}"></button-delete-pages-function>
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
@endsection
@section('modalShow')
    <form-komunitas-component>
    </form-komunitas-component>
@endsection
@section('modalEdit')
    <form-komunitas-edit-component>
    </form-komunitas-edit-component>
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
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100
                                "/>
            </div>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Status
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="status">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Pesan
            </label>
            <textarea
                class="resize-none flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                name="pesan"></textarea>
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
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Koneksi
            </label>
            <select name="connection"
                    class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase">
                <option disabled selected>--- Pilih Koneksi ---</option>
                <option>Alumni</option>
                <option value="orang_tua">Orang Tua</option>
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
