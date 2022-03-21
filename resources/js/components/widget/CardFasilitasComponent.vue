<template>
    <div class="flex relative group">
        <video class="w-full h-60 rounded-xl object-cover" v-if="type === 'video'">
            <source :src="name">
        </video>
        <img v-if="type === 'img'" class="w-full h-60 rounded-xl object-cover" :src="name">
        <div
            class="absolute right-1/2 bottom-2 translate-x-1/2 grid grid-cols-3 gap-x-5 bg-white rounded-lg shadow-lg px-2 py-0.5 text-base text-center opacity-0 group-hover:opacity-100 group-hover:bottom-1 transition-all ease-in-out duration-500">
            <div>
                <div class="cursor-pointer" @click="openModalEdit()">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>
            </div>
            <div>
                <div class="cursor-pointer" @click="openModalShow()">
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
            <div>
                <div class="cursor-pointer" @click="openModalValidation()">
                    <i class="fa-solid fa-trash-can"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dataItem: {
                name: this.$props.name,
            },
        }
    },
    props: ['name', 'type', 'delete_req', 'edit_req'],
    methods: {
        openModalValidation: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.delete_req
            this.$store.state.modalvalidation.url.validation_form = "formDelete"
            this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
            this.$store.commit('toggleModalValidationView')
        },
        openModalShow: function () {
            this.$store.state.modal.modalshow.item = this.$props.name
            this.$store.state.modal.modalshow.type = this.$props.type
            this.$store.commit('toggleModalShow')
        },
        openModalEdit: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.edit_req
            this.$store.commit('toggleModalEdit')
        },
    }
}
</script>

<style scoped>

</style>
