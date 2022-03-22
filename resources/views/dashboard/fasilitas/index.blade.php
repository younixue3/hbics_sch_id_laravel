@extends('layouts.dashboard.master')
@section('title', 'Dashboard')
@section('content')
    <button-add-function add_req="{{route('dashboard.fasilitas.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
            {{--            {{$errors['fileupload']}}--}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 px-3">
                @forelse($data as $key => $value)
                    <card-fasilitas-component name="{{asset('Upload/fasilitas_assets/'.  $value->name)}}"
                                              type="{{$value->type}}"
                                              delete_req="{{route('dashboard.fasilitas.destroy', $value->id)}}"
                                              edit_req="{{route('dashboard.fasilitas.update', $value->id)}}"></card-fasilitas-component>
                @empty
                    <h3 class="m-auto">Data Kosong</h3>
                @endforelse
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$data->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
    <img class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'img'"
         :src="$store.state.modal.modalshow.item">
    <video class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'video'">
        <source :src="$store.state.modal.modalshow.item">
    </video>
@endsection
@section('modalEdit')
    <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
        <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Area
        </label>
        <select name="area" class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300">
            <option disabled selected>--- Pilih Area ---</option>
            <option>TK</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
        </select>
    </div>
@endsection
@section('modalAdd')
    <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
        <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Area
        </label>
        <select name="area" class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300">
            <option disabled selected>--- Pilih Area ---</option>
            <option>TK</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
        </select>
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
