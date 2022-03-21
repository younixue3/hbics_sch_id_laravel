@extends('layouts.dashboard.master')
@section('title', 'Staff')
@section('content')
    <button-add-function add_req="{{route('dashboard.staff.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
            <div>
                <table class="w-full text-center">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-1">Name</th>
                        <th class="py-1">Area</th>
                        <th class="py-1">Role</th>
                        <th class="py-1"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                    <tr class="hover:bg-blue-100 transition-all duration-200">
                        <td class="py-1 pl-4">
                            <div class="flex items-center">
                                <img class="h-8 w-8 mr-2 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                                <div class="text-left my-auto">
                                    Jane Doe
                                    <div class="text-sm text-gray-500">janedoe@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-1">BackEnd Web Developer</td>
                        <td class="py-1">Admin</td>
                        <td class="py-1">
                            <button class="text-gray-400 hover:text-indigo-500 text-lg text-center transition-all ease-in-out">
                                <i class="fas fa-external-link"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-gray-100 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            </div>
        </mac-card-component>
    </div>
@endsection
@section('modalEdit')
@endsection
@section('modalAdd')
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
