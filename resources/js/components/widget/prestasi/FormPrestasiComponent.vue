<template>
    <div class="grid grid-cols-3 gap-5 text-left w-[42rem]">
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Name
            </label>
            <input disabled class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="name" :value="$store.state.modal.modalshow.item.prestasi.name">
        </div>
        <div class="row-span-2">
            <label class="block font-medium text-gray-700">
                Foto
            </label>
            <img class="m-auto rounded-full h-24 w-24 object-cover border border-gray-200" :src="$store.state.modal.modalshow.img">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Prestasi
            </label>
            <input disabled class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" type="text" name="prestasi" :value="$store.state.modal.modalshow.item.prestasi.prestasi">
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Detail Prestasi
            </label>
            <textarea disabled class="resize-none flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300" name="detail_prestasi" :value="$store.state.modal.modalshow.item.prestasi.detail_prestasi"></textarea>
        </div>
        <div class="col-start-1 col-span-2">
            <label class="block font-medium text-gray-700">
                Area
            </label>
            <input disabled class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300 uppercase" type="text" name="area" :value="$store.state.modal.modalshow.item.prestasi.area">
        </div>
        <div class="col-start-3">
            <div class="mt-2 grid grid-cols-2 gap-2">
                <button type="button" @click="openModalEdit" class="rounded-lg bg-gray-50 hover:bg-gray-100 border border-gray-300 px-1.5 py-1 text-xs font-medium text-black after:content-['_↗'] transition-all ease-in-out">Edit Staff</button>
                <button type="button" @click="openModalValidation()" class="rounded-lg bg-red-500 hover:bg-red-600 border border-red-600 px-1.5 py-1 text-xs font-medium text-white after:content-['_⊘'] transition-all ease-in-out">Delete Staff</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {
        openModalValidation: function () {
            this.$store.state.modalvalidation.url.url_req = this.$store.state.modalvalidation.url.urls_req.delete_req
            this.$store.state.modalvalidation.url.validation_form = "formDelete"
            this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
            this.$store.commit('toggleModalValidationView')
        },
        openModalEdit: function () {
            this.$store.state.modalvalidation.url.url_req = this.$store.state.modalvalidation.url.urls_req.edit_req
            this.$store.commit('toggleModalEdit')
        },
    }
}
</script>

<style scoped>

</style>
