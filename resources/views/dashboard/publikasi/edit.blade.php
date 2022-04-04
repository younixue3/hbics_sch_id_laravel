@extends('layouts.dashboard.master')
@section('title', 'Edit')
@section('content')
{{--    {{dd($publikasi->publikasis_contents()->first()->content()->first()->item)}}--}}
    <workspace-publikasi-function editmode="true" urlasset="{{asset('Upload/foto_content')}}" fetchdata="{{$publikasi->publikasis_contents()->first()->content()->first()->item}}" store_link="{{route('dashboard.publikasi.update',$publikasi->randKey)}}" @submit="submitPublikasi">
        <multiple-select-component nameoption="selectcategory" valueoption="{{$category}}"></multiple-select-component>
        @if(auth()->user()->is_super_admin === 1 || auth()->user()->roles_user()->where('role', 2) !== null)
            <status-dropdown-component></status-dropdown-component>
        @else
        @endif
        <input type="hidden" name="_method" value="put">
    </workspace-publikasi-function>
<script>
    export default {
        methods: {
            submitPublikasi: function () {
                this.$store.state.workspace.file = 0
            }
        }
    }
</script>
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
