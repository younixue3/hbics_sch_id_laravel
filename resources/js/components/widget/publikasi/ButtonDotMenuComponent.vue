<template>
    <div class="flex">
        <div class="static">
            <button @click="showmenu"><i class="fa-solid fa-ellipsis-vertical"></i></button>
        </div>
        <div v-if="show" v-click-outside="focusout"
             class="absolute right-6 -translate-y-1/2 bg-white shadow-md rounded-md px-10">
            <div class="grid grid-cols-1">
                <a :href="show_url" target="_blank">
                    Show
                </a>
                <a :href="edit_url">
                    Edit
                </a>
                <div class="cursor-pointer" @click="openModalValidation">
                    Delete
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import vClickOutside from "v-click-outside";

export default {
    data() {
        return {
            show: false
        }
    },
    props: ['show_url', 'edit_url', 'delete_req'],
    methods: {
        showmenu: function () {
            this.show = true
        },
        focusout: function () {
            this.show = false
        },
        openModalValidation: function () {
            this.$store.state.modalvalidation.url.url_req = this.$props.delete_req
            this.$store.state.modalvalidation.url.validation_form = "formDelete"
            this.$store.state.modalvalidation.massage = "Apakah anda yakin untuk menghapus data ini?"
            this.$store.commit('toggleModalValidationView')
        },
    },
}
</script>

<style scoped>

</style>
