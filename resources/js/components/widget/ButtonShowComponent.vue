<template>
    <button @click="openModalShow"
            class="text-gray-400 hover:text-indigo-500 text-lg text-center transition-all ease-in-out">
        <i class="fas fa-external-link"></i>
    </button>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            urlreq: {delete_req: this.delete_req, edit_req: this.edit_req, change_password: this.change_password_req, remove_superadmin: this.remove_superadmin}
        }
    },
    props: ['user', 'img', 'delete_req', 'edit_req', 'change_password_req', 'remove_superadmin'],
    methods: {
        openModalShow: function () {
            axios
                .get(this.$props.user)
                .then(response => (this.$store.state.modal.modalshow.item = response.data))
            this.$store.state.modal.modalshow.img = this.$props.img
            this.$store.state.modalvalidation.url.urls_req = this.urlreq
            this.$store.commit('toggleModalShow')
        }
    }
}
</script>

<style scoped>

</style>
