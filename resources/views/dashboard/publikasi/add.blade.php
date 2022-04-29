@extends('layouts.dashboard.master')
@section('title', 'Publikasi | Add')
@section('content')
    <workspace-publikasi-function store_link="{{route('dashboard.publikasi.store')}}" @submit="submitPublikasi">
        <multiple-select-component nameoption="selectcategory" valueoption="{{$category}}"></multiple-select-component>
        <input type="hidden" name="_method" value="post">
    </workspace-publikasi-function>
<script>
    export default {
        methods: {
            submitPublikasi: function () {
                this.$store.state.workspace.file = 0
            },
            selectStatus: function () {
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
