@extends('layouts.dashboard.master')
@section('title', 'Staff')
@section('content')
    <button-add-function add_req="{{route('dashboard.staff.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="User | Table" class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="p-1">No</th>
                        <th class="p-1">Name</th>
                        <th class="p-1">Area</th>
                        <th class="p-1 w-96">Role</th>
                        <th class="p-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($user as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1">{{$value->id}}</td>
                            <td class="py-1 pl-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 mr-2 rounded-xl object-cover"
                                         src="{{asset('Upload/foto_profile/'.$value->foto_profile()->img)}}"
                                         alt="">
                                    <div class="text-left my-auto">
                                        {{$value->name}}
                                        <div class="text-sm text-gray-500">{{$value->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-1 uppercase">{{$value->area}}</td>
                            <td class="py-1.5 grid grid-cols-3 gap-1">
                                @foreach($value->roles_user() as $key => $item)
                                    <span class="bg-gray-200 text-xs rounded-md px-2 pb-0.5">
                                        {{$item->roles()->name}}
                                    </span>
                                @endforeach
                            </td>
                            <td class="py-1">
                                <button-show-component
                                    img="{{asset('Upload/foto_profile/'. $value->foto_profile()->img)}}"
                                    user="{{route('dashboard.staff.show', $value->randKey)}}"
                                    delete_req="{{route('dashboard.staff.destroy', $value->randKey)}}"
                                    edit_req="{{route('dashboard.staff.update', $value->randKey)}}"
                                    change_password_req="{{route('dashboard.staff.update', $value->randKey)}}"
                                    remove_superadmin="{{route('dashboard.staff.update', $value->randKey)}}"></button-show-component>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$user->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalChangePassword')
    <form-staff-change-password-component>
    </form-staff-change-password-component>
@endsection
@section('modalShow')
    <form-staff-component>
        <template v-slot:multicomponent>
            <multiple-select-component disabled="true" class="col-start-1 col-span-2" nameoption="selectrole"
                                       valueoption="true"></multiple-select-component>
        </template>
    </form-staff-component>
@endsection
@section('modalEdit')
    <form-staff-edit-component>
        <template v-slot:multicomponent>
            <multiple-select-component class="col-start-1 col-span-2" nameoption="selectrole"
                                       valueoption="{{$role}}"></multiple-select-component>
        </template>
    </form-staff-edit-component>
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
                Email
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="email" name="email">
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
                <option>qrd</option>
                <option>finance</option>
                <option>hrga</option>
            </select>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Password
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="password" name="password">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Password
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="password" name="password_confirmation">
        </div>
        <div class="col-start-1 col-span-2 flex justify-self-start px-5">
            <input class="m-auto rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="checkbox"
                   name="is_super_admin">
            <label class="ml-2 w-full font-medium text-gray-700 text-sm">
                Is Superadmin
            </label>
        </div>
        <multiple-select-component class="col-start-1 col-span-2" nameoption="selectrole"
                                   valueoption="{{$role}}"></multiple-select-component>
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
