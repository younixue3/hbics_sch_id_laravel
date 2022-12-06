<template>
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
        <div class="col-start-1 row-span-2">
            <div class="mt-2 grid grid-cols-2 gap-2">
                <button type="button" @click="openModalEdit"
                        class="rounded-lg bg-gray-50 hover:bg-gray-100 border border-gray-300 px-1.5 py-1 text-xs font-medium text-black after:content-['_↗'] transition-all ease-in-out">
                    Edit Data
                </button>
                <button type="button" @click="openModalValidation()"
                        class="rounded-lg bg-red-500 hover:bg-red-600 border border-red-600 px-1.5 py-1 text-xs font-medium text-white after:content-['_⊘'] transition-all ease-in-out">
                    Delete Data
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FormPetunjukPendaftaranComponent",
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
