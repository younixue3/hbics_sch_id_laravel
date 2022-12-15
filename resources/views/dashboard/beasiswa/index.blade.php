@extends('layouts.dashboard.master')
@section('title', 'Prestasi')
@section('content')
    <button-add-function add_req="{{route('dashboard.program-beasiswa.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Prestasi | Table" class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">No</th>
                        <th class="py-1">Title</th>
                        <th class="py-1 w-96">Content</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($beasiswa as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1">{{$value->id}}</td>
                            <td class="py-1 uppercase">{{$value->title}}</td>
                            <td class="py-1 uppercase">{{$value->content}}</td>
                            <td class="py-1">
                                <button-show-component user="{{route('dashboard.program-beasiswa.show', $value->id)}}"
                                                       delete_req="{{route('dashboard.program-beasiswa.destroy', $value->id)}}"
                                                       edit_req="{{route('dashboard.program-beasiswa.update', $value->id)}}"></button-show-component>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$beasiswa->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
    <form-beasiswa-component>
    </form-beasiswa-component>
@endsection
@section('modalEdit')
    <form-beasiswa-edit-component>
    </form-beasiswa-edit-component>
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
            <textarea class="flex-1 block w-full rounded-xl resize-none focus:outline-none px-3 py-2 border border-gray-300"
                      type="text" name="content"></textarea>
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
