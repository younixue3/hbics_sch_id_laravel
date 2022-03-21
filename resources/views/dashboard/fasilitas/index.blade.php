@extends('layouts.dashboard.master')
@section('title', 'Dashboard')
@section('content')
    <add-fasilitas-function></add-fasilitas-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
{{--            {{$errors['fileupload']}}--}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 px-3">
                @forelse($data as $key => $value)
                    <card-fasilitas-component name="{{asset('Upload/fasilitas_assets/'. $value->name)}}" type="{{$value->type}}" delete_req="{{route('dashboard.fasilitas.destroy', $value->id)}}" edit_req="{{route('dashboard.fasilitas.update', $value->id)}}"></card-fasilitas-component>
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
@section('modalEdit')
    <input type="file" name="fileupload" id="fileupload" class="block w-full h-full text-sm p-5 text-center text-slate-500 cursor-pointer
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
@endsection
@section('notification')
    <div class="fixed bottom-0 right-0 flex-row">
        @forelse ($errors->all() as $error)
            <notification-component type="error" message="{{$error}}"></notification-component>
        @empty
        @endforelse
    </div>
@endsection
