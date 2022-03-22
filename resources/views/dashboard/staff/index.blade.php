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
                        <th class="py-1">Name</th>
                        <th class="py-1">Area</th>
                        <th class="py-1 w-96">Role</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($user as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1 pl-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 mr-2 rounded-full"
                                         src="{{asset('Upload/foto_profile/') . $value->foto_profile()->img}}"
                                         alt="">
                                    <div class="text-left my-auto">
                                        {{$value->name}}
                                        <div class="text-sm text-gray-500">{{$value->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-1 uppercase">{{$value->area}}</td>
                            <td class="py-1.5 grid grid-cols-3 gap-1">
                                @foreach($value->roles_user()->get() as $key => $item)
                                    <span class="bg-gray-200 text-xs rounded-md px-2 pb-0.5">
                                        {{$item->roles()->first()->name}}
                                    </span>
                                @endforeach
                            </td>
                            <td class="py-1">
                                <button-show-component img="{{asset('Upload/foto_profile/'. $value->foto_profile()->img)}}" user="{{route('dashboard.staff.show', $value->randKey)}}"></button-show-component>
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
    <form-staff-component>
        <template v-slot:multicomponent>
            <multiple-select-component disabled="true" class="col-start-1 col-span-2" nameoption="selectrole"></multiple-select-component>
        </template>
    </form-staff-component>
@endsection
@section('modalEdit')

@endsection
@section('modalAdd')
    <div class="grid grid-cols-2 gap-5 text-left">
        <div class="">
            <label class="block font-medium text-gray-700">
                Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="name">
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
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                "/>
            </div>
        </div>
        <div class="">
            <label class="block font-medium text-gray-700">
                Email
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="email" name="email">
        </div>
        <div class="">
            <label class="block font-medium text-gray-700">
                Password
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="password" name="password">
        </div>
        <div class="col-start-1">
            <label class="block font-medium text-gray-700">
                Password
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="password" name="password_confirmation">
        </div>
        <multiple-select-component class="col-start-1 col-span-2" nameoption="selectrole" valueoption="{{$role}}"></multiple-select-component>
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
