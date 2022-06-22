<template>
    <button @click="openModalValidation" class="w-8 h-8 flex bg-red-400 text-white text-lg font-semibold rounded-lg"><i class="fas fa-trash m-auto text-sm"></i></button>
</template>

<script>
export default {
    name: 'ButtonDeleteFucntion',
    props: [
        'delete_req'
    ],
    methods: {
        openModalValidation: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.delete_req
            this.$store.state.modalvalidation.url.validation_form = "formDelete"
            this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
            this.$store.commit('toggleModalValidationView')
        },
    }
}
</script>

<style scoped>

</style>
