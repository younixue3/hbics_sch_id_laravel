<template>
    <button @click="openModalShow" class="text-gray-400 hover:text-indigo-500 text-lg text-center transition-all ease-in-out">
        <i class="fas fa-external-link"></i>
    </button>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
        }
    },
    props: ['user', 'img'],
    methods: {
        openModalShow: function () {
            axios
                .get(this.$props.user)
                .then(response => (this.$store.state.modal.modalshow.item = response.data))
            this.$store.state.modal.modalshow.img = this.$props.img
            this.$store.commit('toggleModalShow')
        }
    }
}
</script>

<style scoped>

</style>
