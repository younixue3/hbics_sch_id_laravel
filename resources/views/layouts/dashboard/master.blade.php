<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBICS | Dashboard | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app" class="bg-gray-100 font-raleway">
    <modal-show-component>
        @yield('modalShow')
    </modal-show-component>
    <modal-add-function>
        @yield('modalAdd')
    </modal-add-function>
    <modal-edit-function>
        @yield('modalEdit')
    </modal-edit-function>
    <modal-validation-function></modal-validation-function>
    <div class="flex w-full">
        @include('layouts.dashboard.header')
        <div class="min-h-screen w-full px-10 py-5">
            @yield('content')
        </div>
    </div>
    @yield('notification')
</div>
@include('layouts.dashboard.footer')
</div>
{{--VueJs--}}
<script>
    Vue.component('modalEditFunctions', {
        el: '#modal_edit_functions'
        methods: {
            closeModal: function () {
                // this.$store.state.modal.modaledit = null
                // this.$store.state.modal.modaledit.type = null
                console.log(this.$refs.fileupload)
                this.$store.commit('toggleModalEdit')
            },
            submitModal: function () {
                console.log('submit')
                this.$store.state.modalvalidation.item = this.$store.state.modal.modaledit.item
                this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
                this.$store.state.modalvalidation.url.edit_req = "formEditFasilitas"
                this.$store.commit('toggleModalValidationView')
            }
        }
    })
    export default {
        data() {
            return {}
        },
        methods: {
            closeModal: function () {
                // this.$store.state.modal.modaledit = null
                // this.$store.state.modal.modaledit.type = null
                console.log(this.$refs.fileupload)
                this.$store.commit('toggleModalEdit')
            },
            submitModal: function () {
                console.log('submit')
                this.$store.state.modalvalidation.item = this.$store.state.modal.modaledit.item
                this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
                this.$store.state.modalvalidation.url.edit_req = "formEditFasilitas"
                this.$store.commit('toggleModalValidationView')
            }
        }
    }
</script>
{{--VueJs--}}
<script src="{{asset('js/app.js')}}"></script>
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .removescrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .removescrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
</style>
</body>
</html>
