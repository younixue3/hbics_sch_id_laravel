@extends('layouts.dashboard.master')
@section('title', 'Fasilitas')
@section('content')
    <button-add-function add_req="{{route('dashboard.fasilitas.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            {{--            {{$errors['fileupload']}}--}}
            <form action="{{route('dashboard.fasilitas.index')}}" class="px-5 flex">
                <label class="mr-5">Filter</label>
                <span class="w-32">
                    <select name="area"
                            class="w-full h-full focus:outline-none px-3 py-0.5 border border-r-0 border-gray-300">
                        <option value="" disabled selected>--Area--</option>
                        <option value="" {{$request->area === '' ? 'selected' : 'selected'}}>Semua</option>
                        <option value="tk" {{$request->area === 'tk' ? 'selected' : ''}}>hhk</option>
                        <option value="sd" {{$request->area === 'sd' ? 'selected' : ''}}>sd</option>
                        <option value="smp" {{$request->area === 'smp' ? 'selected' : ''}}>smp</option>
                        <option value="sma" {{$request->area === 'sma' ? 'selected' : ''}}>sma</option>
                    </select>
                </span>
                <input type="text" name="description"
                       class="w-52 focus:outline-none px-3 py-0.5 border border-r-0 border-gray-300"
                       placeholder="description" value="{{$request->description}}">
                <button type="submit" class="w-10 focus:outline-none px-3 py-0.5 border border-gray-300"><i
                        class="fas fa-search"></i></button>
            </form>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 px-3 mt-5">
                @forelse($data as $key => $value)
                    <card-fasilitas-component name="{{asset('Upload/fasilitas_assets/'.  $value->name)}}"
                                              type="{{$value->type}}"
                                              desc="{{$value->description}}"
                                              delete_req="{{route('dashboard.fasilitas.destroy', $value->id)}}"
                                              edit_req="{{route('dashboard.fasilitas.update', $value->id)}}"></card-fasilitas-component>
                @empty
                    <h3 class="m-auto">Data Kosong</h3>
                @endforelse
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$data->appends(request()->all())->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
    <div class="flex">
        <div class="absolute p-3">
            <h3 class="bg-white px-2 bg-opacity-75" v-text="$store.state.modal.modalshow.desc"></h3>
        </div>
        <img class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'img'"
             :src="$store.state.modal.modalshow.item">
        <video class="h-96 rounded-2xl" v-if="$store.state.modal.modalshow.type === 'video'">
            <source :src="$store.state.modal.modalshow.item">
        </video>
    </div>
@endsection
@section('modalEdit')
    <div class="mt-1 flex justify-center border-2 border-gray-300 border-dashed rounded-xl mb-2">
        <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100
                                "/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Description
        </label>
        <input type="text" name="description"
               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"/>
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
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100
                                "/>
    </div>
    <div class="text-left text-sm">
        <label class="block font-medium text-gray-700">
            Description
        </label>
        <input type="text" name="description"
               class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"/>
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
