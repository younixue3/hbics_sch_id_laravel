@extends('layouts.dashboard.master')
@section('title', 'Staff')
@section('content')
    <button-add-function add_req="{{route('dashboard.staff.store')}}"></button-add-function>
    <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-x-5 gap-y-5 my-5">
        <mac-card-component cardsname="Gallery | Table" class="row-span-3 md:col-span-6 lg:col-span-12">
            <div>

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
