@extends('layouts.dashboard.master')
@section('title', 'Teacher & Staff')
@section('content')
    <button-add-function add_req="{{route('dashboard.teacher_staff.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12 overflow-hidden">
            <div>
                <table class="table-auto w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">No</th>
                        <th class="py-1">Name</th>
                        <th class="py-1">Area</th>
                        <th class="py-1 w-96">Profesi</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    @forelse($teacherstaff as $key => $value)
                        <tr class="hover:bg-blue-50 transition-all duration-200">
                            <td class="py-1">{{$value->id}}</td>
                            <td class="py-1 pl-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 mr-2 rounded-xl object-cover"
                                         src="{{asset('Upload/foto_teacher_staff/'.$value->picture)}}"
                                         alt="">
                                    <div class="text-left my-auto">
                                        {{$value->first_name . ' ' . $value->last_name}}
                                        <div class="text-sm text-gray-500">{{$value->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-1 uppercase">{{$value->area}}</td>
                            <td class="py-1.5">
                                {{$value->profesi}}
                            </td>
                            <td class="py-1">
                                <button-show-component img="{{asset('Upload/foto_teacher_staff/'. $value->picture)}}"
                                                       user="{{route('dashboard.teacher_staff.show', $value->id)}}"
                                                       delete_req="{{route('dashboard.teacher_staff.destroy', $value->id)}}"
                                                       edit_req="{{route('dashboard.teacher_staff.update', $value->id)}}"
                                                       change_password_req="{{route('dashboard.teacher_staff.update', $value->id)}}"
                                                       remove_superadmin="{{route('dashboard.teacher_staff.update', $value->id)}}"></button-show-component>
                            </td>
                        </tr>
                    @empty
                        Data kosong
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                {{$teacherstaff->links('widgets.custom_pagination')}}
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalShow')
    <form-teacher-staff-component>
    </form-teacher-staff-component>
@endsection
@section('modalEdit')
    <form-edit-teacher-staff-component>
    </form-edit-teacher-staff-component>
@endsection
@section('modalAdd')
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-span-1">
            <label class="block font-medium text-gray-700">
                First Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="first_name">
        </div>
        <div class="col-span-1">
            <label class="block font-medium text-gray-700">
                Last Name
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="last_name">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Profesi
            </label>
            <input class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300"
                   type="text" name="profesi">
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
                <option>sdk</option>
                <option>smpk</option>
                <option>smak</option>
                <option>qrd</option>
                <option>finance</option>
                <option>hrga</option>
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
